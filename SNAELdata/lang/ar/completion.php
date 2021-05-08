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
 * Strings for component 'completion', language 'ar', version '2.9'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'تحقيق الدرجة';
$string['activities'] = 'الأنشطة';
$string['activitiescompleted'] = 'إكمال الأنشطة';
$string['activitiescompletednote'] = 'ملاحظة: يجب ضبط اكتمال النشاط حتى يظهر النشاط في القائمة أعلاه.';
$string['activityaggregation'] = 'يتطلب شرط';
$string['activityaggregation_all'] = 'جميع الأنشطة المحددة التي يتعين إكمالها';
$string['activityaggregation_any'] = 'أي أنشطة محددة يتم إكمالها';
$string['activitycompletion'] = 'إكتمال النشاط';
$string['aggregationmethod'] = 'أسلوب التجميع';
$string['all'] = 'كل';
$string['any'] = 'أي';
$string['approval'] = 'موافقة';
$string['badautocompletion'] = 'عندما تختار الإكمال التلقائي، يجب أن تقوم بتفعيل واحد على الأقل من المتطلبات (في الأسفل).';
$string['completed'] = 'منتهٍ';
$string['completedunlocked'] = 'خيارات الإكمال غير مؤمنة';
$string['completedunlockedtext'] = 'عندما تقوم بحفظ التغييرات، سيتم محي وضع الإكامل لكافة الطلاب. إذا غيرت رأيك حول الموضوع، لا تقم بحفظ النموذج.';
$string['completedwarning'] = 'خيارات الإكمال مؤمنة';
$string['completedwarningtext'] = 'تم تأشير هذا النشاط على أنه مكتمل عند {$a} مشارك/مشاركين. سيؤدي تغيير خيارات الإكمال إلى محو حالة إكمالهم مما قد يسبب إرباكاً. لذا تم قفل هذا الخيار وينبغي إبقاؤه كذلك ما لم يكن ذلك ضرورياً تماماً.';
$string['completion'] = 'تتبع الإكمال';
$string['completion-alt-auto-enabled'] = 'قام النظام باعتبار هذا العنصر مكتملاً وفقاً للشروط: {$a}';
$string['completion-alt-auto-fail'] = 'مكتمل: {$a} (درجة النجاح لم تتحقق)';
$string['completion-alt-auto-n'] = 'غير مكتمل: {$a}';
$string['completion-alt-auto-pass'] = 'مكتمل: {$a} (درجة النجاح تحققت)';
$string['completion-alt-auto-y'] = 'مكتمل: {$a}';
$string['completion-alt-manual-enabled'] = 'يمكن للطلاب تأشير هذا العنصر مكتملاً: {$a}';
$string['completion-alt-manual-n'] = 'غير مكتمل: {$a}. حدد لجعله مكتملاً.';
$string['completion-alt-manual-y'] = 'مكتمل: {$a}. حدد لجعله غير مكتمل.';
$string['completion-fail'] = 'اكتمل ( لم يحقق درجة النجاح )';
$string['completion-n'] = 'لم يكتمل';
$string['completion-pass'] = 'اكتمل (حقق درجة النجاح)';
$string['completion-title-manual-n'] = 'علّمه بأنه مكتمل';
$string['completion-title-manual-y'] = 'علّمه بأنه غير مكتمل';
$string['completion-y'] = 'اكتمل';
$string['completion_automatic'] = 'إظهار النشاط كمكتمل عند تحقق الشروط';
$string['completion_help'] = 'عند تفعيله، يتم تتبع إكمال النشاط يدوياً أو تلقائياً، وذلك اعتماداً على شروط معينة. يمكن وضع عدة شروط حسب الرغبة. عندها، لا يعتبر النشاط مكتملاً إلا عند تحقق جميع تلك الشروط.

تشير العلامة الموضوعة بجانب اسم النشاط في صفحة المساق إلى حالة إكتماله.';
$string['completion_manual'] = 'يمكن للطلاب يدوياً تعليم النشاط على أنه مكتمل';
$string['completion_none'] = 'لا تقم بالإشارة إلى إكتمال النشاط';
$string['completionactivitydefault'] = 'استخدم النشاط الافتراضي';
$string['completiondefault'] = 'تتبع الإنجاز الافتراضي';
$string['completiondisabled'] = 'غير مفعّل، لا يظهر في إعدادات النشاط';
$string['completionduration'] = 'التحاق';
$string['completionenabled'] = 'مفعّل، يتم ضبطة من إعدادات النشاط والإكمال';
$string['completionexpected'] = 'من المتوقع الإكمال في';
$string['completionexpected_help'] = 'هذا الإعداد يحدد التاريخ المتوقع إكمال هذا النشاط عنده. لا يظهر هذا التاريخ للطلاب بل يظهر فقط في تقرير إكمال النشاط.';
$string['completionicons'] = 'مربعات علامة الإكمال';
$string['completionicons_help'] = 'يمكن وضع علامة بجانب اسم النشاط تشير إلى متى يكتمل النشاط.

عند عرض علامة منقطة، يمكنك النقر عليها لتعليم المربع والإشارة إلى أنك أكملت النشاط. (نقرها مرة أخرى يزيل العلامة إذا غيرت رأيك.) هذه العلامة اختيارية وهي طريقة بسيطة في تتبع تقدمك في المقرر.

عند عرض مربع فارغ، ستظهر عليه العلامة تلقائياً عند إكمالك للنشاط وفقط الشروط التي وضعها المدرس.';
$string['completionmenuitem'] = 'الإكمال';
$string['completionnotenabled'] = 'خاصية اتمام المقرر الدراسي غير مفعلة';
$string['completionnotenabledforcourse'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  المقرر الدراسي';
$string['completionnotenabledforsite'] = 'خاصية اتمام المقرر الدراسي غير مفعلة في هذا  الموقع';
$string['completionondate'] = 'التاريخ';
$string['completionondatevalue'] = 'التاريخ الذي سيتم عنده اعتبار المساق مكتملاً';
$string['completionsettingslocked'] = 'إعدادات الإكمال مؤمنة';
$string['completionusegrade'] = 'يتطلب الحصول على علامة';
$string['completionusegrade_desc'] = 'يجب أن يحصل الطالب على علامة لكي يستطيع إكمال هذا النشاط';
$string['completionusegrade_help'] = 'عند التفعيل، يعتبر النشاط مكتملاً عندما يحصل الطالب على العلامة. وتظهر أيقونات النجاح والرسوب إذا تم وضع علامة نجاح للنشاط.';
$string['completionview'] = 'الاستعراض مطلوب';
$string['completionview_desc'] = 'يجب على الطلاب استعراض هذا النشاط لإكماله';
$string['configcompletiondefault'] = 'الإعداد الافتراضي لتتبع الإكمال عند إنشاء أنشطة جديدة.';
$string['configenablecompletion'] = 'عند التفعيل، بيمح لك هذا بتشغيل مزايا تتبع الإكمال (التقدم) على مستوى المقرر.';
$string['confirmselfcompletion'] = 'تأكيد الإكمال الذاتي';
$string['courseaggregation'] = 'يتطلب شرط';
$string['courseaggregation_all'] = 'جميع الدورات المحددة لاستكمالها';
$string['courseaggregation_any'] = 'أي مادة مختارة لإكمالها';
$string['coursealreadycompleted'] = 'لقد اتممت هذا المقرر الدراسي';
$string['coursecomplete'] = 'اكتمل المقرر';
$string['coursecompleted'] = 'المقرر مكتمل';
$string['coursecompletion'] = 'إتمام مقرر دراسي';
$string['coursecompletioncondition'] = 'الشرط: {$a}';
$string['coursegrade'] = 'علامة المساق';
$string['coursesavailable'] = 'المقررات المتوافرة';
$string['coursesavailableexplaination'] = 'ملاحظة: ينبغي وضع شروط إكمال المساق ليتسنى عرضه ضمن القائمة أعلاه.';
$string['criteria'] = 'معايير';
$string['criteriagroup'] = 'مجموعة المعايير';
$string['criteriarequiredall'] = 'كل المعايير في الأسفل مطلوبة';
$string['criteriarequiredany'] = 'أي معيار في الأسفل مطلوب';
$string['csvdownload'] = 'التنزيل بصيغة جدول (UTF-8 .csv)';
$string['datepassed'] = 'jadv';
$string['days'] = 'أيام';
$string['daysoftotal'] = '{$a->days}  من {$a->total}';
$string['deletecompletiondata'] = 'احذف بيانات الإكمال';
$string['dependencies'] = 'تبعيات';
$string['dependenciescompleted'] = 'التبعيات اكتملت';
$string['editcoursecompletionsettings'] = 'تحرير إعدادات إكمال المقرر الدراسي';
$string['enablecompletion'] = 'تفعيل تتبع الإكمال';
$string['enablecompletion_help'] = 'في حالة التمكين ، قد يتم تعيين شروط إكمال النشاط في إعدادات النشاط و / أو قد يتم تعيين شروط إكمال المادة.
يوصى بتمكين هذا حتى يتم عرض بيانات ذات معنى في نظرة عامة على المقرر على لوحة القيادة.';
$string['enrolmentduration'] = 'مدة الانضمام';
$string['enrolmentdurationlength'] = 'يجب أن يظل المستخدم ملتحقاً في';
$string['err_noactivities'] = 'خيارات الإكمال غير مفعّلة لأي من النشاطات، لذا لا يمكن عرض أي منها. يمكنك تفعيل معلومات الإكمال عبر تحرير إعدادات النشاط.';
$string['err_nocourses'] = 'خيارات الإكمال غير مُمَكَّنة لأي من المساقات الأخرى، لذا لا يمكن عرض أي منها. يمكنك تمكين إكمال المساق من إعداداته.';
$string['err_nograde'] = 'لم يتم وضع علامة نجاح لهذا المقرر. يجب عليك إنشاء علامة نجاح لهذا المقرر لتفعيل هذا النوع من المعايير.';
$string['err_noroles'] = 'لا توجد هناك أدوار تمتلك إمكانية \'moodle/course:markcomplete\' في هذا المساق.';
$string['err_nousers'] = 'لا يوجد طلاب في هذا المقرر أو المجموعة ليتم عرض معلومات إكمالهم. (افتراضياً، يتم عرض معلومات الإكمال للطلاب فقط، لذا إن لم يكن هناك طلاب سترى هذا الخطأ. يمكن للمدراء تعديل هذا الخيار عبر لوحة الإدارة)';
$string['err_settingslocked'] = 'لقد قام طالب أو أكثر بإكمال المعايير، لذلك تم قفل الإعدادات. إلغاء قفل إعدادات ومعايير الإكمال سيؤدي إلى حذف أي بيانات موجودة للمستخدمين مما قد يسبب الإرباك.';
$string['err_system'] = 'حدث خطأ داخلي في نظام الإكمال. (يمكن لمديري النظام تفعيل معلومات التنقيح لمزيد من المعلومات.)';
$string['eventcoursecompleted'] = 'اكتملت المادة';
$string['eventcoursecompletionupdated'] = 'تحديث استكمال المادة';
$string['eventcoursemodulecompletionupdated'] = 'تحديث استكمال نشاط المادة';
$string['excelcsvdownload'] = 'التنزيل بصيغة متوافقة مع Excel (.csv)';
$string['fraction'] = 'جزء';
$string['graderequired'] = 'يتطلب علامة المساق';
$string['gradexrequired'] = 'مطلوب {$a}';
$string['inprogress'] = 'قيد التنفيذ';
$string['manualcompletionby'] = 'إكمال يدوي من قبل آخرين';
$string['manualcompletionbynote'] = 'ملاحظة: يجب تمكين moodle / course: markcomplete حتى يظهر دور في القائمة.';
$string['manualselfcompletion'] = 'إكمال يدوي ذاتي';
$string['manualselfcompletionnote'] = 'ملاحظة: يجب إضافة كتلة الإكمال الذاتي إلى المادة إذا تم تمكين الإكمال الذاتي اليدوي.';
$string['markcomplete'] = 'علّمه بأنه مكتمل';
$string['markedcompleteby'] = 'علّمه {$a} بأنه مكتمل';
$string['markingyourselfcomplete'] = 'اعتبار نفسك منتهياً (مكملاً)';
$string['moredetails'] = 'المزيد من التفاصيل';
$string['nocriteriaset'] = 'لم يتم إعداد معايير محددة لإكمال هذا المقرر الدراسي';
$string['notcompleted'] = 'غير مكتمل';
$string['notenroled'] = 'لستَ منضماً إلى هذا المساق';
$string['nottracked'] = 'لا يتم متابعتك حاليًا من خلال إكمال هذه المادة';
$string['notyetstarted'] = 'لم يبدأ بعد';
$string['overallaggregation'] = 'متطلبات الإكمال';
$string['overallaggregation_all'] = 'اكتمال المادة عند استيفاء جميع الشروط';
$string['overallaggregation_any'] = 'اكتمال المادة عندما يتم استيفاء أيّ من الشروط';
$string['pending'] = 'معلق';
$string['periodpostenrolment'] = 'الفترة ما بعد التسجيل';
$string['progress'] = 'تقدّم الطالب';
$string['progress-title'] = '{$a->user}، {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'التقدم: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'تمييز التعلم السابق';
$string['remainingenroledfortime'] = 'البقاء منضماً للمدة الزمنية المحددة';
$string['remainingenroleduntildate'] = 'ابق مسجلاً حتى التاريخ المحدد';
$string['reportpage'] = 'عرض المستخدمين من {$a->from} إلى {$a->to} من أصل {$a->total}';
$string['requiredcriteria'] = 'المعايير المطلوبة';
$string['restoringcompletiondata'] = 'كتابة بيانات الإكمال';
$string['roleaggregation'] = 'يتطلب شرط';
$string['roleaggregation_all'] = 'جميع الأدوار المحددة لتمييزها عند استيفاء الشرط';
$string['roleaggregation_any'] = 'أي أدوار محددة لتمييزها عند استيفاء الشرط';
$string['roleidnotfound'] = 'لم يتم العثور على معرف الدور {$a}';
$string['saved'] = 'تم الحفظ';
$string['seedetails'] = 'مشاهدة التفاصيل';
$string['self'] = 'ذاتي';
$string['selfcompletion'] = 'إكمال ذاتي';
$string['showinguser'] = 'عرض المستخدم';
$string['unenrolingfromcourse'] = 'إلغاء الانضمام إلى المساق';
$string['unenrolment'] = 'إلغاء الانضمام';
$string['unit'] = 'الوحدة';
$string['unlockcompletion'] = 'إلغاء قفل خيارات الإكمال';
$string['unlockcompletiondelete'] = 'إلغاء قفل خيارات الإكمال وحذف بيانات إكمال المستخدم';
$string['usealternateselector'] = 'استخدم محدد المقرر البديل';
$string['usernotenroled'] = 'المستخدم غير منضم إلى هذا المساق';
$string['viewcoursereport'] = 'عرض تقرير المقرر';
$string['viewingactivity'] = 'عرض {$a}';
$string['writingcompletiondata'] = 'كتابة بيانات الإكمال';
$string['xdays'] = '{$a}من الأيام';
$string['yourprogress'] = 'تقدمك';
