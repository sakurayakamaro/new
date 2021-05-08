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
 * Strings for component 'tool_usersuspension', language 'ar', version '2.9'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = 'عودة إلى المقرر الدراسي';
$string['button:backtoexclusions'] = 'عودة إلى استعراض الاستثناءات';
$string['button:backtouploadform'] = 'عودة إلى نموذج الرفع';
$string['email:user:suspend:auto:body'] = '<p>عزيزي {$a->name}</p>
<p>لقد تم تعليق حسابك نظراً لتوقف نشاطك لمدة {$a->timeinactive}</p>
<p>إذا كنت تشعر بأن هذا الأمر ليس مقصوداً منك وترغب بإعادة تنشيط حسابك مجدداً، يرجى مراسلة {$a->contact}</p>
<p>مع التحية<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>عزيزي {$a->name}</p>
<p>لقد تم تعليق حسابك</p>
<p>إذا كنت تشعر بأن هذا الأمر ليس مقصوداً منك وترغب بإعادة تنشيط حسابك مجدداً، يرجى مراسلة {$a->contact}</p>
<p>مع التحية<br/>{$a->signature}</p>';
$string['email:user:unsuspend:body'] = '<p>عزيزي {$a->name}</p>
<p>لقد تمت إعادة تنشيط حسابك</p>
<p>إذا كنت تشعر بأن هذا الأمر ليس مقصوداً منك وترغب بإعادة تعليق حسابك مجدداً، يرجى مراسلة {$a->contact}</p>
<p>مع التحية<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'لقد تمت إعادة تنشيط حسابك';
$string['link:log:overview'] = 'معاينة سجلات وقوعات تغيير الحالة';
$string['msg:file-not-readable'] = 'الملف المرفوع \'{$a}\' غير قابل للقراءة';
$string['msg:file-not-writeable'] = 'الملف المرفوع \'{$a}\' غير قابل للكتابة أو تتعذر إزالته';
$string['msg:file:upload:fail'] = 'تعذر حفظ الملف المرفوع بنجاح. تم إلغاء المعالجة.';
$string['setting:smartdetect_suspendafter'] = 'فترة التعليق بسبب الخمول';
$string['suspensionsettingssmartdetectdesc'] = 'قم بتهيئة إعدادات الكشف الذكي أدناه.<br/>
الكشف الذكي معناه بشكل فعلي بأن حسابات المستخدمين التي يبدو عليها \'غياب النشاط\' وفقًا للإعدادات أدناه سيتم تعليقها تلقائيًا. سيقرر \'المكتشف الذكي\' ما إذا كان حساب المستخدم خاملاً أم لا عبر تشغيله في فترات متواترة وبناءً على الإعداد \'فترة التعليق بسبب الخمول\' ليقوم بتعليق كل الحسابات التي يثبت غياب النشاط فيها.';
$string['table:logs'] = 'سجلات الوقوعات';
$string['task:fromfolder'] = 'مهمة تعليق حساب المستخدم: التعليق التلقائي للمستخدم من الملف المرفوع';
