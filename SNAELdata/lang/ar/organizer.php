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
 * Strings for component 'organizer', language 'ar', version '2.9'.
 *
 * @package     organizer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowdescription'] = 'إظهار الوصف دائمًا';
$string['appointmentcomments_help'] = 'يمكن إضافة معلومات إضافية عن المواعيد هنا.';
$string['btn_add'] = 'إضافة فسحات جديدة';
$string['btn_delete'] = 'إزالة الفسحات المحددة';
$string['btn_edit'] = 'تحرير الفسحات المحددة';
$string['btn_eval'] = 'تقييم الفسحات المحددة';
$string['btn_print'] = 'طباعة الفسحات المحددة';
$string['btn_send'] = 'إرسل';
$string['configday'] = 'يوم';
$string['configdays'] = 'يوم';
$string['confirm_conflicts'] = 'هل أنت متأكد من رغبتك في تجاهل التصادمات وإنشاء الفسحات الزمنية؟';
$string['createsubmit'] = 'إنشاء الفسحات الزمنية';
$string['day'] = 'يوم';
$string['day_0'] = 'الإثنين';
$string['day_1'] = 'الثلاثاء';
$string['day_2'] = 'الأربعاء';
$string['day_3'] = 'الخميس';
$string['day_4'] = 'الجمعة';
$string['day_5'] = 'السبت';
$string['day_6'] = 'الأحد';
$string['day_pl'] = 'أيام';
$string['deleteheader'] = 'حذف الفسحات الآتية:';
$string['deletenoslots'] = 'لم يتم تحديد أي فسحات قابلة للحذف';
$string['err_comments'] = 'ينبغي عليك إدخال الوصف!';
$string['err_noslots'] = 'لم يتم تحديد أي فسحات!';
$string['eval_header'] = 'الفسحات الزمنية المحددة';
$string['eval_no_participants'] = 'ليس لهذه الفسحة أي مشاركين';
$string['eval_not_occured'] = 'هذه الفسحة الزمنية لم تحدث بعد';
$string['eventappointmentadded'] = 'طالب سَجَّل في فسحة زمنية';
$string['eventappointmentcommented'] = 'موعد تم التعليق عليه';
$string['eventappointmentevaluated'] = 'موعد تم تقييمه';
$string['eventappointmentlistprinted'] = 'قائمة مواعيد تمت طباعتها';
$string['eventappointmentremindersent'] = 'تذكير موعد تم إرساله';
$string['eventappointmentremoved'] = 'طالب ألغى تسجيله في فسحة زمنية';
$string['eventappwith:group'] = 'موعد مجموعة';
$string['eventappwith:single'] = 'الموعد';
$string['eventregistrationsviewed'] = 'تبويب التسجيل تمت معاينته';
$string['eventslotcreated'] = 'فسحات زمنية جديدة تم إنشاؤها';
$string['eventslotdeleted'] = 'فسحة زمنية تمت إضافتها';
$string['eventslotupdated'] = 'فسحة زمنية تم تحديثها';
$string['eventslotviewed'] = 'فسحات زمنية تمت معاينتها';
$string['eventteacheranonymous'] = 'معلم مجهول';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />الموضع: {$a->location}<br />';
$string['eventtemplatecomment'] = 'التعليق:<br />{$a}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'مع';
$string['eventwithout'] = 'مع';
$string['font_small'] = 'صغير';
$string['group_registration_notify:student:register:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:register:group:smallmessage'] = 'قام {$a->sendername} بتسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:reregister:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:reregister:group:smallmessage'] = 'قام {$a->sendername} بإعادة تسجيل مجموعتك {$a->groupname} في فسحة زمنية جديدة في {$a->date} عند {$a->time}.';
$string['group_registration_notify:student:unregister:group:fullmessage'] = 'مرحبًا {$a->receivername}!

كجزء من المساق {$a->courseid} {$a->coursefullname}، قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time} في {$a->location}.

نظام المراسلة في مودل';
$string['group_registration_notify:student:unregister:group:smallmessage'] = 'قام {$a->sendername} بإلغاء تسجيل مجموعتك {$a->groupname} في الفسحة الزمنية في {$a->date} عند {$a->time}.';
$string['group_slot_available'] = 'الفسحة الزمنية متاحة';
$string['group_slot_full'] = 'الفسحة الزمنية محجوزة';
$string['headerfooter'] = 'طباعة العنوان/التذييل';
$string['headerfooter_help'] = 'طباعة العنوان/التذييل إذا تم تأشيره';
$string['img_title_due'] = 'الفسحة الزمنية مستوجبة';
$string['img_title_evaluated'] = 'الفسحة الزمنية مقيَّمة';
$string['img_title_no_participants'] = 'الفسحة الزمنية ليس فيها مشاركون';
$string['img_title_past_deadline'] = 'الفسحة الزمنية تجاوزت موعدها النهائي';
$string['img_title_pending'] = 'الفسحة الزمنية تنتظر التقييم';
$string['infobox_description_title'] = 'وصف المنظِّم';
$string['infobox_messages_title'] = 'رسائل النظام';
$string['infobox_myslot_noslot'] = 'لستَ مسجلاً في أي فسحة زمنية حاليًا.';
$string['infobox_myslot_title'] = 'فسحتي';
$string['infobox_slotoverview_title'] = 'استعراض الفسحة';
$string['introeditor_error'] = 'لا بد من إعطاء وصف المنظِّم!';
$string['legend_anonymous'] = 'فسحة غير مشخصنة';
$string['legend_due'] = 'الفسحة مستوجبة';
$string['legend_evaluated'] = 'الفسحة مُقيَّمة';
$string['legend_no_participants'] = 'ليس للفسحة أي مشاركين';
$string['legend_past_deadline'] = 'الفسحة تجاوزت موعدها النهائي';
$string['legend_pending'] = 'الفسحة تنتظر التقييم';
$string['legend_section_details'] = 'ايقونات تفاصيل الفسحة';
$string['message_error_slot_full_group'] = 'هذه الفسحة الزمنية محجوزة مسبقًا!';
$string['message_info_slots_added_pl'] = '{$a->count} من الفسحات الجديدة تمت إضافتها.';
$string['message_info_slots_added_sg'] = 'فسحة جديدة واحدة تمت إضافتها.';
$string['message_info_slots_deleted'] = 'الفسحات الآتية تم حذفها:<br/>
{$a->deleted} من الفسحات تم تحذفها.<br/>
{$a->notified} من المستخدمين تم إشعارهم.';
$string['message_info_slots_deleted_group'] = 'الفسحات الآتية تم حذفها:<br/>
{$a->deleted} من الفسحات تم تحذفها.<br/>
{$a->notified} من المستخدمين تم إشعارهم.';
$string['message_warning_available'] = '<span style="color:red;">تنبيه</span> هناك {$a->freeslots} من الفسحات الزمنية الخالية لـ {$a->notregistered} من المستخدمين الذين ليس لهم مواعيد.';
$string['message_warning_available_group'] = '<span style="color:red;">تنبيه</span> هناك {$a->freeslots} من الفسحات الزمنية الخالية لـ {$a->notregistered} من المجموعات التي ليس لها مواعيد.';
$string['message_warning_no_slots_added'] = 'لم تتم إضافة فسحات جديدة!';
$string['message_warning_no_slots_selected'] = 'ينبغي عليك تحديد فسحة واحدة على الأقل!';
$string['messages_none'] = 'لا إشعارات تسجيل';
$string['mymoodle_next_slot'] = 'الفسحة القادمة في {$a->date} عند {$a->time}';
$string['mymoodle_no_reg_slot'] = 'لم تُسجل في فسحة زمنية بعد';
$string['mymoodle_no_reg_slot_group'] = 'مجموعتك {$a->groupname} لم تُسجل في فسحة زمنية بعد';
$string['mymoodle_no_slots'] = 'لا فسحات زمنية قادمة';
$string['no_due_slots'] = 'كل الفسحات الزمنية المنشأة في منظم المواعيد هذا منتهية الصلاحية';
$string['no_my_slots'] = 'ليست لديك فسحات زمنية منشأة في منظم المواعيد هذا';
$string['no_slots'] = 'ليست هناك أي فسحات زمنية منشأة في منظم المواعيد هذا';
$string['no_slots_defined'] = 'ليست هناك أي فسحات مواعيد متاحة حاليًا';
$string['no_slots_defined_teacher'] = 'ليست هناك أي فسحات مواعيد حالية. أنقر <a href="{$a->link}">هنا</a> لإنشاء البعض منها الآن.';
$string['noparticipants'] = 'لا مشاركين';
$string['noslots'] = 'لا توجد فسحات لـ';
$string['organizer:addslots'] = 'إضافة فسحات زمنية جديدة';
$string['organizer:deleteslots'] = 'حذف الفسحات الزمنية الموجودة';
$string['organizer:editslots'] = 'تحرير الفسحات الزمنية الموجودة';
$string['organizer:evalslots'] = 'تقييم الفسحات الزمنية المكتملة';
$string['organizer:printslots'] = 'طباعة الفسحات الزمنية الموجودة';
$string['organizer:register'] = 'التسجيل في فسحة زمنية';
$string['organizer:unregister'] = 'إلغاء التسجيل في فسحة زمنية';
$string['organizer:viewallslots'] = 'معاينة كل الفسحات الزمنية بصفة معلم';
$string['organizer:viewmyslots'] = 'معاينة كل فسحاته الزمنية بصفة معلم';
$string['organizer:viewstudentview'] = 'معاينة كل الفسحات الزمنية بصفة طالب';
$string['print_return'] = 'عودة إلى استعراض الفسحة الزمنية';
$string['requiremodintro'] = 'يتطلب وصف النشاط';
$string['tabstud'] = 'معاينة الطالب';
$string['textsize'] = 'حجم النص';
$string['th_idnumber'] = 'رقم المُعرَّف';
$string['th_participant'] = 'المشارك';
$string['th_participants'] = 'المشاركون';
$string['title_add'] = 'إضافة فسحات مواعيد جديدة';
$string['warningtext2'] = 'تحذير! محتوى هذا الحقل قد تغير!';
