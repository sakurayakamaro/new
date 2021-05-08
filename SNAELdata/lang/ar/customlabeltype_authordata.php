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
 * Strings for component 'customlabeltype_authordata', language 'ar', version '2.9'.
 *
 * @package     customlabeltype_authordata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authordata:view'] = 'يمكنه معاينة المحتوى';
$string['template'] = '<table class="custombox-authordata">
    <%if %%tablecaption%% %>
    <tr valign="top">
        <th class="custombox-title authordata" colspan="2">
            <%%tablecaption%%>
        </th>
    </tr>
    <%endif %>
    <tr valign="top">
        <td class="custombox-param authordata">
            الكاتب<%if %%author2%% %>s<%endif %> :
        </td>
        <td class="custombox-value authordata">
            <%if %%thumb3%% %>
            <img src="<%%thumb3%%>" title="<%%author3%%>" style="float:right" width="80"  height="120"/>
            <%endif %>
            <%if %%thumb2%% %>
            <img src="<%%thumb2%%>" title="<%%author2%%>" style="float:right;margin-right:10px"  width="80"  height="120" />
            <%endif %>
            <%if %%thumb1%% %>
            <img src="<%%thumb1%%>" title="<%%author1%%>" style="float:right;margin-right:10px"  width="80"  height="120" />
            <%endif %>
            <%%author1%%>
            <%%author2%%>
            <%%author3%%>
        </td>
    </tr>
    <%if %%showinstitution%% %>
    <tr valign="top">
        <td class="custombox-param authordata">
            المؤسسة:
        </td>
        <td class="custombox-value authordata">
            <%%institution%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showdepartment%% %>
    <tr valign="top">
        <td class="custombox-param authordata">
            القسم:
        </td>
        <td class="custombox-value authordata">
            <%%department%%>
        </td>
    </tr>
    <%endif %>
    <%if %%showcontributors%% %>
    <tr valign="top">
        <td class="custombox-param authordata">
            المساهمون:
        </td>
        <td class="custombox-value authordata">
            <%%contributors%%>
        </td>
    </tr>
    <%endif %>
</table>';
