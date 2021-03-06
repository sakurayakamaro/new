<?php
// This file is part of the customcert module for Moodle - http://moodle.org/
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

namespace mod_customcert;

defined('MOODLE_INTERNAL') || die('Direct access to this script is forbidden.');

require_once($CFG->dirroot . '/course/moodleform_mod.php');
require_once($CFG->dirroot . '/mod/customcert/includes/colourpicker.php');

\MoodleQuickForm::registerElementType('customcert_colourpicker',
    $CFG->dirroot . '/mod/customcert/includes/colourpicker.php', 'MoodleQuickForm_customcert_colourpicker');

/**
 * The form for handling the layout of the customcert instance.
 *
 * @package    mod_customcert
 * @copyright  2013 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class edit_form extends \moodleform {

    /**
     * The id of the template being used.
     */
    protected $tid = null;

    /**
     * The total number of pages for this cert.
     */
    protected $numpages = 1;

    /**
     * Form definition.
     */
    public function definition() {
        global $DB;

        $mform =& $this->_form;

        $mform->addElement('text', 'name', get_string('name', 'customcert'));
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required');

        // Get the number of pages for this module.
        if (isset($this->_customdata['tid'])) {
            $this->tid = $this->_customdata['tid'];
            if ($pages = $DB->get_records('customcert_pages', array('templateid' => $this->tid), 'sequence')) {
                $this->numpages = count($pages);
                foreach ($pages as $p) {
                    $this->add_customcert_page_elements($p);
                }
            }
        } else { // Add a new template.
            // Create a 'fake' page to display the elements on - not yet saved in the DB.
            $page = new \stdClass();
            $page->id = 0;
            $page->sequence = 1;
            $this->add_customcert_page_elements($page);
        }

        $mform->closeHeaderBefore('addcertpage');

        $mform->addElement('submit', 'addcertpage', get_string('addcertpage', 'customcert'));

        $mform->closeHeaderBefore('submitbtn');

        // Add the submit buttons.
        $group = array();
        $group[] = $mform->createElement('submit', 'submitbtn', get_string('savechanges'));
        $group[] = $mform->createElement('submit', 'previewbtn', get_string('savechangespreview', 'customcert'));
        $mform->addElement('group', 'submitbtngroup', '', $group, '', false);

        $mform->addElement('hidden', 'tid');
        $mform->setType('tid', PARAM_INT);
        $mform->setDefault('tid', $this->tid);
    }

    /**
     * Fill in the current page data for this customcert.
     */
    public function definition_after_data() {
        global $DB;

        $mform = $this->_form;

        // Check that we are updating a current customcert.
        if ($this->tid) {
            // Get the pages for this customcert.
            if ($pages = $DB->get_records('customcert_pages', array('templateid' => $this->tid))) {
                // Loop through the pages.
                foreach ($pages as $p) {
                    // Set the width.
                    $element = $mform->getElement('pagewidth_' . $p->id);
                    $element->setValue($p->width);
                    // Set the height.
                    $element = $mform->getElement('pageheight_' . $p->id);
                    $element->setValue($p->height);
                    // Set the left margin.
                    $element = $mform->getElement('pageleftmargin_' . $p->id);
                    $element->setValue($p->leftmargin);
                    // Set the right margin.
                    $element = $mform->getElement('pagerightmargin_' . $p->id);
                    $element->setValue($p->rightmargin);
                }
            }
        }
    }

    /**
     * Some basic validation.
     *
     * @param $data
     * @param $files
     * @return array the errors that were found
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        // Go through the data and check any width, height or margin  values.
        foreach ($data as $key => $value) {
            if (strpos($key, 'pagewidth_') !== false) {
                $page = str_replace('pagewidth_', '', $key);
                $widthid = 'pagewidth_' . $page;
                // Validate that the width is a valid value.
                if ((!isset($data[$widthid])) || (!is_numeric($data[$widthid])) || ($data[$widthid] <= 0)) {
                    $errors[$widthid] = get_string('invalidwidth', 'customcert');
                }
            }
            if (strpos($key, 'pageheight_') !== false) {
                $page = str_replace('pageheight_', '', $key);
                $heightid = 'pageheight_' . $page;
                // Validate that the height is a valid value.
                if ((!isset($data[$heightid])) || (!is_numeric($data[$heightid])) || ($data[$heightid] <= 0)) {
                    $errors[$heightid] = get_string('invalidheight', 'customcert');
                }
            }
            if (strpos($key, 'pageleftmargin_') !== false) {
                // Validate that the left margin is a valid value.
                if (isset($data[$key]) && ($data[$key] < 0)) {
                    $errors[$key] = get_string('invalidmargin', 'customcert');
                }
            }
            if (strpos($key, 'pagerightmargin_') !== false) {
                // Validate that the right margin is a valid value.
                if (isset($data[$key]) && ($data[$key] < 0)) {
                    $errors[$key] = get_string('invalidmargin', 'customcert');
                }
            }
        }

        return $errors;
    }

    /**
     * Adds the page elements to the form.
     *
     * @param \stdClass $page the customcert page
     */
    protected function add_customcert_page_elements($page) {
        global $DB, $OUTPUT;

        // Create the form object.
        $mform =& $this->_form;

        if ($this->numpages > 1) {
            $mform->addElement('header', 'page_' . $page->id, get_string('page', 'customcert', $page->sequence));
        }

        $editlink = '/mod/customcert/edit.php';
        $editlinkparams = array('tid' => $this->tid);
        $editelementlink = '/mod/customcert/edit_element.php';
        $editelementlinkparams = array('tid' => $this->tid);

        // Place the ordering arrows.
        // Only display the move up arrow if it is not the first.
        if ($page->sequence > 1) {
            $url = new \moodle_url($editlink, $editlinkparams + array('action' => 'pmoveup', 'aid' => $page->id));
            $mform->addElement('html', $OUTPUT->action_icon($url, new \pix_icon('t/up', get_string('moveup'))));
        }
        // Only display the move down arrow if it is not the last.
        if ($page->sequence < $this->numpages) {
            $url = new \moodle_url($editlink, $editlinkparams + array('action' => 'pmovedown', 'aid' => $page->id));
            $mform->addElement('html', $OUTPUT->action_icon($url, new \pix_icon('t/down', get_string('movedown'))));
        }

        $mform->addElement('text', 'pagewidth_' . $page->id, get_string('width', 'customcert'));
        $mform->setType('pagewidth_' . $page->id, PARAM_INT);
        $mform->setDefault('pagewidth_' . $page->id, '210');
        $mform->addRule('pagewidth_' . $page->id, null, 'required', null, 'client');
        $mform->addHelpButton('pagewidth_' . $page->id, 'width', 'customcert');

        $mform->addElement('text', 'pageheight_' . $page->id, get_string('height', 'customcert'));
        $mform->setType('pageheight_' . $page->id, PARAM_INT);
        $mform->setDefault('pageheight_' . $page->id, '297');
        $mform->addRule('pageheight_' . $page->id, null, 'required', null, 'client');
        $mform->addHelpButton('pageheight_' . $page->id, 'height', 'customcert');

        $mform->addElement('text', 'pageleftmargin_' . $page->id, get_string('leftmargin', 'customcert'));
        $mform->setType('pageleftmargin_' . $page->id, PARAM_INT);
        $mform->setDefault('pageleftmargin_' . $page->id, 0);
        $mform->addHelpButton('pageleftmargin_' . $page->id, 'leftmargin', 'customcert');

        $mform->addElement('text', 'pagerightmargin_' . $page->id, get_string('rightmargin', 'customcert'));
        $mform->setType('pagerightmargin_' . $page->id, PARAM_INT);
        $mform->setDefault('pagerightmargin_' . $page->id, 0);
        $mform->addHelpButton('pagerightmargin_' . $page->id, 'rightmargin', 'customcert');

        $group = array();
        $group[] = $mform->createElement('select', 'element_' . $page->id, '', element::get_available_types());
        $group[] = $mform->createElement('submit', 'addelement_' . $page->id, get_string('addelement', 'customcert'));
        $mform->addElement('group', 'elementgroup', '', $group, '', false);

        // Check if there are elements to add.
        if ($elements = $DB->get_records('customcert_elements', array('pageid' => $page->id), 'sequence ASC')) {
            // Get the total number of elements.
            $numelements = count($elements);
            // Create a table to display these elements.
            $table = new \html_table();
            $table->head  = array(get_string('name', 'customcert'), get_string('type', 'customcert'), '');
            $table->align = array('left', 'left', 'left');
            // Loop through and add the elements to the table.
            foreach ($elements as $element) {
                $row = new \html_table_row();
                $row->cells[] = $element->name;
                $row->cells[] = $element->element;
                // Link to edit this element.
                $link = new \moodle_url($editelementlink, $editelementlinkparams + array('id' => $element->id,
                    'action' => 'edit'));
                $icons = $OUTPUT->action_icon($link, new \pix_icon('t/edit', get_string('edit')));
                // Link to delete the element.
                $link = new \moodle_url($editlink, $editlinkparams + array('action' => 'deleteelement',
                    'aid' => $element->id));
                $icons .= $OUTPUT->action_icon($link, new \pix_icon('t/delete', get_string('delete')));
                // Now display any moving arrows if they are needed.
                if ($numelements > 1) {
                    // Only display the move up arrow if it is not the first.
                    $moveicons = '';
                    if ($element->sequence > 1) {
                        $url = new \moodle_url($editlink, $editlinkparams + array('action' => 'emoveup',
                            'aid' => $element->id));
                        $moveicons .= $OUTPUT->action_icon($url, new \pix_icon('t/up', get_string('moveup')));
                    }
                    // Only display the move down arrow if it is not the last.
                    if ($element->sequence < $numelements) {
                        $url = new \moodle_url($editlink, $editlinkparams + array('action' => 'emovedown',
                            'aid' => $element->id));
                        $moveicons .= $OUTPUT->action_icon($url, new \pix_icon('t/down', get_string('movedown')));
                    }
                    $icons .= $moveicons;
                }
                $row->cells[] = $icons;
                $table->data[] = $row;
            }
            // Create link to order the elements.
            $link = \html_writer::link(new \moodle_url('/mod/customcert/rearrange.php', array('pid' => $page->id)),
                get_string('rearrangeelements', 'customcert'));
            // Add the table to the form.
            $mform->addElement('static', 'elements_' . $page->id, get_string('elements', 'customcert'), \html_writer::table($table)
                . \html_writer::tag( 'div', $link, array('style' => 'text-align:right')));
            $mform->addHelpButton('elements_' . $page->id, 'elements', 'customcert');
        }

        // Add option to delete this page if there is more than one page.
        if ($this->numpages > 1) {
            // Link to delete the element.
            $deletelink = new \moodle_url($editlink, $editlinkparams + array('action' => 'deletepage', 'aid' => $page->id));
            $deletelink = \html_writer::tag('a', get_string('deletecertpage', 'customcert'), array('href' => $deletelink->out(false), 'class' => 'deletebutton'));
            $mform->addElement('html', \html_writer::tag('div', $deletelink, array('class' => 'deletebutton')));
        }
    }
}
