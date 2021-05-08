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
 * Strings for component 'enrol_auto', language 'ar', version '2.9'.
 *
 * @package     enrol_auto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auto:config'] = 'تهيئة عيِّنات الانضمام التلقائي';
$string['auto:manage'] = 'إدارة المستخدمين المنضمين';
$string['auto:unenrol'] = 'إلغاء انضمام المستخدمين إلى المقرر';
$string['auto:unenrolself'] = 'إلغاء انضمام نفسه إلى المقرر';
$string['courseview'] = 'معاينة المقرر';
$string['customwelcomemessage'] = 'رسالة ترحيب مخصصة';
$string['customwelcomemessage_help'] = 'يمكن إضافة رسالة ترحيب مخصصة كنص عادي أو تنسيق مودل التلقائي، بما في ذلك وسوم HTML ووسوم متعدد اللغات.

قد يتم تضمين العناصر النائبة الآتية في الرسالة:

* اسم المقرر الدراسي {$a->coursename}
* رابط إلى صفحة الملف الشخصي للمستخدم {$a->profileurl}';
$string['defaultrole'] = 'تعيين الدور الافتراضي';
$string['defaultrole_desc'] = 'حدد الدور الذي ينبغي تعيينه للمستخدمين عند الانضمام التلقائي.';
$string['editenrolment'] = 'تحرير الانضمام';
$string['enrolon'] = 'ينضم إلى';
$string['enrolon_desc'] = 'الحدث الذي سيؤدي إلى الانضمام التلقائي.';
$string['enrolon_help'] = 'إختر الحدث الذي يجب أن يُحدث الانضمام التلقائي.

**معاينة المقرر** - ضم المستخدم عند معاينته للمقرر.<br>

**تسجيل دخول المستخدم** - ضم المستخدمين بمجرد تسجيلهم للدخول.<br>

**معاينة نشاط/مورد في المقرر** - ضم المستخدم عند معاينته لأحد الأنشطة/الموارد المحددة.<br>
*ملاحظة:* يتطلب هذا الخيار عيِّنة انضمام وصول الضيف.';
$string['modviewmods'] = 'الأنشطة/الموارد';
$string['modviewmods_desc'] = 'ستؤدي معاينة أي من الموارد/الأنشطة المحددة إلى حدوث الانضمام التلقائي.';
$string['pluginname'] = 'الانضمام التلقائي';
$string['pluginname_desc'] = 'يقوم ملحق الانضمام التلقائي بضم المستخدمين تلقائيًا عند معاينتهم للمقرر/النشاط/المورد.';
$string['requirepassword'] = 'يتطلب مفتاح الانضمام';
$string['requirepassword_desc'] = 'يتطلب مفتاح الانضمام إلى المقررات الدراسية الجديدة ويمنع إزالة مفتاح االانضمام من المقررات الحالية.';
$string['role'] = 'الدور المُعيَّن الافتراضي';
$string['sendcoursewelcomemessage'] = 'إرسال رسالة ترحيب بالمقرر الدراسي';
$string['sendcoursewelcomemessage_help'] = 'في حالة التمكين، يتلقى المستخدمون رسالة ترحيب عبر البريد الالكتروني عند انضمامهم التلقائي.';
$string['status'] = 'السماح بالانضمامات التلقائية';
$string['status_desc'] = 'السماح بالانضمامات التلقائية للمستخدمين في المقرر الدراسي إفتراضيًا.';
$string['status_help'] = 'يحدد هذا الإعداد ما إذا كان قد تم تمكين ملحق الانضمام التلقائي لهذا المقرر الدراسي.';
$string['unenrol'] = 'إلغاء انضمام المستخدم';
$string['unenrolselfconfirm'] = 'هل تريد حقًا إلغاء ضم نفسك إلى المقرر الدراسي "{$a}"؟';
$string['unenroluser'] = 'هل تريد حقًا إلغاء انضمام "{$a->user}" إلى المقرر الدراسي "{$a->course}"؟';
$string['userlogin'] = 'تسجيل دخول المستخدم';
$string['welcometocourse'] = 'مرحبًا بك في {$a}';
$string['welcometocoursetext'] = 'مرحبًا بك في {$a->coursename}!

إذا لم تكن قد قمت بذلك سابقًا، فعليك بتحرير صفحة ملفك الشخصي حتى نتمكن من معرفة المزيد عنك:

{$a->profileurl}';
