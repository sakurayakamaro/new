<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


namespace core_question\bank;

/**
 * Functions used to show question editing interface
 *
 * @package    moodlecore
 * @subpackage questionbank
 * @copyright  1999 onwards Martin Dougiamas and others {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * This class prints a view of the question bank, including
 *  + Some controls to allow users to to select what is displayed.
 *  + A list of questions as a table.
 *  + Further controls to do things with the questions.
 *
 * This class gives a basic view, and provides plenty of hooks where subclasses
 * can override parts of the display.
 *
 * The list of questions presented as a table is generated by creating a list of
 * core_question\bank\column objects, one for each 'column' to be displayed. These
 * manage
 *  + outputting the contents of that column, given a $question object, but also
 *  + generating the right fragments of SQL to ensure the necessary data is present,
 *    and sorted in the right order.
 *  + outputting table headers.
 *
 * @copyright  2009 Tim Hunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class view {
    const MAX_SORTS = 3;

    protected $baseurl;
    protected $editquestionurl;
    protected $quizorcourseid;
    protected $contexts;
    protected $cm;
    protected $course;
    protected $visiblecolumns;
    protected $extrarows;
    protected $requiredcolumns;
    protected $sort;
    protected $lastchangedid;
    protected $countsql;
    protected $loadsql;
    protected $sqlparams;
    /** @var array of \core_question\bank\search\condition objects. */
    protected $searchconditions = array();

    /**
     * Constructor
     * @param question_edit_contexts $contexts
     * @param moodle_url $pageurl
     * @param object $course course settings
     * @param object $cm (optional) activity settings.
     */
    public function __construct($contexts, $pageurl, $course, $cm = null) {
        global $CFG, $PAGE;

        $this->contexts = $contexts;
        $this->baseurl = $pageurl;
        $this->course = $course;
        $this->cm = $cm;

        if (!empty($cm) && $cm->modname == 'quiz') {
            $this->quizorcourseid = '&amp;quizid=' . $cm->instance;
        } else {
            $this->quizorcourseid = '&amp;courseid=' .$this->course->id;
        }

        // Create the url of the new question page to forward to.
        $returnurl = $pageurl->out_as_local_url(false);
        $this->editquestionurl = new \moodle_url('/question/question.php',
                array('returnurl' => $returnurl));
        if ($cm !== null) {
            $this->editquestionurl->param('cmid', $cm->id);
        } else {
            $this->editquestionurl->param('courseid', $this->course->id);
        }

        $this->lastchangedid = optional_param('lastchanged', 0, PARAM_INT);

        $this->init_columns($this->wanted_columns(), $this->heading_column());
        $this->init_sort();
        $this->init_search_conditions($this->contexts, $this->course, $this->cm);
    }

    /**
     * Initialize search conditions from plugins
     * local_*_get_question_bank_search_conditions() must return an array of
     * \core_question\bank\search\condition objects.
     */
    protected function init_search_conditions() {
        $searchplugins = get_plugin_list_with_function('local', 'get_question_bank_search_conditions');
        foreach ($searchplugins as $component => $function) {
            foreach ($function($this) as $searchobject) {
                $this->add_searchcondition($searchobject);
            }
        }
    }

    protected function wanted_columns() {
        global $CFG;

        if (empty($CFG->questionbankcolumns)) {
            $questionbankcolumns = array('checkbox_column', 'question_type_column',
                                     'question_name_column', 'edit_action_column', 'copy_action_column',
                                     'preview_action_column', 'delete_action_column',
                                     'creator_name_column',
                                     'modifier_name_column');
        } else {
             $questionbankcolumns = explode(',', $CFG->questionbankcolumns);
        }
        if (question_get_display_preference('qbshowtext', 0, PARAM_BOOL, new \moodle_url(''))) {
            $questionbankcolumns[] = 'question_text_row';
        }

        foreach ($questionbankcolumns as $fullname) {
            if (! class_exists($fullname)) {
                if (class_exists('core_question\\bank\\' . $fullname)) {
                    $fullname = 'core_question\\bank\\' . $fullname;
                } else {
                    throw new \coding_exception("No such class exists: $fullname");
                }
            }
            $this->requiredcolumns[$fullname] = new $fullname($this);
        }
        return $this->requiredcolumns;
    }


    /**
     * Get a column object from its name.
     *
     * @param string $columnname.
     * @return \core_question\bank\column_base.
     */
    protected function get_column_type($columnname) {
        if (! class_exists($columnname)) {
            if (class_exists('core_question\\bank\\' . $columnname)) {
                $columnname = 'core_question\\bank\\' . $columnname;
            } else {
                throw new \coding_exception("No such class exists: $columnname");
            }
        }
        if (empty($this->requiredcolumns[$columnname])) {
            $this->requiredcolumns[$columnname] = new $columnname($this);
        }
        return $this->requiredcolumns[$columnname];
    }

    /**
     * Specify the column heading
     *
     * @return string Column name for the heading
     */
    protected function heading_column() {
        return 'question_bank_question_name_column';
    }

    /**
     * Initializing table columns
     *
     * @param array $wanted Collection of column names
     * @param string $heading The name of column that is set as heading
     */
    protected function init_columns($wanted, $heading = '') {
        $this->visiblecolumns = array();
        $this->extrarows = array();
        foreach ($wanted as $column) {
            if ($column->is_extra_row()) {
                $this->extrarows[get_class($column)] = $column;
            } else {
                $this->visiblecolumns[get_class($column)] = $column;
            }
        }
        if (array_key_exists($heading, $this->requiredcolumns)) {
            $this->requiredcolumns[$heading]->set_as_heading();
        }
    }

    /**
     * @param string $colname a column internal name.
     * @return bool is this column included in the output?
     */
    public function has_column($colname) {
        return isset($this->visiblecolumns[$colname]);
    }

    /**
     * @return int The number of columns in the table.
     */
    public function get_column_count() {
        return count($this->visiblecolumns);
    }

    public function get_courseid() {
        return $this->course->id;
    }

    protected function init_sort() {
        $this->init_sort_from_params();
        if (empty($this->sort)) {
            $this->sort = $this->default_sort();
        }
    }

    /**
     * Deal with a sort name of the form columnname, or colname_subsort by
     * breaking it up, validating the bits that are presend, and returning them.
     * If there is no subsort, then $subsort is returned as ''.
     * @return array array($colname, $subsort).
     */
    protected function parse_subsort($sort) {
        // Do the parsing.
        if (strpos($sort, '-') !== false) {
            list($colname, $subsort) = explode('-', $sort, 2);
        } else {
            $colname = $sort;
            $subsort = '';
        }
        // Validate the column name.
        $column = $this->get_column_type($colname);
        if (!isset($column) || !$column->is_sortable()) {
            for ($i = 1; $i <= self::MAX_SORTS; $i++) {
                $this->baseurl->remove_params('qbs' . $i);
            }
            throw new \moodle_exception('unknownsortcolumn', '', $link = $this->baseurl->out(), $colname);
        }
        // Validate the subsort, if present.
        if ($subsort) {
            $subsorts = $column->is_sortable();
            if (!is_array($subsorts) || !isset($subsorts[$subsort])) {
                throw new \moodle_exception('unknownsortcolumn', '', $link = $this->baseurl->out(), $sort);
            }
        }
        return array($colname, $subsort);
    }

    protected function init_sort_from_params() {
        $this->sort = array();
        for ($i = 1; $i <= self::MAX_SORTS; $i++) {
            if (!$sort = optional_param('qbs' . $i, '', PARAM_TEXT)) {
                break;
            }
            // Work out the appropriate order.
            $order = 1;
            if ($sort[0] == '-') {
                $order = -1;
                $sort = substr($sort, 1);
                if (!$sort) {
                    break;
                }
            }
            // Deal with subsorts.
            list($colname, $subsort) = $this->parse_subsort($sort);
            $this->requiredcolumns[$colname] = $this->get_column_type($colname);
            $this->sort[$sort] = $order;
        }
    }

    protected function sort_to_params($sorts) {
        $params = array();
        $i = 0;
        foreach ($sorts as $sort => $order) {
            $i += 1;
            if ($order < 0) {
                $sort = '-' . $sort;
            }
            $params['qbs' . $i] = $sort;
        }
        return $params;
    }

    protected function default_sort() {
        return array('core_question\bank\question_type_column' => 1, 'core_question\bank\question_name_column' => 1);
    }

    /**
     * @param $sort a column or column_subsort name.
     * @return int the current sort order for this column -1, 0, 1
     */
    public function get_primary_sort_order($sort) {
        $order = reset($this->sort);
        $primarysort = key($this->sort);
        if ($sort == $primarysort) {
            return $order;
        } else {
            return 0;
        }
    }

    /**
     * Get a URL to redisplay the page with a new sort for the question bank.
     * @param string $sort the column, or column_subsort to sort on.
     * @param bool $newsortreverse whether to sort in reverse order.
     * @return string The new URL.
     */
    public function new_sort_url($sort, $newsortreverse) {
        if ($newsortreverse) {
            $order = -1;
        } else {
            $order = 1;
        }
        // Tricky code to add the new sort at the start, removing it from where it was before, if it was present.
        $newsort = array_reverse($this->sort);
        if (isset($newsort[$sort])) {
            unset($newsort[$sort]);
        }
        $newsort[$sort] = $order;
        $newsort = array_reverse($newsort);
        if (count($newsort) > self::MAX_SORTS) {
            $newsort = array_slice($newsort, 0, self::MAX_SORTS, true);
        }
        return $this->baseurl->out(true, $this->sort_to_params($newsort));
    }

    /**
     * Create the SQL query to retrieve the indicated questions
     * @param stdClass $category no longer used.
     * @param bool $recurse no longer used.
     * @param bool $showhidden no longer used.
     * @deprecated since Moodle 2.7 MDL-40313.
     * @see build_query()
     * @see \core_question\bank\search\condition
     * @todo MDL-41978 This will be deleted in Moodle 2.8
     */
    protected function build_query_sql($category, $recurse, $showhidden) {
        debugging('build_query_sql() is deprecated, please use \core_question\bank\view::build_query() and ' .
                '\core_question\bank\search\condition classes instead.', DEBUG_DEVELOPER);
        self::build_query();
    }

    /**
     * Create the SQL query to retrieve the indicated questions, based on
     * \core_question\bank\search\condition filters.
     */
    protected function build_query() {
        global $DB;

        // Get the required tables and fields.
        $joins = array();
        $fields = array('q.hidden', 'q.category');
        foreach ($this->requiredcolumns as $column) {
            $extrajoins = $column->get_extra_joins();
            foreach ($extrajoins as $prefix => $join) {
                if (isset($joins[$prefix]) && $joins[$prefix] != $join) {
                    throw new \coding_exception('Join ' . $join . ' conflicts with previous join ' . $joins[$prefix]);
                }
                $joins[$prefix] = $join;
            }
            $fields = array_merge($fields, $column->get_required_fields());
        }
        $fields = array_unique($fields);

        // Build the order by clause.
        $sorts = array();
        foreach ($this->sort as $sort => $order) {
            list($colname, $subsort) = $this->parse_subsort($sort);
            $sorts[] = $this->requiredcolumns[$colname]->sort_expression($order < 0, $subsort);
        }

        // Build the where clause.
        $tests = array('q.parent = 0');
        $this->sqlparams = array();
        foreach ($this->searchconditions as $searchcondition) {
            if ($searchcondition->where()) {
                $tests[] = '((' . $searchcondition->where() .'))';
            }
            if ($searchcondition->params()) {
                $this->sqlparams = array_merge($this->sqlparams, $searchcondition->params());
            }
        }
        // Build the SQL.
        $sql = ' FROM {question} q ' . implode(' ', $joins);
        $sql .= ' WHERE ' . implode(' AND ', $tests);
        $this->countsql = 'SELECT count(1)' . $sql;
        $this->loadsql = 'SELECT ' . implode(', ', $fields) . $sql . ' ORDER BY ' . implode(', ', $sorts);
    }

    protected function get_question_count() {
        global $DB;
        return $DB->count_records_sql($this->countsql, $this->sqlparams);
    }

    protected function load_page_questions($page, $perpage) {
        global $DB;
        $questions = $DB->get_recordset_sql($this->loadsql, $this->sqlparams, $page * $perpage, $perpage);
        if (!$questions->valid()) {
            // No questions on this page. Reset to page 0.
            $questions = $DB->get_recordset_sql($this->loadsql, $this->sqlparams, 0, $perpage);
        }
        return $questions;
    }

    public function base_url() {
        return $this->baseurl;
    }

    public function edit_question_url($questionid) {
        return $this->editquestionurl->out(true, array('id' => $questionid));
    }

    /**
     * Get the URL for duplicating a given question.
     * @param int $questionid the question id.
     * @return moodle_url the URL.
     */
    public function copy_question_url($questionid) {
        return $this->editquestionurl->out(true, array('id' => $questionid, 'makecopy' => 1));
    }

    /**
     * Get the context we are displaying the question bank for.
     * @return context context object.
     */
    public function get_most_specific_context() {
        return $this->contexts->lowest();
    }

    /**
     * Get the URL to preview a question.
     * @param stdClass $questiondata the data defining the question.
     * @return moodle_url the URL.
     */
    public function preview_question_url($questiondata) {
        return question_preview_url($questiondata->id, null, null, null, null,
                $this->get_most_specific_context());
    }

    /**
     * Shows the question bank editing interface.
     *
     * The function also processes a number of actions:
     *
     * Actions affecting the question pool:
     * move           Moves a question to a different category
     * deleteselected Deletes the selected questions from the category
     * Other actions:
     * category      Chooses the category
     * displayoptions Sets display options
     */
    public function display($tabname, $page, $perpage, $cat,
            $recurse, $showhidden, $showquestiontext) {
        global $PAGE, $OUTPUT;

        if ($this->process_actions_needing_ui()) {
            return;
        }
        $editcontexts = $this->contexts->having_one_edit_tab_cap($tabname);
        // Category selection form.
        echo $OUTPUT->heading(get_string('questionbank', 'question'), 2);
        array_unshift($this->searchconditions, new \core_question\bank\search\hidden_condition(!$showhidden));
        array_unshift($this->searchconditions, new \core_question\bank\search\category_condition(
                $cat, $recurse, $editcontexts, $this->baseurl, $this->course));
        $this->display_options_form($showquestiontext);

        // Continues with list of questions.
        $this->display_question_list($this->contexts->having_one_edit_tab_cap($tabname),
                $this->baseurl, $cat, $this->cm,
                null, $page, $perpage, $showhidden, $showquestiontext,
                $this->contexts->having_cap('moodle/question:add'));
    }

    protected function print_choose_category_message($categoryandcontext) {
        echo "<p style=\"text-align:center;\"><b>";
        print_string('selectcategoryabove', 'question');
        echo "</b></p>";
    }

    protected function get_current_category($categoryandcontext) {
        global $DB, $OUTPUT;
        list($categoryid, $contextid) = explode(',', $categoryandcontext);
        if (!$categoryid) {
            $this->print_choose_category_message($categoryandcontext);
            return false;
        }

        if (!$category = $DB->get_record('question_categories',
                array('id' => $categoryid, 'contextid' => $contextid))) {
            echo $OUTPUT->box_start('generalbox questionbank');
            echo $OUTPUT->notification('Category not found!');
            echo $OUTPUT->box_end();
            return false;
        }

        return $category;
    }

    /**
     * prints category information
     * @param stdClass $category the category row from the database.
     * @deprecated since Moodle 2.7 MDL-40313.
     * @see \core_question\bank\search\condition
     * @todo MDL-41978 This will be deleted in Moodle 2.8
     */
    protected function print_category_info($category) {
        $formatoptions = new \stdClass();
        $formatoptions->noclean = true;
        $formatoptions->overflowdiv = true;
        echo '<div class="boxaligncenter">';
        echo format_text($category->info, $category->infoformat, $formatoptions, $this->course->id);
        echo "</div>\n";
    }

    /**
     * Prints a form to choose categories
     * @deprecated since Moodle 2.7 MDL-40313.
     * @see \core_question\bank\search\condition
     * @todo MDL-41978 This will be deleted in Moodle 2.8
     */
    protected function display_category_form($contexts, $pageurl, $current) {
        global $OUTPUT;

        debugging('display_category_form() is deprecated, please use ' .
                '\core_question\bank\search\condition instead.', DEBUG_DEVELOPER);
        // Get all the existing categories now.
        echo '<div class="choosecategory">';
        $catmenu = question_category_options($contexts, false, 0, true);

        $select = new \single_select($this->baseurl, 'category', $catmenu, $current, null, 'catmenu');
        $select->set_label(get_string('selectacategory', 'question'));
        echo $OUTPUT->render($select);
        echo "</div>\n";
    }

    /**
     * Display the options form.
     * @param bool $recurse no longer used.
     * @param bool $showhidden no longer used.
     * @param bool $showquestiontext whether to show the question text.
     * @deprecated since Moodle 2.7 MDL-40313.
     * @see display_options_form
     * @todo MDL-41978 This will be deleted in Moodle 2.8
     * @see \core_question\bank\search\condition
     */
    protected function display_options($recurse, $showhidden, $showquestiontext) {
        debugging('display_options() is deprecated, please use display_options_form instead.', DEBUG_DEVELOPER);
        return $this->display_options_form($showquestiontext);
    }

    /**
     * Print a single option checkbox.
     * @deprecated since Moodle 2.7 MDL-40313.
     * @see \core_question\bank\search\condition
     * @see html_writer::checkbox
     * @todo MDL-41978 This will be deleted in Moodle 2.8
     */
    protected function display_category_form_checkbox($name, $value, $label) {
        debugging('display_category_form_checkbox() is deprecated, ' .
                'please use \core_question\bank\search\condition instead.', DEBUG_DEVELOPER);
        echo '<div><input type="hidden" id="' . $name . '_off" name="' . $name . '" value="0" />';
        echo '<input type="checkbox" id="' . $name . '_on" name="' . $name . '" value="1"';
        if ($value) {
            echo ' checked="checked"';
        }
        echo ' onchange="getElementById(\'displayoptions\').submit(); return true;" />';
        echo '<label for="' . $name . '_on">' . $label . '</label>';
        echo "</div>\n";
    }

    /**
     * Display the form with options for which questions are displayed and how they are displayed.
     * @param bool $showquestiontext Display the text of the question within the list.
     * @param string $path path to the script displaying this page.
     * @param bool $showtextoption whether to include the 'Show question text' checkbox.
     */
    protected function display_options_form($showquestiontext, $scriptpath = '/question/edit.php',
            $showtextoption = true) {
        global $PAGE;

        echo \html_writer::start_tag('form', array('method' => 'get',
                'action' => new \moodle_url($scriptpath), 'id' => 'displayoptions'));
        echo \html_writer::start_div();
        echo \html_writer::input_hidden_params($this->baseurl, array('recurse', 'showhidden', 'qbshowtext'));

        foreach ($this->searchconditions as $searchcondition) {
            echo $searchcondition->display_options($this);
        }
        if ($showtextoption) {
            $this->display_showtext_checkbox($showquestiontext);
        }
        $this->display_advanced_search_form();
        $go = \html_writer::empty_tag('input', array('type' => 'submit', 'value' => get_string('go')));
        echo \html_writer::tag('noscript', \html_writer::div($go), array('class' => 'inline'));
        echo \html_writer::end_div();
        echo \html_writer::end_tag('form');
        $PAGE->requires->yui_module('moodle-question-searchform', 'M.question.searchform.init');
    }

    /**
     * Print the "advanced" UI elements for the form to select which questions. Hidden by default.
     */
    protected function display_advanced_search_form() {
        print_collapsible_region_start('', 'advancedsearch', get_string('advancedsearchoptions', 'question'),
                                               'question_bank_advanced_search');
        foreach ($this->searchconditions as $searchcondition) {
            echo $searchcondition->display_options_adv($this);
        }
        print_collapsible_region_end();
    }

    /**
     * Display the checkbox UI for toggling the display of the question text in the list.
     * @param bool $showquestiontext the current or default value for whether to display the text.
     */
    protected function display_showtext_checkbox($showquestiontext) {
        echo '<div>';
        echo \html_writer::empty_tag('input', array('type' => 'hidden', 'name' => 'qbshowtext',
                                               'value' => 0, 'id' => 'qbshowtext_off'));
        echo \html_writer::checkbox('qbshowtext', '1', $showquestiontext, get_string('showquestiontext', 'question'),
                                       array('id' => 'qbshowtext_on', 'class' => 'searchoptions'));
        echo "</div>\n";
    }

    protected function create_new_question_form($category, $canadd) {
        global $CFG;
        echo '<div class="createnewquestion">';
        if ($canadd) {
            create_new_question_button($category->id, $this->editquestionurl->params(),
                    get_string('createnewquestion', 'question'));
        } else {
            print_string('nopermissionadd', 'question');
        }
        echo '</div>';
    }

    /**
     * Prints the table of questions in a category with interactions
     *
     * @param array      $contexts    Not used!
     * @param moodle_url $pageurl     The URL to reload this page.
     * @param string     $categoryandcontext 'categoryID,contextID'.
     * @param stdClass   $cm          Not used!
     * @param bool       $recurse     Whether to include subcategories.
     * @param int        $page        The number of the page to be displayed
     * @param int        $perpage     Number of questions to show per page
     * @param bool       $showhidden  whether deleted questions should be displayed.
     * @param bool       $showquestiontext whether the text of each question should be shown in the list. Deprecated.
     * @param array      $addcontexts contexts where the user is allowed to add new questions.
     */
    protected function display_question_list($contexts, $pageurl, $categoryandcontext,
            $cm = null, $recurse=1, $page=0, $perpage=100, $showhidden=false,
            $showquestiontext = false, $addcontexts = array()) {
        global $CFG, $DB, $OUTPUT;

        $category = $this->get_current_category($categoryandcontext);

        $strselectall = get_string('selectall');
        $strselectnone = get_string('deselectall');

        list($categoryid, $contextid) = explode(',', $categoryandcontext);
        $catcontext = \context::instance_by_id($contextid);

        $canadd = has_capability('moodle/question:add', $catcontext);

        $this->create_new_question_form($category, $canadd);

        $this->build_query();
        $totalnumber = $this->get_question_count();
        if ($totalnumber == 0) {
            return;
        }
        $questions = $this->load_page_questions($page, $perpage);

        echo '<div class="categorypagingbarcontainer">';
        $pageingurl = new \moodle_url('edit.php');
        $r = $pageingurl->params($pageurl->params());
        $pagingbar = new \paging_bar($totalnumber, $page, $perpage, $pageingurl);
        $pagingbar->pagevar = 'qpage';
        echo $OUTPUT->render($pagingbar);
        echo '</div>';

        echo '<form method="post" action="edit.php">';
        echo '<fieldset class="invisiblefieldset" style="display: block;">';
        echo '<input type="hidden" name="sesskey" value="'.sesskey().'" />';
        echo \html_writer::input_hidden_params($this->baseurl);

        echo '<div class="categoryquestionscontainer">';
        $this->start_table();
        $rowcount = 0;
        foreach ($questions as $question) {
            $this->print_table_row($question, $rowcount);
            $rowcount += 1;
        }
        $this->end_table();
        echo "</div>\n";

        echo '<div class="categorypagingbarcontainer pagingbottom">';
        echo $OUTPUT->render($pagingbar);
        if ($totalnumber > DEFAULT_QUESTIONS_PER_PAGE) {
            if ($perpage == DEFAULT_QUESTIONS_PER_PAGE) {
                $url = new \moodle_url('edit.php', array_merge($pageurl->params(), array('qperpage' => 1000)));
                $showall = '<a href="'.$url.'">'.get_string('showall', 'moodle', $totalnumber).'</a>';
            } else {
                $url = new \moodle_url('edit.php', array_merge($pageurl->params(),
                                              array('qperpage' => DEFAULT_QUESTIONS_PER_PAGE)));
                $showall = '<a href="'.$url.'">'.get_string('showperpage', 'moodle', DEFAULT_QUESTIONS_PER_PAGE).'</a>';
            }
            echo "<div class='paging'>{$showall}</div>";
        }
        echo '</div>';

        $this->display_bottom_controls($totalnumber, $recurse, $category, $catcontext, $addcontexts);

        echo '</fieldset>';
        echo "</form>\n";
    }

    /**
     * Display the controls at the bottom of the list of questions.
     * @param int      $totalnumber Total number of questions that might be shown (if it was not for paging).
     * @param bool     $recurse     Whether to include subcategories.
     * @param stdClass $category    The question_category row from the database.
     * @param context  $catcontext  The context of the category being displayed.
     * @param array    $addcontexts contexts where the user is allowed to add new questions.
     */
    protected function display_bottom_controls($totalnumber, $recurse, $category, \context $catcontext, array $addcontexts) {
        $caneditall = has_capability('moodle/question:editall', $catcontext);
        $canuseall = has_capability('moodle/question:useall', $catcontext);
        $canmoveall = has_capability('moodle/question:moveall', $catcontext);

        echo '<div class="modulespecificbuttonscontainer">';
        if ($caneditall || $canmoveall || $canuseall) {
            echo '<strong>&nbsp;'.get_string('withselected', 'question').':</strong><br />';

            // Print delete and move selected question.
            if ($caneditall) {
                echo '<input type="submit" name="deleteselected" value="' . get_string('delete') . "\" />\n";
            }

            if ($canmoveall && count($addcontexts)) {
                echo '<input type="submit" name="move" value="' . get_string('moveto', 'question') . "\" />\n";
                question_category_select_menu($addcontexts, false, 0, "{$category->id},{$category->contextid}");
            }
        }
        echo "</div>\n";
    }

    protected function start_table() {
        echo '<table id="categoryquestions">' . "\n";
        echo "<thead>\n";
        $this->print_table_headers();
        echo "</thead>\n";
        echo "<tbody>\n";
    }

    protected function end_table() {
        echo "</tbody>\n";
        echo "</table>\n";
    }

    protected function print_table_headers() {
        echo "<tr>\n";
        foreach ($this->visiblecolumns as $column) {
            $column->display_header();
        }
        echo "</tr>\n";
    }

    protected function get_row_classes($question, $rowcount) {
        $classes = array();
        if ($question->hidden) {
            $classes[] = 'dimmed_text';
        }
        if ($question->id == $this->lastchangedid) {
            $classes[] = 'highlight';
        }
        $classes[] = 'r' . ($rowcount % 2);
        return $classes;
    }

    protected function print_table_row($question, $rowcount) {
        $rowclasses = implode(' ', $this->get_row_classes($question, $rowcount));
        if ($rowclasses) {
            echo '<tr class="' . $rowclasses . '">' . "\n";
        } else {
            echo "<tr>\n";
        }
        foreach ($this->visiblecolumns as $column) {
            $column->display($question, $rowclasses);
        }
        echo "</tr>\n";
        foreach ($this->extrarows as $row) {
            $row->display($question, $rowclasses);
        }
    }

    public function process_actions() {
        global $CFG, $DB;
        // Now, check for commands on this page and modify variables as necessary.
        if (optional_param('move', false, PARAM_BOOL) and confirm_sesskey()) {
            // Move selected questions to new category.
            $category = required_param('category', PARAM_SEQUENCE);
            list($tocategoryid, $contextid) = explode(',', $category);
            if (! $tocategory = $DB->get_record('question_categories', array('id' => $tocategoryid, 'contextid' => $contextid))) {
                print_error('cannotfindcate', 'question');
            }
            $tocontext = \context::instance_by_id($contextid);
            require_capability('moodle/question:add', $tocontext);
            $rawdata = (array) data_submitted();
            $questionids = array();
            foreach ($rawdata as $key => $value) {  // Parse input for question ids.
                if (preg_match('!^q([0-9]+)$!', $key, $matches)) {
                    $key = $matches[1];
                    $questionids[] = $key;
                }
            }
            if ($questionids) {
                list($usql, $params) = $DB->get_in_or_equal($questionids);
                $sql = "";
                $questions = $DB->get_records_sql("
                        SELECT q.*, c.contextid
                        FROM {question} q
                        JOIN {question_categories} c ON c.id = q.category
                        WHERE q.id {$usql}", $params);
                foreach ($questions as $question) {
                    question_require_capability_on($question, 'move');
                }
                question_move_questions_to_category($questionids, $tocategory->id);
                redirect($this->baseurl->out(false,
                        array('category' => "{$tocategoryid},{$contextid}")));
            }
        }

        if (optional_param('deleteselected', false, PARAM_BOOL)) { // Delete selected questions from the category.
            // If teacher has already confirmed the action.
            if (($confirm = optional_param('confirm', '', PARAM_ALPHANUM)) and confirm_sesskey()) {
                $deleteselected = required_param('deleteselected', PARAM_RAW);
                if ($confirm == md5($deleteselected)) {
                    if ($questionlist = explode(',', $deleteselected)) {
                        // For each question either hide it if it is in use or delete it.
                        foreach ($questionlist as $questionid) {
                            $questionid = (int)$questionid;
                            question_require_capability_on($questionid, 'edit');
                            if (questions_in_use(array($questionid))) {
                                $DB->set_field('question', 'hidden', 1, array('id' => $questionid));
                            } else {
                                question_delete_question($questionid);
                            }
                        }
                    }
                    redirect($this->baseurl);
                } else {
                    print_error('invalidconfirm', 'question');
                }
            }
        }

        // Unhide a question.
        if (($unhide = optional_param('unhide', '', PARAM_INT)) and confirm_sesskey()) {
            question_require_capability_on($unhide, 'edit');
            $DB->set_field('question', 'hidden', 0, array('id' => $unhide));

            // Purge these questions from the cache.
            \question_bank::notify_question_edited($unhide);

            redirect($this->baseurl);
        }
    }

    public function process_actions_needing_ui() {
        global $DB, $OUTPUT;
        if (optional_param('deleteselected', false, PARAM_BOOL)) {
            // Make a list of all the questions that are selected.
            $rawquestions = $_REQUEST; // This code is called by both POST forms and GET links, so cannot use data_submitted.
            $questionlist = '';  // comma separated list of ids of questions to be deleted
            $questionnames = ''; // string with names of questions separated by <br /> with
                                 // an asterix in front of those that are in use
            $inuse = false;      // set to true if at least one of the questions is in use
            foreach ($rawquestions as $key => $value) {    // Parse input for question ids.
                if (preg_match('!^q([0-9]+)$!', $key, $matches)) {
                    $key = $matches[1];
                    $questionlist .= $key.',';
                    question_require_capability_on($key, 'edit');
                    if (questions_in_use(array($key))) {
                        $questionnames .= '* ';
                        $inuse = true;
                    }
                    $questionnames .= $DB->get_field('question', 'name', array('id' => $key)) . '<br />';
                }
            }
            if (!$questionlist) { // No questions were selected.
                redirect($this->baseurl);
            }
            $questionlist = rtrim($questionlist, ',');

            // Add an explanation about questions in use.
            if ($inuse) {
                $questionnames .= '<br />'.get_string('questionsinuse', 'question');
            }
            $baseurl = new \moodle_url('edit.php', $this->baseurl->params());
            $deleteurl = new \moodle_url($baseurl, array('deleteselected' => $questionlist, 'confirm' => md5($questionlist),
                                                 'sesskey' => sesskey()));

            echo $OUTPUT->confirm(get_string('deletequestionscheck', 'question', $questionnames), $deleteurl, $baseurl);

            return true;
        }
    }

    /**
     * Add another search control to this view.
     * @param \core_question\bank\search\condition $searchcondition the condition to add.
     */
    public function add_searchcondition($searchcondition) {
        $this->searchconditions[] = $searchcondition;
    }
}
