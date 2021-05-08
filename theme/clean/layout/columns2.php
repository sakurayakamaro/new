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

/**
 * The two column layout.
 *
 * @package   theme_clean
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_clean_get_html_for_settings($OUTPUT, $PAGE);

// Set default (LTR) layout mark-up for a two column page (side-pre-only).
$regionmain = 'span9 pull-right';
$sidepre = 'span3 desktop-first-column';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9';
    $sidepre = 'span3 pull-right';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	 <link rel="stylesheet" href="<?php echo $CFG->wwwroot;?>/css/style.min.css">
  <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="application/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="application/javascript" src="<?php echo $CFG->wwwroot;?>/js/magnific.popup.js"></script>
  <script type="application/javascript" src="<?php echo $CFG->wwwroot;?>/js/jquery.magnific.popup.js"></script>
  <script type="application/javascript" src="<?php echo $CFG->wwwroot;?>/js/custom.js"></script>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid" id="headerTop">
            
            <a class="brand" href="<?php echo $CFG->wwwroot;?>">
            <div class="brandLogo">
			<?php 
				//echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
				echo get_string('SNAIL');
            ?>
            </div>
            </a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php echo $OUTPUT->user_menu(); ?>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--
- Adaptive Moodle template.
- MKA2015 08082015
- Hide system logo
- full_header() - lib/outputrenders.php (line 4045)
-->
<div style="margin-top:-20px; margin-left:20px;"> <?php echo $OUTPUT->full_header(); ?></div>
    <div style="margin-bottom:5px"></div>
<div id="page" class="container-fluid">
    <div id="page-content" class="row-fluid">
        <section id="region-main" class="<?php echo $regionmain; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
    </div>

    <footer id="page-footer">
        <div id="course-footer"><?php //echo $OUTPUT->course_footer(); ?></div>
        <!--
        - Adaptive Moodle template.
        - MKA2015 08082015
        - Hide moodle page help
        -->
        <!--<p class="helplink"><?php //echo $OUTPUT->page_doc_link(); ?></p>-->
        <?php
        //echo $html->footnote;
        //echo $OUTPUT->login_info();
        //echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
