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

/**
 * Language strings for the customcert module.
 *
 * @package    mod_customcert
 * @copyright  2013 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addcertpage'] = 'Add another certificate page';
$string['addelement'] = 'Add element';
$string['awardedto'] = 'Awarded to';
$string['code'] = 'Code';
$string['copy'] = 'Copy';
$string['coursetimereq'] = 'Required minutes in course';
$string['coursetimereq_help'] = 'Enter here the minimum amount of time, in minutes, that a student must be logged into the course before they will be able to receive
the certificate.';
$string['createtemplate'] = 'Create template';
$string['customcertreport'] = 'Custom certificate report';
$string['customcert:addinstance'] = 'Add a new custom certificate instance';
$string['customcert:manage'] = 'Manage a custom certificate';
$string['customcert:view'] = 'View a custom certificate';
$string['deletecertpage'] = 'Delete certificate page';
$string['deleteconfirm'] = 'Delete confirmation';
$string['deleteelement'] = 'Delete element';
$string['deleteelementconfirm'] = 'Are you sure you want to delete this element?';
$string['deletepageconfirm'] = 'Are you sure you want to delete this certificate page?';
$string['deletetemplateconfirm'] = 'Are you sure you want to delete this certificate template?';
$string['description'] = 'Description';
$string['editcustomcert'] = 'Edit custom certificate';
$string['editelement'] = 'Edit element';
$string['edittemplate'] = 'Edit template';
$string['elementname'] = 'Element name';
$string['elementname_help'] = 'This will be the name used to identify this element when editing a custom certificate. For example, you may have multiple images on a
page and will want to distinguish between them quickly when editing the certificate. Note: this will not displayed on the PDF.';
$string['elements'] = 'Elements';
$string['elements_help'] = 'This is the list of elements that will be displayed on the certificate.

Please note: The elements are rendered in this order. The order can be changed by using the arrows next to each element.';
$string['elementwidth'] = 'Width';
$string['elementwidth_help'] = 'Specify the width of the element - \'0\' means that there is no width constraint.';
$string['font'] = 'Font';
$string['font_help'] = 'The font used when generating this element.';
$string['fontcolour'] = 'Colour';
$string['fontcolour_help'] = 'The colour of the font.';
$string['fontsize'] = 'Size';
$string['fontsize_help'] = 'The size of the font in points.';
$string['getcustomcert'] = 'Get your custom certificate';
$string['height'] = 'Height';
$string['height_help'] = 'This is the height of the certificate PDF in mm. For reference an A4 piece of paper is 297mm high and a letter is 279mm high.';
$string['invalidcolour'] = 'Invalid colour chosen, please enter a valid HTML colour name, or a six-digit, or three-digit hexadecimal colour.';
$string['invalidelementwidth'] = 'Please enter a positive number.';
$string['invalidposition'] = 'Please select a positive number for position {$a}.';
$string['invalidheight'] = 'The height has to be a valid number greater than 0.';
$string['invalidmargin'] = 'The margin has to be a valid number greater than 0.';
$string['invalidwidth'] = 'The width has to be a valid number greater than 0.';
$string['issued'] = 'Issued';
$string['landscape'] = 'Landscape';
$string['leftmargin'] = 'Left margin';
$string['leftmargin_help'] = 'This is the left margin of the certificate PDF in mm.';
$string['load'] = 'Load';
$string['loadtemplate'] = 'Load template';
$string['loadtemplatemsg'] = 'Are you sure you wish to load this template? This will remove any existing pages and elements for this certificate.';
$string['managetemplates'] = 'Manage templates';
$string['managetemplatesdesc'] = 'This link will take you to a new screen where you will be able to manage templates used by customcert activities in courses.';
$string['modify'] = 'Modify';
$string['modulename'] = 'Custom certificate';
$string['modulenameplural'] = 'Custom certificates';
$string['modulename_help'] = 'This module allows for the dynamic generation of PDF certificates.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['name'] = 'Name';
$string['nocustomcerts'] = 'There are no custom certificates for this course';
$string['noimage'] = 'No image';
$string['notemplates'] = 'No templates';
$string['notissued'] = 'Not issued';
$string['options'] = 'Options';
$string['page'] = 'Page {$a}';
$string['pluginadministration'] = 'Custom certificate administration';
$string['pluginname'] = 'Custom certificate';
$string['print'] = 'Print';
$string['portrait'] = 'Portrait';
$string['rearrangeelements'] = 'Reposition elements';
$string['rearrangeelementsheading'] = 'Drag and drop elements to change where they are positioned on the certificate.';
$string['receiveddate'] = 'Received date';
$string['refpoint'] = 'Reference point location';
$string['refpoint_help'] = 'The reference point is the location of an element from which its x and y coordinates are determined. It is indicated by the \'+\' that appears in the centre or corners of the element.';
$string['replacetemplate'] = 'Replace';
$string['rightmargin'] = 'Right margin';
$string['rightmargin_help'] = 'This is the right margin of the certificate PDF in mm.';
$string['save'] = 'Save';
$string['saveandclose'] = 'Save and close';
$string['saveandcontinue'] = 'Save and continue';
$string['savechangespreview'] = 'Save changes and preview';
$string['savetemplate'] = 'Save template';
$string['setprotection'] = 'Set protection';
$string['setprotection_help'] = 'Choose the actions you wish to prevent users from performing on this certificate.';
$string['summaryofissue'] = 'Summary of issue';
$string['templatename'] = 'Template name';
$string['templatenameexists'] = 'That template name is currently in use, please choose another.';
$string['topcenter'] = 'Center';
$string['topleft'] = 'Top left';
$string['topright'] = 'Top right';
$string['type'] = 'Type';
$string['uploadimage'] = 'Upload image';
$string['uploadimagedesc'] = 'This link will take you to a new screen where you will be able to upload images. Images uploaded using
this method will be available throughout your site to all users who are able to create a custom certificate.';
$string['viewcustomcertissues'] = 'View {$a} issued custom certificates';
$string['width'] = 'Width';
$string['width_help'] = 'This is the width of the certificate PDF in mm. For reference an A4 piece of paper is 210mm wide and a letter is 216mm wide.';
