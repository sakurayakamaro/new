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
 * Strings for component 'booking', language 'ar', version '2.9'.
 *
 * @package     booking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewcategory'] = 'إضافة تصنيف جديد';
$string['addnewinstitution'] = 'إضافة مؤسسة جديدة';
$string['addnewtagtemplate'] = 'إضافة قالب وسم جديد';
$string['answer'] = 'الإجابة';
$string['answered'] = 'مجاب عليه';
$string['backtoresponses'] = '<< عودة إلى الاستجابات';
$string['booking:addinstance'] = 'إضافة حجز جديد';
$string['bookingtags'] = 'الوسوم';
$string['confirmationmessage'] = 'تم تسجيل حجزك


حالة الحجز: {$a->status}
المشارك: {$a->participant}
المساق: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
لمعاينة كل مساقاتك المحجوزة، أنقر الرابط الآتي: {$a->bookinglink}
المساق ذو الصلة يمكن العثور عليه هنا: {$a->courselink}';
$string['confirmationmessagewaitinglist'] = 'مرحباً {$a->participant}،

لقد تم تسجيل طلبك للحجز

حالة الحجز: {$a->status}
المشارك:    {$a->participant}
المقرر الدراسي:      {$a->title}
التاريخ:      {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
لمعاينة كل مقرراتك المحجوزة، أنقر الرابط الآتي: {$a->bookinglink}';
$string['confirmationsubject'] = 'تأكيد الحجز لـ {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'حجز جديد لـ {$a->title} من قِبل {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'حالة الحجز لـ {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'حالة الحجز لـ {$a->title}';
$string['courseendtime'] = 'وقت إنتهاء المقرر الدراسي';
$string['coursestarttime'] = 'وقت بدء المقرر الدراسي';
$string['days'] = '{$a} من الأيام';
$string['daystonotify'] = 'عدد الأيام السابقة لبدء الحدث لإشعار المشاركين';
$string['daystonotify2'] = 'الإشعار الثاني قبل بدء الحدث من أجل إشعار المشاركين.';
$string['deletedbookingmessage'] = 'تم حذف الحجز للمساق الآتي: {$a->title}

المستخدم: {$a->participant}
العنوان: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
المساق: {$a->courselink}
رابط الحجز: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'تم حذف الحجز: {$a->title} من قبل {$a->participant}';
$string['deletedbookingusermessage'] = 'مرحباً {$a->participant}،

إن حجزك لـ {$a->title} ({$a->startdate} {$a->starttime}) قد تم إلغاؤه.';
$string['deletedbookingusersubject'] = 'الحجز في {$a->title} تم إلغاؤه';
$string['error:failedtosendconfirmation'] = 'المستخدم الآتي لم يتلق رسالة التأكيد

حالة الحجز: {$a->status}
المشارك: {$a->participant}
المساق: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
الرابط: {$a->bookinglink}
المساق المعني: {$a->courselink}';
$string['eventbooking_cancelled'] = 'حجز تم إلغاؤه';
$string['eventbookingoption_booked'] = 'خيار حجز تم حجزه';
$string['eventduration'] = 'مدة الحدث';
$string['eventpoints'] = 'النقاط';
$string['eventreport_viewed'] = 'تقرير تمت معاينته';
$string['eventtype'] = 'نوع الحدث';
$string['eventuserprofilefields_updated'] = 'ملف شخصي لمستخدم تم تحديثه';
$string['fillinatleastoneoption'] = 'ينبغي عليك إعطاء إجابتين محتملتين على الأقل.';
$string['leftandrightdate'] = '{$a->leftdate} إلى {$a->righttdate}';
$string['messagesubject'] = 'الموضوع';
$string['mustfilloutuserinfobeforebooking'] = 'قبل المتابعة إلى نموذج الحجز، يرجى ملء بعض معلومات الحجز الشخصية';
$string['notificationtextmessage'] = 'المساق سيبدأ:

المساق: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notifyemaildefaultmessage'] = 'تم تسجيل حجزك


حالة الحجز: {$a->status}
المشارك: {$a->participant}
المساق: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
لمعاينة كل مساقاتك المحجوزة، أنقر الرابط الآتي: {$a->bookinglink}
المساق ذو الصلة يمكن العثور عليه هنا: {$a->courselink}';
$string['otherbookingaddrule'] = 'إضافة قاعدة جديدة';
$string['pdfstudentname'] = 'اسم الطالب';
$string['pdftodaydate'] = 'التاريخ:';
$string['question'] = 'السؤال';
$string['searchtag'] = 'البحث في الوسوم';
$string['signinextracols_desc'] = 'يمكنك الطباعة إلى حد 3 أعمدة إضافية في صفحة التسجيل. إملأ عنوان العمود أو أتركه فارغاً لمنع المزيد من الأعمدة';
$string['signinlogo'] = 'الشعار المزمع عرضه في ورقة تسجيل الدخول';
$string['spaceleft'] = 'المساحة المتاحة';
$string['spacesleft'] = 'المساحات المتاحة';
$string['startendtimeknown'] = 'وقت بدء المقرر الدراسي وانتهائه معروفان';
$string['statuschangebookedmessage'] = 'مرحبًا {$a->participant}،

تغيرت حالة حجزك. أنت الآن مسجل في {$a->title}.

حالة الحجز: {$a->status}
المشارك: {$a->participant}
المساق: {$a->title}
التاريخ: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
لمعاينة كل مساقاتك المحجوزة، أنقر الرابط الآتي: {$a->bookinglink}
المساق ذو الصلة يمكن العثور عليه هنا: {$a->courselink}';
$string['statuschangebookedsubject'] = 'تغيرت حالة الحجز لـ {$a->title}';
$string['submitandaddnew'] = 'حفظ وإضافة جديد';
$string['textfield'] = 'إدخال نصي من سطر واحد';
$string['timecreated'] = 'وقت الإنشاء';
$string['timerestrict'] = 'تقييد الإجابة بهذه المهلة الزمنية: تم التخلي عنه وستتم إزالته. يرجى استعمال إعدادات "تقييد الوصول" لجعل نشاط الحجز متاح لفترة معينة';
$string['userleavebookedmessage'] = 'مرحبًا {$a->participant}،

لقد تم إلغاء اشتراكك في {$a->title}.';
$string['userleavebookedsubject'] = 'لقد تم إلغاء اشتراكك في {$a->title} بنجاح.';
$string['wrongdataallfields'] = 'لطفاً، إملأ كل الحقول!';
