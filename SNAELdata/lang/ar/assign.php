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
 * Strings for component 'assign', language 'ar', version '2.9'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'لديك بعض التكاليف (المهام) التي تحتاج إلى ملاحظتك';
$string['addattempt'] = 'اسمح بمحاولة أخرى';
$string['addnewattempt'] = 'إضافة محاولة جديدة';
$string['addnewattempt_help'] = 'هذا سينشئ  تسليم فارغ جديد حتى تقوم بالعمل عليه.';
$string['addnewattemptfromprevious'] = 'إضافة محاولة جديدة بناء على التسليم السابق';
$string['addnewattemptfromprevious_help'] = 'سوف يقوم هذا الخيار بنسخ محتويات تسليمك السابق إلى تسليم جديد حتى تستكمل العمل عليه.';
$string['addsubmission'] = 'أضف تسليم';
$string['allocatedmarker'] = 'تخصيص مُصحِّح';
$string['allocatedmarker_help'] = 'تم تخصيص مُصحِّح لهذا التسليم.';
$string['allowsubmissions'] = '(اسمح للمستخدم أن يستمر في تصحيح التسليمات لهذا التكليف (المهمة.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'ستكون تفاصيل التكليف (المهمة) ونموذج التسليم مُتاح من <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'اسمح بالتسليم ابتداءّ من';
$string['allowsubmissionsfromdate_help'] = 'في حالة تفعيل هذا الخيار، لن يتمكن الطلاب من تسليم التكليف قبل هذا التاريخ. أما إذا تم التعطيل، فسيتمكن الطلاب من البدء فوراً بالتسليم.';
$string['allowsubmissionsfromdatesummary'] = 'سيبدأ قبول التسليمات لهذا التكليف (المهمة) ابتداءً من <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'السماح بتغييرالتسليم';
$string['alwaysshowdescription'] = 'اعرض الوصف دائماً';
$string['alwaysshowdescription_help'] = 'إذا تم  تعطيل هذا الخيار، فإن وصف التكليف (المهمة) أعلاه سوف يكون مرئياً للطلبة ابتداءً من التاريخ  المُحدَّد في الإعداد "اسمح بالتسليم ابتداءّ من"';
$string['applytoteam'] = 'تطبيق الدرجات والتغذية الراجعة (الملاحظات) على المجموعة بأكملها';
$string['assign:addinstance'] = 'إضافة وظيفة جديدة';
$string['assign:editothersubmission'] = 'تعديل تسليم طالب آخر';
$string['assign:exportownsubmission'] = 'تصدير تسليمه';
$string['assign:grade'] = 'وضع علامة لوظيفة';
$string['assign:grantextension'] = 'تمديد منحة';
$string['assign:manageallocations'] = 'إدارة المُصححين المخصصين للتسليمات';
$string['assign:managegrades'] = 'مراجعة ونشر الدرجات';
$string['assign:receivegradernotifications'] = 'تلقي إخطارات عند تصحيح التسليمات';
$string['assign:releasegrades'] = 'نشر الدرجات';
$string['assign:revealidentities'] = 'الكشف عن هوية الطالب';
$string['assign:reviewgrades'] = 'مراجعة الدرجات';
$string['assign:submit'] = 'تسليم وظيفة';
$string['assign:view'] = 'معاينة وظيفة';
$string['assign:viewblinddetails'] = 'عرض هويات الطلبة عند تفعيل خيار التصحيح الأعمى (التصحيح بدون عرض هويات الطلبة(';
$string['assign:viewgrades'] = 'معاينة العلامات';
$string['assignfeedback'] = '(البرمجية المُلحقة للتغذية الراجعة (الملاحظات';
$string['assignfeedbackpluginname'] = '(البرمجية المُلحقة للتغذية الراجعة (الملاحظات';
$string['assignmentisdue'] = 'فات موعد التسليم';
$string['assignmentmail'] = '{$a->grader}وقد نشرت بعض الملاحظات (التغذية الراجعة) على تسليمك للتكليف \'{$a->assignment}\'

 يمكن أن ترى تلك الملاحظات مُضافة على تسليمك للتكليف في الرابط التالي:

    {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} نشر بعض الملاحظات (التغذية الراجعة) على تسليمك للتكليف \'<i>{$a->assignment}</i>\'.</p>
<p>يمكن أن ترى تلك الملاحظات مُضافة على <a href="{$a->url}">تسليم التكليف الخاص بك </a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader}نشر بعض الملاحظات (التغذية الراجعة) على تسليمك للتكليف التالي\'{$a->assignment}\' يمكنك أن ترى تلك الملاحظات مُضافة على تسليمك';
$string['assignmentname'] = 'اسم الواجب';
$string['assignmentplugins'] = '(البرمجية المُلحقة للتكليف (المهمة';
$string['assignmentsperpage'] = 'عدد التكاليف في الصفحة الواحدة';
$string['assignsubmission'] = 'البرمجية المُلحقة للتسليمات';
$string['assignsubmissionpluginname'] = 'البرمجية المُلحقة للتسليمات';
$string['attemptheading'] = 'المحاولة {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'محاولات سابقة';
$string['attemptnumber'] = 'رقم المحاولة';
$string['attemptreopenmethod'] = 'تم إعادة فتح المحاولة';
$string['attemptreopenmethod_help'] = 'يُحدِّد كيفية إعادة فتح محاولات تسليم الطالب. الخيارات المتاحة هي:

* أبداً - التسليم لا يمكن إعادة فتحه.
* يدوياً - التسليم يمكن إعادة فتحه من قبل المعلم.
* تلقائياً حتى النجاح - يتم إعادة فتح التسليم للطالب تلقائياً حتى يحقق الطالب درجة النجاح المُحدَّدة في سجل العلامات لهذا الواجب.';
$string['attemptreopenmethod_manual'] = 'يدوياً';
$string['attemptreopenmethod_none'] = 'أبداً';
$string['attemptreopenmethod_untilpass'] = 'تلقائياً حتى النجاح';
$string['attemptsettings'] = 'إعدادات المحاولة';
$string['availability'] = '(الإتاحة (التوفر';
$string['backtoassignment'] = 'عودة إلى المهمة';
$string['batchoperationconfirmaddattempt'] = 'السماح بمحاولة أخرى للتسليمات المُحدَّدة؟';
$string['batchoperationconfirmgrantextension'] = 'تمديد المنحة لجميع التسليمات المُختارة';
$string['batchoperationconfirmlock'] = 'قفل جميع التسليمات المختارة؟';
$string['batchoperationconfirmreverttodraft'] = 'تحويل جميع التسليمات المُختارة إلى مسودات؟';
$string['batchoperationconfirmsetmarkingallocation'] = 'أتريد تحديد كيفية توزيع التصحيح لكل التسليمات المحددة؟';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'أتريد تحديد حالة مجرى العمل في التصحيح لكل التسليمات المحددة؟';
$string['batchoperationconfirmunlock'] = 'أتريد إزالة التأمين من كل التسليمات المحددة؟';
$string['batchoperationlock'] = 'قفل التسليمات';
$string['batchoperationreverttodraft'] = 'إرجاع التسليمات كمسودات';
$string['batchoperationsdescription'] = 'مع المختارة...';
$string['batchoperationunlock'] = 'فتح التسليمات';
$string['batchsetallocatedmarker'] = 'حدد المصحح المُعيَّن لـ {$a} من المستخدمين المحددين.';
$string['batchsetmarkingworkflowstateforusers'] = 'حدد حالة سير عمل التصحيح لـ {$a} من المستخدمين المحددين.';
$string['blindmarking'] = 'تصحيح أعمى (تصحيح بدون عرض الأسماء)';
$string['blindmarking_help'] = 'التصحيح الأعمى يخفي هوية الطلاب عن المُصحِّحين. سيتم تأمين الإعدادات للتصحيح الأعمى وقفلها عند إرسال تسليم من الطالب أو وضع درجة لهذا التكليف.';
$string['changegradewarning'] = 'هذا التكليف (المهمة) يحتوي على تسليمات تم تصحيحها ، وتغيير الدرجة الآن ، لن يقوم تلقائياً بإعادة حساب الدرجات للتسليمات السابقة. يجب أن تقوم بإعادة التصحيح لجميع التسليمات الموجودة، إذا كنت ترغب في تغيير الدرجة.';
$string['choosegradingaction'] = 'إجراء التصحيح';
$string['choosemarker'] = 'اختر...';
$string['chooseoperation'] = 'اختر العملية';
$string['comment'] = 'تعليق (علق)';
$string['completionsubmit'] = 'يجب على الطالب أن يقوم بتسليم إجابة هذا النشاط لاستكماله';
$string['configshowrecentsubmissions'] = 'يمكن لأي شخص أن يرى إخطارات التسليمات في تقارير الأنشطة الأخيرة.';
$string['confirmbatchgradingoperation'] = 'هل أنت متأكد أنك تريد {$a->operation} ل{$a->count} طلاب؟';
$string['confirmsubmission'] = 'هل أنت متأكد أنك تريد أن تُسلِّم عملك للتصحيح؟ لن تكون قادراً على إجراء أية تغييرات أخرى.';
$string['conversionexception'] = 'لا يمكن تحويل التكليف(المهمة).خطأ الاستثناء: {$a}.';
$string['couldnotconvertgrade'] = 'لا يمكن تحويل درجة التكليف (المهمة) للمستخدم {$a}.';
$string['couldnotconvertsubmission'] = 'لا يمكن تحويل تسليم التكليف (المهمة) للمستخدم {$a}.';
$string['couldnotcreatecoursemodule'] = 'لا يمكن إنشاء وحدة المقرر الدراسي.';
$string['couldnotcreatenewassignmentinstance'] = 'لا يمكن إنشاء وحدة تكليف (مهمة) جديدة.';
$string['couldnotfindassignmenttoupgrade'] = 'لا يمكن العثور على وحدة تكليف (مهمة) بنسخة قديمة للترقية.';
$string['currentattempt'] = 'هذه المحاولة {$a}.';
$string['currentattemptof'] = 'هذه المحاولة رقم{$a->attemptnumber} ( {$a->maxattempts} محاولات مسموحة ).';
$string['currentgrade'] = 'الدرجة الحالية في';
$string['cutoffdate'] = 'موعد التسليم النهائي';
$string['cutoffdate_help'] = 'إذا تم تفعيله، فإن التكليف (المهمة) لن تقبل التسليمات بعد هذا التاريخ دون تمديد.';
$string['cutoffdatefromdatevalidation'] = 'لا يمكن أن يكون تاريخ التوقف سابقاً لتاريخ السماح بالتسليم إبتداءً من.';
$string['cutoffdatevalidation'] = 'تاريخ التوقف لا يمكن أن يكون سابقاً لتاريخ الاستحقاق.';
$string['defaultsettings'] = 'إعدادات الواجب الافتراضية';
$string['defaultsettings_help'] = 'هذه الإعدادات تحدد إفتراضيات كل الواجبات الجديدة.';
$string['defaultteam'] = 'المجموعة الأساسية';
$string['deleteallsubmissions'] = 'إحذف كل التسليمات';
$string['description'] = 'الوصف';
$string['downloadall'] = 'تنزيل جميع التسليمات';
$string['duedate'] = 'تاريخ الاستحقاق';
$string['duedate_help'] = 'هذا موعد استحقاق الواجب. ستبقى التسليمات مسموحاً بها بعد هذا التاريخ، ولكن ما يتأخر منها عن هذا الموعد سيتم تأشيره بأنه متأخر. حدد تاريخ التوقف لمنع التسليمات بعد موعد معين.';
$string['duedateno'] = 'لا يوجد موعد استحقاق';
$string['duedatereached'] = 'لقد انتهى موعد تسليم الواجب';
$string['duedatevalidation'] = 'تاريخ الاستحقاق لا يمكن أن يكون سابقاً لتاريخ السماح بالتسليم ابتداءً من.';
$string['editaction'] = 'الإجراءات...';
$string['editattemptfeedback'] = 'حرر العلامة والإفادة للمحاولة المرقمة {$a}.';
$string['editingpreviousfeedbackwarning'] = 'أنت تحرر الإفادة لمحاولة سابقة. هذه المحاولة {$a->attemptnumber} من بين {$a->totalattempts}.';
$string['editingstatus'] = 'تعديل الحالة';
$string['editsubmission'] = 'تحرير التسليم';
$string['editsubmission_help'] = 'لا يزال بإمكانك إجراء تعديلات على تسليمك.';
$string['editsubmissionother'] = 'تحرير التسليم لـ {$a}';
$string['enabled'] = 'مُمَكَّنة';
$string['errornosubmissions'] = 'لا يوجد تسليمات ليتم تنزيلها';
$string['errorquickgradingvsadvancedgrading'] = 'لم يتم حفظ العلامات لأن هذا الواجب يستعمل حالياً التقييم المتقدم';
$string['errorrecordmodified'] = 'لم يتم حفظ العلامات لأن شخصاً ما قام بتعديل سجل واحد أو أكثر في وقت أقرب من طلبك لهذه الصفحة.';
$string['eventallsubmissionsdownloaded'] = 'تسليمات يتم تنزيلها كلها';
$string['eventassessablesubmitted'] = 'تسليم تم تقديمه';
$string['eventbatchsetmarkerallocationviewed'] = 'تعيين تصحيح بالجملة تمت معاينته';
$string['eventbatchsetworkflowstateviewed'] = 'تحديد حالة سير العمل بالجملة تمت معاينته';
$string['eventextensiongranted'] = 'تمديد تم منحه';
$string['eventfeedbackupdated'] = 'إفادة تم تحديثها';
$string['eventfeedbackviewed'] = 'إفادة تمت معاينتها';
$string['eventgradingformviewed'] = 'نموذج تقييم تمت معاينته';
$string['eventgradingtableviewed'] = 'جدول تقييم تمت معاينته';
$string['eventidentitiesrevealed'] = 'هويات تم كشفها';
$string['eventmarkerupdated'] = 'مصحح معيَّن تم تحديثه';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'صفحة تأكيد كشف الهويات تمت معاينتها';
$string['eventstatementaccepted'] = 'مستخدم وافق على بيان التسليم';
$string['eventsubmissionconfirmationformviewed'] = 'نموذج تأكيد تسليم تمت معاينته';
$string['eventsubmissioncreated'] = 'تسليم تم إنشاؤه';
$string['eventsubmissionduplicated'] = 'قام المستخدم بتكرار تسليمه.';
$string['eventsubmissionformviewed'] = 'نموذج تسليم تمت معاينته';
$string['eventsubmissiongraded'] = 'تسليم تم تقييمه';
$string['eventsubmissionlocked'] = 'تسليمات مستخدم تم تأمينها';
$string['eventsubmissionstatusupdated'] = 'حالة تسليم تم تحديثها';
$string['eventsubmissionstatusviewed'] = 'حالة تسليم تمت معاينتها';
$string['eventsubmissionunlocked'] = 'تسليمات مستخدم تم إلغاء تأمينها';
$string['eventsubmissionupdated'] = 'تسليم تم تحديثه';
$string['eventsubmissionviewed'] = 'تسليم تمت معاينته';
$string['eventworkflowstateupdated'] = 'حالة سير العمل تم تحديثها';
$string['extensionduedate'] = 'تاريخ انتهاء الإضافة';
$string['extensionnotafterduedate'] = 'تاريخ التمديد ينبغي أن يكون بعد تاريخ الاستحقاق';
$string['extensionnotafterfromdate'] = 'تاريخ التمديد ينبغي أن يكون بعد تاريخ السماح بالتسليم ابتداءً من';
$string['feedback'] = 'الإفادة';
$string['feedbackavailablehtml'] = '{$a->username} قد أعطى إفادة بشأن تسليمك للواجب \'<i>{$a->assignment}</i>\'<br /><br />
يمكن أن تراها ملحقة بـ <a href="{$a->url}">تسليمك للواجب </a>.';
$string['feedbackavailablesmall'] = '{$a->username} قد أعطى إفادة للواجب {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} قد أعطى إفادة بشأن تسليمك للواجب \'{$a->assignment}\'

 يمكن أن ترى تلك الملاحظات مُلحقة بتسليمك للواجب في الرابط التالي:

    {$a->url}';
$string['feedbackplugin'] = 'ملحق الإفادة';
$string['feedbackpluginforgradebook'] = 'ملحق الإفادة الذي سيضع التعليقات في سجل التقديرات';
$string['feedbackpluginforgradebook_help'] = 'يمكن لملحق إفادة واحد فقط للواجبات أن يضع الإفادات في سجل التقديرات.';
$string['feedbackplugins'] = 'ملاحق الإفادات';
$string['feedbacksettings'] = 'إعدادات الإفادة';
$string['feedbacktypes'] = 'أنواع الإفادات';
$string['filesubmissions'] = 'تسليمات الملفات';
$string['filter'] = 'المرشح';
$string['filternone'] = 'بلا ترشيح';
$string['filternotsubmitted'] = 'غير مُسَلِّم';
$string['filterrequiregrading'] = 'يتطلب التقييم';
$string['filtersubmitted'] = 'مسلمة';
$string['gradeabovemaximum'] = 'العلامة ينبغي أن تكون مساوية أو أقل من {$a}.';
$string['gradebelowzero'] = 'العلامة ينبغي أن تكون مساوية أو أكبر من الصفر.';
$string['gradecanbechanged'] = 'يمكن تغيير العلامة';
$string['graded'] = 'مُقيَّم';
$string['gradedby'] = 'تم التصحيح من قبل';
$string['gradedon'] = 'صححت على';
$string['gradelocked'] = 'هذه العلامة مغلقة أو تم الكتابة فوقها في تقرير العلامات';
$string['gradeoutof'] = 'الدرجة من {$a}';
$string['gradeoutofhelp'] = 'العلامة';
$string['gradeoutofhelp_help'] = 'أدخل علامة لتسليم الطالب هنا. بإمكانك استعمال المراتب العشرية.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} قام بتحديث تسليمه للواجب <i>\'{$a->assignment}\' بتاريخ {$a->timeupdated}</i><br /><br />
وهو <a href="{$a->url}">متاح في الموقع</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} قام بتحديث تسليمه للواجب {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} قام بتحديث تسليمه للواجب \'{$a->assignment}\' بتاريخ {$a->timeupdated}

وهو متاح هنا:

    {$a->url}';
$string['gradestudent'] = 'منح العلامة للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['gradeuser'] = 'منح علامة {$a}';
$string['grading'] = 'منح العلامات';
$string['gradingchangessaved'] = 'تم حفظ تغييرات العلامة';
$string['gradingmethodpreview'] = 'معيار التقييم';
$string['gradingoptions'] = 'الخيارات';
$string['gradingstatus'] = 'حالة التقييم';
$string['gradingstudent'] = 'تقييم الطالب';
$string['gradingsummary'] = 'خلاصة التقييم';
$string['grantextension'] = 'إمنح تمديداً';
$string['grantextensionforusers'] = 'إمنح تمديداً لـ {$a} من الطلاب';
$string['groupsubmissionsettings'] = 'إعدادات تسليم المجموعات';
$string['hiddenuser'] = 'المشاركين';
$string['hideshow'] = 'إظهار/إخفاء';
$string['instructionfiles'] = 'ملفات إرشادية';
$string['introattachments'] = 'ملفات إضافية';
$string['introattachments_help'] = 'يمكن إضافة ملفات إضافية لاستعمالها في الواجب، مثل قوالب الإجابة. روابط تنزيل لهذه الملفات سيتم عرضها عندئذ في صفحة الواجب تحت الوصف.';
$string['invalidfloatforgrade'] = 'تعذر فهم العلامة المعطاة: {$a}';
$string['invalidgradeforscale'] = 'العلامة المعطاة لم تكن صحيحة للمقياس الحالي';
$string['lastmodifiedgrade'] = 'آخر تعديل (العلامة)';
$string['lastmodifiedsubmission'] = 'آخر تعديل (التسليم)';
$string['latesubmissions'] = 'التقديمات المتأخرة';
$string['latesubmissionsaccepted'] = 'مسموح به حتى {$a}';
$string['locksubmissionforstudent'] = 'إمنع أي تسليمات أخرى للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['locksubmissions'] = 'تأمين التسليمات';
$string['manageassignfeedbackplugins'] = 'إدارة ملاحق إفادات الواجب';
$string['manageassignsubmissionplugins'] = 'إدارة ملاحق تسليمات الواجب';
$string['marker'] = 'المصحح';
$string['markerfilter'] = 'مرشح التصحيح';
$string['markerfilternomarker'] = 'بلا مصحح';
$string['markingallocation'] = 'استعمل تعيين التصحيح';
$string['markingallocation_help'] = 'عند تمكينه جنباً إلى جنب مع سير عمل التصحيح، سيكون بالإمكان تعيين المصححين لطلبة محددين.';
$string['markingworkflow'] = 'استعمل سير عمل التصحيح';
$string['markingworkflow_help'] = 'عند تمكينه، سيخضع عمل المصححين إلى سلسلة من المراحل قبل إطلاقه إلى الطلبة. هذا يسمح بجولات متعددة من التصحيح ويسمح بإطلاق التصحيحات لجميع الطلبة في وقت واحد.';
$string['markingworkflowstate'] = 'تقييم حالة سير العمل';
$string['markingworkflowstate_help'] = 'الحالات الممكنة لسير عمل التصحيح قد تتضمن (إعتماداً على صلاحياتك):

* غير مصحح - المصحح لم يبدأ عمله بعد
* قيد التصحيح - المصحح بدأ ولكنه لم ينته بعد
* التصحيح مكتمل - المصحح قد أكمل عمله ولكنه قد يحتاج إلى الرجوع لأغراض التحقق/التعديل
* قيد التنقيح - التصحيح الآن صار بيد المعلم المسؤول عن تدقيق الجودة
* جاهز للإطلاق - المعلم المسؤول راضٍ عن التصحيح ولكنه قد ينتظر قبل السماح للطلبة بالوصول إلى التصحيحات
* مطلق - يمكن للطالب الوصول إلى العلامات/الإفادات';
$string['markingworkflowstateinmarking'] = 'في التصحيح';
$string['markingworkflowstateinreview'] = 'في المراجعة';
$string['markingworkflowstatenotmarked'] = 'لم تصحح';
$string['markingworkflowstatereadyforrelease'] = 'جاهز للنشر';
$string['markingworkflowstatereadyforreview'] = 'تم الانتهاء من التصحيح';
$string['markingworkflowstatereleased'] = 'تم النشر';
$string['maxattempts'] = 'أقصى عدد من المحاولات';
$string['maxattempts_help'] = 'أقصى عدد من محاولات التسليم يمكن القيام بها من قبل الطالب. بعد الوصول إلى هذا العدد، لن يعاد فتح المجال للتسليم مجدداً.';
$string['maxgrade'] = 'أقصى علامة';
$string['messageprovider:assign_notification'] = 'إشعارات الواجب';
$string['modulename'] = 'المهمة';
$string['modulename_help'] = 'تمكن وحدة نشاط الواجب  المدرس من إيصال الواجبات، وجمع التسليمات ووضع الدرجات والإفادات.

يمكن للطلاب تقديم أي محتوى رقمي (ملفات)، مثل الوثائق النصية وجداول البيانات أو الصور أو مقاطع الصوت والفيديو.
 بدلا من ذلك، أو بالإضافة إلى ذلك، قد يتطلب الواجب من الطلاب كتابة نص مباشرة في محرر النصوص. ويمكن أيضااستخدام الواجب لتذكير الطلاب بواجبات "العالم الواقعي" التي يحتاج الطلاب لاكمالها بدون اتصال ، مثل العمل الفني، والتي لا تتطلب أي محتوى رقمي. يمكن للطلاب تقديم العمل بصورة فردية أو كعضو في مجموعة.

عند استعراض الواجبات، يمكن للمدرسين ترك ملاحظات التقييم ورفع ملفات، مثل تسليمات الطلاب المصححة، وثائق مع تعليقات أو إفادات صوتية.  يمكن وضع درجات الواجبات  باستخدام مقياس عددي أو مقياس مخصص أو أسلوب الدرجات المتقدمة مثل سلم التقييم. تسجل الدرجات النهائية في دفتر التقديرات';
$string['modulenameplural'] = 'واجبات';
$string['moreusers'] = '{$a} أكثر...';
$string['mysubmission'] = 'تسليمي:';
$string['newsubmissions'] = 'واجبات تم تسليمها';
$string['noattempt'] = 'لا توجد محاولات';
$string['nofiles'] = 'لا ملفات.';
$string['nograde'] = 'لا علامة.';
$string['nolatesubmissions'] = 'التسليمات المتأخرة غير مقبولة.';
$string['nomoresubmissionsaccepted'] = 'مسموح به فقط للمشاركين الذين تم منحهم تمديداً';
$string['noonlinesubmissions'] = 'لا يلزم لإتمام هذا الواجب تسليم أي ملف عبر الأنترنت';
$string['nosavebutnext'] = 'التالي';
$string['nosubmission'] = 'لم يتم تسليم شيء لهذا الواجب';
$string['nosubmissionsacceptedafter'] = 'لا تُقبل التسليمات بعد';
$string['noteam'] = 'لستَ عضواً في أي مجموعة';
$string['notgraded'] = 'لم يتم التقييم';
$string['notgradedyet'] = 'لم تعطى درجة بعد';
$string['notifications'] = 'الإشعارات';
$string['notsubmittedyet'] = 'لم تقدم بعد';
$string['nousersselected'] = 'لم يتم تحديد المستخدمين';
$string['numberofdraftsubmissions'] = 'المسودات';
$string['numberofparticipants'] = 'المشاركون';
$string['numberofsubmissionsneedgrading'] = 'بحاجة للتقييم';
$string['numberofsubmittedassignments'] = 'مسلمة';
$string['numberofteams'] = 'المجموعات';
$string['offline'] = 'التسليمات عبر الاتصال بالإنترنت غير مطلوبة';
$string['open'] = 'إفتح';
$string['outlinegrade'] = 'العلامة: {$a}';
$string['outof'] = '{$a->current} من أصل {$a->total}';
$string['overdue'] = '<font color="red">فات موعد تسليم المهمة منذ: {$a}</font>';
$string['page-mod-assign-view'] = 'الصفحة الرئيسية لوحدة الواجب والتسليم';
$string['page-mod-assign-x'] = 'أي صفحة لوحدة الواجب';
$string['participant'] = 'المشارك';
$string['pluginadministration'] = 'إدارة الواجب';
$string['pluginname'] = 'الواجب';
$string['preventsubmissionnotingroup'] = 'يتطلب قيام المجموعة بتقديم التسليم';
$string['preventsubmissionnotingroup_help'] = 'عند تمكينه، سيكون المستخدمون اللامنتمون إلى أي مجموعة غير قادرين على تقديم تسليمات.';
$string['preventsubmissions'] = 'إمنع المستخدم من تقديم المزيد من التسليمات لهذا الواجب.';
$string['preventsubmissionsshort'] = 'إمنع تغييرات التسليم';
$string['previous'] = 'السابق';
$string['quickgrading'] = 'التقييم السريع';
$string['quickgrading_help'] = 'التقييم السريع يسمح لك بمنح العلامات (والمخرجات) مباشرة في جدول التسليمات. التقييم السريع ليس متوافقاً مع التقييم المتقدم وغير موصى به عندما يكون هناك أكثر من مصحح.';
$string['quickgradingchangessaved'] = 'تم حفظ تغييرات العلامة';
$string['quickgradingresult'] = 'التقييم السريع';
$string['recordid'] = 'المُعرَّف';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'خيار أعِد الفتح حتى النجاح غير متوافق مع التصحيح الأعمى، لأن التقديرات لا تُطلق إلى سجل التقديرات ما لم يتم كشف هويات الطلبة.';
$string['requireallteammemberssubmit'] = 'يتطلب التسليم من كل أعضاء المجموعة';
$string['requireallteammemberssubmit_help'] = 'عند تمكينه، ينبغي على كل أعضاء مجموعة الطلاب النقر على زر التسليم لهذا الواجب قبل اعتبار تسليم المجموعة مكتملاً. عند تعطيله، سيعتبر تسليم المجموعة مكتملاً بمجرد قيام أي عضو فيها بالنقر على زر التسليم.';
$string['requiresubmissionstatement'] = 'ينبغي على الطلاب قبول بيان التسليم';
$string['requiresubmissionstatement_help'] = 'ينبغي على الطلاب قبول بيان التسليم لكل التسليمات في هذا الواجب .';
$string['revealidentities'] = 'إكشف هويات الطلاب';
$string['revealidentitiesconfirm'] = 'هل أنت متأكد من رغبتك في كشف هويات الطلاب لهذا الواجب؟ لا يمكن التراجع عن هذه العملية. بمجرد الكشف عن هويات الطلاب، ستُطلق الدرجات إلى سجل التقديرات.';
$string['reverttodraft'] = 'إرجاع التسليم إلى وضع المسودة';
$string['reverttodraftforstudent'] = 'إرجاع التسليم إلى مسودة للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['reverttodraftshort'] = 'أرجِع التسليم إلى مسودة';
$string['reviewed'] = 'تمت مراجعته';
$string['saveallquickgradingchanges'] = 'إحفظ كل تغييرات التقييم السريع';
$string['savechanges'] = 'حفظ التغييرات';
$string['savegradingresult'] = 'العلامة';
$string['savenext'] = 'إحفظ وأظهر التالي';
$string['scale'] = 'مقياس';
$string['selectedusers'] = 'المستخدمون المحددون';
$string['selectlink'] = 'إختر...';
$string['selectuser'] = 'إختر {$a}';
$string['sendlatenotifications'] = 'أبلغ المقيمين عن التسليمات المتأخرة';
$string['sendlatenotifications_help'] = 'عند تمكينه، سيتلقى المقيمون (المعلمون عادة) رسالة كلما قام طالب بالتسليم متأخراً. طرق المراسلة قابلة للتهيئة.';
$string['sendnotifications'] = 'أبلغ المقيمين عن التسليمات';
$string['sendnotifications_help'] = 'عند تمكينه، سيتلقى المقيمون (المعلمون عادة) رسالة كلما قام طالب بالتسليم باكراً، في الموعد أو متأخراً. طرق المراسلة قابلة للتهيئة.';
$string['sendstudentnotifications'] = 'أبلغ الطلاب';
$string['sendstudentnotifications_help'] = 'عند تمكينه، سيتلقى الطلاب رسالة عن التحديث في سجل العلامات أو الإفادة. إذا كان سير عمل التصحيح مُمَكَّناً في هذا الواجب، لن يتم إرسال الإشعارات حتى "إطلاق" العلامات.';
$string['sendstudentnotificationsdefault'] = 'الإعداد الافتراضي لـ "أبلغ الطلاب"';
$string['sendstudentnotificationsdefault_help'] = 'حدد القيمة الافتراضية  لخانة تأشير "أبلغ الطلاب" في نموذج التقييم.';
$string['sendsubmissionreceipts'] = 'أرسل إيصالات التسليم إلى الطلاب';
$string['sendsubmissionreceipts_help'] = 'هذا المفتاح يُمكِّن إيصالات التسليم للطلاب. سيتقلى الطلاب إشعاراً كلما سلموا الواجب بنجاح.';
$string['setmarkerallocationforlog'] = 'حدد تعيين التصحيح: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}، المصحح={$a->marker}).';
$string['setmarkingallocation'] = 'حدد المصحح المُعيَّن';
$string['setmarkingworkflowstate'] = 'حدد حالة سير عمل التصحيح';
$string['setmarkingworkflowstateforlog'] = 'حدد حالة سير عمل التصحيح: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}، الحالة={$a->state}).';
$string['settings'] = 'إعدادات الواجب';
$string['showrecentsubmissions'] = 'أظهر التسليمات الحديثة';
$string['status'] = 'الحالة';
$string['studentnotificationworkflowstateerror'] = 'حالة سير عمل التصحيح ينبغي أن تكون \'مطلق\' لإشعار الطلاب.';
$string['submission'] = 'تسليم';
$string['submissioncopiedhtml'] = '<p>لقد أنشأت نسخة من تسليمك السابق للمهمة \'<i>{$a->assignment}</i>\'.</p>
<p>يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.</p>';
$string['submissioncopiedsmall'] = 'لقد أنشأت نسخة من تسليمك السابق للمهمة {$a->assignment}';
$string['submissioncopiedtext'] = 'لقد أنشأت نسخة من تسليمك السابق للمهمة \'{$a->assignment}\'

يمكنك معاينة حالة التسليم لمهمتك:

    {$a->url}';
$string['submissiondrafts'] = 'يتطلب الأمر أن يقوم الطلبة بالنقر على زر التسليم';
$string['submissiondrafts_help'] = 'عند تمكينه، سيكون على الطلبة النقر على زر التسليم للتصريح بأن تسليمهم مكتمل بشكل نهائي. هذا يسمح للطلبة بالاحتفاظ بنسخة مسودة من التسليم في النظام. إذا تم تغيير هذا الإعداد من "لا" إلى "نعم" بعد قيام الطلبة بالتسليم فعلياً، فإن تلك التسليمات سيتم اعتبارها نهائية.';
$string['submissioneditable'] = 'يمكن للطالب تحرير هذا التسليم';
$string['submissionempty'] = 'لم يتم تسليم شيء بعد';
$string['submissionlog'] = 'الطالب: {$a->fullname}، الحالة: {$a->status}';
$string['submissionnotcopiedinvalidstatus'] = 'لم يتم نسخ التسليم لأنه تم تعديله منذ إعادة فتحه.';
$string['submissionnoteditable'] = 'لا يمكن للطالب تحرير هذا التسليم';
$string['submissionnotready'] = 'هذا الواجب غير جاهز للتسليم:';
$string['submissionplugins'] = 'ملاحق التسليم';
$string['submissionreceipthtml'] = '<p>لقد قمت بتسليم الواجب \'<i>{$a->assignment}</i>\'.</p>
<p>يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.</p>';
$string['submissionreceiptotherhtml'] = 'لقد تم تقديم تسليمك للمهمة
\'<i>{$a->assignment}</i>\'.<br /><br />
يمكنك معاينة حالة <a href="{$a->url}">تقديمك للتسليم</a>.';
$string['submissionreceiptothersmall'] = 'لقد تم تقديم تسليمك للمهمة {$a->assignment}.';
$string['submissionreceiptothertext'] = 'لقد تم تقديم تسليمك للمهمة
\'{$a->assignment}\'.

يمكنك معاينة حالة تسليمك:

    {$a->url}';
$string['submissionreceipts'] = 'أرسل إيصالات التسليم';
$string['submissionreceiptsmall'] = 'لقد قمت بتقديم تسليمك لـ {$a->assignment}';
$string['submissionreceipttext'] = 'لقد قمت بتقديم تسليمك لـ \'{$a->assignment}\'

يمكنك معاينة حالة تسليمك:

    {$a->url}';
$string['submissions'] = 'تسليمات';
$string['submissionsclosed'] = 'التسليمات مغلقة';
$string['submissionsettings'] = 'إعدادات التسليم';
$string['submissionslocked'] = 'هذه الوظيفة لا تقبل التسليم الآن';
$string['submissionslockedshort'] = 'لا يُسمح بالتغييرات في التسليم';
$string['submissionsnotgraded'] = '{$a} مرسلات غير مصححة';
$string['submissionstatement'] = 'بيان التسليم';
$string['submissionstatement_help'] = 'البيان الذي على كل طالب الموافقة عليه من أجل تسليم عمله.';
$string['submissionstatementacceptedlog'] = 'تمت الموافقة على بيان التسليم من قبل المستخدم {$a}';
$string['submissionstatementdefault'] = 'هذا التسليم هو عملي الخاص، ما عدا ما عرَّفتُ به من استعمالي لأعمال الآخرين.';
$string['submissionstatus'] = 'حالة التسليم';
$string['submissionstatus_'] = 'لا تسليم';
$string['submissionstatus_draft'] = 'مسودة (غير مسلمة)';
$string['submissionstatus_marked'] = 'مُقيَّم';
$string['submissionstatus_new'] = 'لا تسليم';
$string['submissionstatus_reopened'] = 'أُعيد فتحه';
$string['submissionstatus_submitted'] = 'مسلمة للتقييم';
$string['submissionstatusheading'] = 'حالة التسليم';
$string['submissionsummary'] = '{$a->status}. آخر تعديل في {$a->timemodified}';
$string['submissionteam'] = 'المجموعة';
$string['submissiontypes'] = 'أنواع التسليم';
$string['submitaction'] = 'تسليم';
$string['submitassignment'] = 'تسليم وظيفة';
$string['submitassignment_help'] = 'بمجرد تسليم الواجب لن تتمكن من إجراء المزيد من التعديلات عليه.';
$string['submitforgrading'] = 'التسليم لغرض التقييم';
$string['submitted'] = 'تم التسليم';
$string['submittedearly'] = 'تم تسليم الواجب {$a} باكرًا';
$string['submittedlate'] = 'تم تسليم الوظيفة متأخرة بـ{$a}';
$string['submittedlateshort'] = '{$a} متأخر';
$string['subplugintype_assignfeedback'] = 'ملحق الإفادة';
$string['subplugintype_assignfeedback_plural'] = 'ملاحق الإفادات';
$string['subplugintype_assignsubmission'] = 'ملحق التسليم';
$string['subplugintype_assignsubmission_plural'] = 'ملاحق التسليم';
$string['teamsubmission'] = 'الطلبة يُسلِّمون كمجموعات';
$string['teamsubmission_help'] = 'عند تمكينه، سيتم تقسيم الطلبة إلى مجموعات حسب المجموعات الافتراضية أو التجميعات المخصصة. ستتم مشاركة التسليم ما بين أعضاء المجموعة وسيتمكن كل عضو فيها من معاينة التغييرات الحاصلة في التسليم لمجموعته.';
$string['teamsubmissiongroupingid'] = 'التجميع لمجموعات الطلبة';
$string['teamsubmissiongroupingid_help'] = 'هذا هي التجميع التي سيستعمله الواجب للعثور على المجموعات في حالة التسليم كمجموعات. إذا لم تتم تهيئته، سيتم استعمال المجموعات الافتراضية.';
$string['textinstructions'] = 'تعليمات التسليم';
$string['timemodified'] = 'آخر تعديل';
$string['timeremaining'] = 'الزمن المتبقي';
$string['ungroupedusers'] = 'لقد تم تمكين الإعداد \'يتطلب قيام المجموعة بتقديم التسليم\' وهناك بعض المستخدمين إما ليسوا أعضاءً في أي مجموعة أو أعضاءً في أكثر من مجموعة، ولذلك يتعذر تقديم التسليمات.';
$string['unlimitedattempts'] = 'غير محدود';
$string['unlimitedattemptsallowed'] = 'يُسمح بعدد غير محدود من المحاولات.';
$string['unlocksubmissionforstudent'] = 'إسمح بالتسليمات للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['unlocksubmissions'] = 'إلغاء تأمين التسليمات';
$string['updategrade'] = 'تحديث العلامة';
$string['updatetable'] = 'إحفظ وحدِّث الجدول';
$string['upgradenotimplemented'] = 'الترقية غير مطبقة في الملحق ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'تم منح التمديد حتى: {$a}';
$string['usergrade'] = 'علامة المستخدم';
$string['useridlistnotcached'] = 'تغييرات العلامة لم يتم حفظها، نظراً لتعذر تحديد التسليم الذي كانت مقصودة له.';
$string['userswhoneedtosubmit'] = 'المستخدمون الذين عليهم التسليم: {$a}';
$string['validmarkingworkflowstates'] = 'حالات سير عمل التصحيح الصحيحة';
$string['viewbatchmarkingallocation'] = 'معاينة صفحة تعيين التصحيح بالجملة.';
$string['viewbatchsetmarkingworkflowstate'] = 'معاينة صفحة تعيين حالة سير عمل التصحيح بالجملة.';
$string['viewfeedback'] = 'معاينة الإفادة';
$string['viewfeedbackforuser'] = 'معاينة الإفادة للمستخدم: {$a}';
$string['viewfull'] = 'معاينة الكل';
$string['viewfullgradingpage'] = 'إفتح صفحة التقييم الكاملة لوضع الإفادات';
$string['viewgradebook'] = 'شاهد سجل درجات';
$string['viewgrading'] = 'معاينة/تقييم كل التسليمات';
$string['viewgradingformforstudent'] = 'معاينة صفحة التقييم للطالب: (المُعرَّف={$a->id}، الاسم الكامل={$a->fullname}).';
$string['viewownsubmissionform'] = 'معاينة صفحة تسليم الوظيفة الشخصية';
$string['viewownsubmissionstatus'] = 'معاينة صفحة حالة التسليم الشخصية';
$string['viewrevealidentitiesconfirm'] = 'معاينة صفحة تأكيد كشف هويات الطلاب.';
$string['viewsubmission'] = 'معاينة التسليم';
$string['viewsubmissionforuser'] = 'معاينة التسليم للمستخدم: {$a}';
$string['viewsubmissiongradingtable'] = 'معاينة جدول تقييم التسليم.';
$string['viewsummary'] = 'معاينة الملخص';
$string['workflowfilter'] = 'مرشِّح سير العمل';
