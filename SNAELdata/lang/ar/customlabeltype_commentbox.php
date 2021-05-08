<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'customlabeltype_commentbox', language 'ar', version '2.9'.
 *
 * @package     customlabeltype_commentbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commentbox:view'] = 'يمكنه معاينة المحتوى';
$string['readmorecontent'] = 'قراءة المزيد من المحتوى';
$string['template'] = '<div class="custombox-commentbox">
<%%comment%%>
</div>
<%if %%readmorecontent%% %>
<div class="custombox-commentbox readmorelink">
    <a href="javascript:togglecustomstring(\'<%%customid%%>\', \'إقرأ المزيد...\', \'إقرأ أقل...\')"><span id="customctl<%%customid%%>"><%%initialstring%%></span></a>
</div>
<div class="custombox-commentbox readmore" id="custom<%%customid%%>">
<%%readmorecontent%%>
</div>
<%endif %>
<script type="text/javascript">
setupcustomstring(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'إقرأ المزيد...\', \'إقرأ أقل...\');
</script>';
