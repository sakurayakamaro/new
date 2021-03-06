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
 * Strings for component 'workshop', language 'ar', version '2.9'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'أعد احتساب العلامات';
$string['aggregation'] = 'تجميع العلامات';
$string['allocate'] = 'وزِّع التسليمات';
$string['allocatedetails'] = 'متوقع: {$a->expected}<br />مسلَّم: {$a->submitted}<br />ليوزَّع: {$a->allocate}';
$string['allocation'] = 'توزيع التسليم';
$string['allocationconfigured'] = 'تم توزيع التسليم';
$string['allocationdone'] = 'تم التوزيع';
$string['allocationerror'] = 'خطأ في التوزيع';
$string['allsubmissions'] = 'جميع التسليمات ({$a})';
$string['alreadygraded'] = 'مقيَّم سلفاً';
$string['areaconclusion'] = 'نص الاستنتاج';
$string['areainstructauthors'] = 'تعليمات التسليم';
$string['areainstructreviewers'] = 'تعليمات التقييم';
$string['areaoverallfeedbackattachment'] = 'مرفقات الإفادة الشاملة';
$string['areaoverallfeedbackcontent'] = 'نصوص الإفادة الشاملة';
$string['areasubmissionattachment'] = 'مرفقات التسليم';
$string['areasubmissioncontent'] = 'نصوص التسليم';
$string['assess'] = 'قيِّم';
$string['assessedexample'] = 'التسليم النموذجي المُقيَّم';
$string['assessedsubmission'] = 'التسليم المُقيَّم';
$string['assessingexample'] = 'يجري تقييم التسليم النموذجي';
$string['assessingsubmission'] = 'يجري تقييم التسليم';
$string['assessment'] = 'تقييم';
$string['assessmentby'] = 'بواسطة <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'التقييم من قِبل {$a}';
$string['assessmentbyyourself'] = 'تقييمك';
$string['assessmentdeleted'] = 'أُلغيَ توزيع التقييم';
$string['assessmentend'] = 'الموعد النهائي للتقييم';
$string['assessmentendbeforestart'] = 'لا يمكن جعل الموعد النهائي للتقييم قبل تاريخ فتحه';
$string['assessmentenddatetime'] = 'الموعد النهائي للتقييم: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} الموعد النهائي للتقييم';
$string['assessmentform'] = 'نموذج التقييم';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">تقييم</a> <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'التقييم المرجعي';
$string['assessmentreferenceconflict'] = 'من غير الممكن تقييم التسليم النموذجي الذي أعطيتَ له تقييماً مرجعياً.';
$string['assessmentreferenceneeded'] = 'عليك تقييم التسليم النموذجي هذا لتعطي تقييماً مرجعياً. أنقر زر \'استمر\' لتقييم التسليم.';
$string['assessmentsettings'] = 'إعدادات التقييم';
$string['assessmentstart'] = 'إفتح التقييم من';
$string['assessmentstartdatetime'] = 'إفتح التقييم من {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} يُفتح للتقييم من';
$string['assessmentweight'] = 'وزن التقييم';
$string['assignedassessments'] = 'التسليمات المعينة لغرض تقييمات';
$string['assignedassessmentsnone'] = 'ليست هناك تسليمات معينة لك لتقييمها';
$string['backtoeditform'] = 'عودة إلى نموذج التحرير';
$string['byfullname'] = 'من قِبَل <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'إحسب علامات التقييم';
$string['calculategradinggradesdetails'] = 'المتوقعة: {$a->expected}<br />المحتسبة: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'إحسب علامات التقييم';
$string['calculatesubmissiongradesdetails'] = 'المتوقعة: {$a->expected}<br />المحتسبة: {$a->calculated}';
$string['chooseuser'] = 'إختر المستخدم...';
$string['clearaggregatedgrades'] = 'أخلِ كل العلامات المجمعة';
$string['clearaggregatedgrades_help'] = 'العلامات المجمعة للتسليمات وعلامات التقييمات سيتم إعادة تعيينها. يمكنك إعادة إحتسابها من الصفر مرة أخرى في طور تقييم العلامات.';
$string['clearaggregatedgradesconfirm'] = 'هل أنت متأكد من رغبتك في إخلاء العلامات المجمعة للتسليمات وعلامات التقييمات؟';
$string['clearassessments'] = 'إخلاء التقييمات';
$string['clearassessments_help'] = 'العلامات المحتسبة للتسليمات وعلامات التقييمات سيتم إعادة تعيينها. المعلومات المتعلقة بكيفية ملء نماذج التقييم بقيت على حالها، ولكن على جميع المقيمين فتح نموذج التقييم مجدداً ثم إعادة حفظه للحصول على إحتساب جديد للعلامات المعطاة.';
$string['clearassessmentsconfirm'] = 'هل أنت متأكد من رغبتك في إخلاء كل علامات التقييم؟';
$string['conclusion'] = 'الاستنتاج';
$string['conclusion_help'] = 'يتم عرض نص الاستنتاج إلى المشاركين عند انتهاء النشاط.';
$string['configexamplesmode'] = 'النمط الافتراضي لتقييم الأمثلة في ورش العمل';
$string['configgrade'] = 'العلامة العظمى الافتراضية للتسليم في ورش العمل';
$string['configgradedecimals'] = 'أقصى عدد من المراتب التي ينبغي إظهارها بعد الفارزة العشرية عند عرض الدرجات.';
$string['configgradinggrade'] = 'العلامة العظمى الافتراضية للتقييم في ورش العمل';
$string['configmaxbytes'] = 'أقصى حجم ملف إفتراضياً للتسليم في كل ورش العمل في الموقع (عرضة لحدوده في المقرر الدراسي وغيره من الإعدادات المحلية)';
$string['configstrategy'] = 'الاستراتيجية الافتراضية لمنح العلامات لورش العمل';
$string['createsubmission'] = 'أضف تسليماً';
$string['daysago'] = '{$a} يوماً مضت';
$string['daysleft'] = '{$a} يوماً بقيت';
$string['daystoday'] = 'هذا اليوم';
$string['daystomorrow'] = 'غداً';
$string['daysyesterday'] = 'البارحة';
$string['deadlinesignored'] = 'تقييدات الوقت لا تنطبق عليك';
$string['editassessmentform'] = 'تحرير نموذج التقييم';
$string['editassessmentformstrategy'] = 'تحرير نموذج التقييم ({$a})';
$string['editingassessmentform'] = 'يجري تحرير نموذج التقييم';
$string['editingsubmission'] = 'يجري تحرير التسليم';
$string['editsubmission'] = 'تحرير التسليم';
$string['err_multiplesubmissions'] = 'في أثناء تحرير هذا النموذج، تم حفظ نسخة أخرى من التسليم. التسليمات المتعددة من قبل المستخدم غير مسموح بها.';
$string['err_removegrademappings'] = 'تعذرت إزالة تعيينات العلامة غير المستعملة';
$string['evaluategradeswait'] = 'لطفاً، إنتظر ريثما يتم تقييم التقييمات واحتساب العلامات';
$string['evaluation'] = 'تقييم منح العلامة';
$string['evaluationmethod'] = 'طريقة تقييم منح العلامة';
$string['evaluationmethod_help'] = 'طريقة تقييم منح العلامات تحدد كيفية إحتساب علامة التقييم. يمكنك جعلها تعيد إحتساب العلامات مراراً مع إعدادات مختلفة ما لم تكن راضياً عن النتائج.';
$string['evaluationsettings'] = 'إعدادات تقييم منح العلامات';
$string['eventassessableuploaded'] = 'لقد تم رفع تسليم.';
$string['eventassessmentevaluated'] = 'تم تقييم التقييم';
$string['eventassessmentevaluationsreset'] = 'إعادة تعيين تقييمات التقييم';
$string['eventassessmentreevaluated'] = 'تمت إعادة تقييم التقييم';
$string['eventphaseswitched'] = 'تم تحويل الطور';
$string['eventsubmissionassessed'] = 'تم تقييم التسليم';
$string['eventsubmissionassessmentsreset'] = 'تم إخلاء تقييمات التسليم';
$string['eventsubmissioncreated'] = 'تم إنشاء التسليم';
$string['eventsubmissionreassessed'] = 'تمت إعادة تقييم التسليم';
$string['eventsubmissionupdated'] = 'تم تحديث التسليم';
$string['eventsubmissionviewed'] = 'تمت معاينة التسليم';
$string['example'] = 'التسليم النموذجي';
$string['exampleadd'] = 'أضف تسليماً نموذجياً';
$string['exampleassess'] = 'قيِّم التسليم النموذجي';
$string['exampleassessments'] = 'التسليمات النموذجية المطلوب تقييمها';
$string['exampleassesstask'] = 'قيِّم النماذج';
$string['exampleassesstaskdetails'] = 'المتوقع: {$a->expected}<br />المقيَّم: {$a->assessed}';
$string['examplecomparing'] = 'قارن تقييمات التسليم النموذجي';
$string['exampledelete'] = 'إحذف النموذج';
$string['exampledeleteconfirm'] = 'هل أنت متأكد من رغبتك في حذف التسليم النموذجي الآتي؟ أنقر زر \'استمر\' لحذف التسليم.';
$string['exampleedit'] = 'تحرير النموذج';
$string['exampleediting'] = 'يجري تحرير النموذج';
$string['exampleneedassessed'] = 'عليك أولاً تقييم كل التسليمات النموذجية';
$string['exampleneedsubmission'] = 'عليك أولاً تسليم عملك وتقييم كل التسليمات النموذجية';
$string['examplesbeforeassessment'] = 'النماذج تتاح للمرء بعد تسليمه وينبغي تقييمها قبل التقييم المناظر';
$string['examplesbeforesubmission'] = 'ينبغي تقييم النماذج قبل قيام المرء بالتسليم';
$string['examplesmode'] = 'نمط تقييم النماذج';
$string['examplesubmissions'] = 'مثال للتسليمات';
$string['examplesvoluntary'] = 'تقييم التسليم النموذجي أمر طوعي';
$string['feedbackauthor'] = 'إفادة موجهة إلى الكاتب';
$string['feedbackauthorattachment'] = 'المرفق';
$string['feedbackby'] = 'إفادة {$a}';
$string['feedbackreviewer'] = 'إفادة موجهة إلى المقيِّم';
$string['feedbacksettings'] = 'اجابة تقييمية';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'العلامات المعطاة';
$string['gradecalculated'] = 'العلامة المحتسبة للتسليم';
$string['gradedecimals'] = 'المنازل العشرية في الدرجات';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'الدرجة: {$a->received} من {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (التقييم)';
$string['gradeitemsubmission'] = '{$a->workshopname} (التسليم)';
$string['gradeover'] = 'تجاوز العلامة للتسليم';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'تقرير علامات ورشة العمل';
$string['gradetopassgrading'] = 'درجة النجاح للتسليم';
$string['gradetopasssubmission'] = 'درجة النجاح للتقييم';
$string['gradinggrade'] = 'الدرجة على التقييم';
$string['gradinggrade_help'] = 'هذا الإعداد يحدد الدرجة العظمى التي يمكن إحرازها لتقييم التسليم.';
$string['gradinggradecalculated'] = 'العلامة المحتسبة للتقييم';
$string['gradinggradeof'] = 'علامة التقييم (من {$a})';
$string['gradinggradeover'] = 'تجاوز العلامة للتقييم';
$string['gradingsettings'] = 'إعدادات منح العلامة';
$string['groupnoallowed'] = 'ليس مسموحاً لك بالوصول إلى أي مجموعة في ورشة العمل هذه';
$string['iamsure'] = 'نعم، أنا متأكد';
$string['info'] = 'المعلومة';
$string['instructauthors'] = 'تعليمات التسليم';
$string['instructreviewers'] = 'تعليمات التقييم';
$string['introduction'] = 'الوصف';
$string['latesubmissions'] = 'التقديمات المتأخرة';
$string['latesubmissions_desc'] = 'إسمح بالتسليمات بعد الموعد النهائي';
$string['latesubmissions_help'] = 'عند تمكينه، يمكن للكاتب تسليم عمله بعد الموعد النهائي للتسليم أو خلال طور التقييم. مع ذلك، التسليمات المتأخرة لا يمكن تحريرها.';
$string['latesubmissionsallowed'] = 'التسليمات المتأخرة مسموح بها';
$string['maxbytes'] = 'أقصى حجم لمرفقات التسليم';
$string['modulename'] = 'ورشة عمل';
$string['modulename_help'] = 'وحدة نشاط ورشة العمل تُمكِّن تجميع، مراجعة وتقييم أعمال الطلاب تقييماً مناظراً.

يمكن للطلبة تسليم أي محتوى رقمي (ملفات)، مثل مستندات معالج النصوص Word أو الجداول، كما يمكنهم أيضاً الطباعة مباشرة في حقل مخصص باستعمال محرر النصوص.

يتم تقييم التسليمات باستعمال نموذج تقييم متعدد المعايير يُعرَّف من قبل المعلم. عملية التقييم المناظر وفهم نموذج التقييم يمكن التمرن عليها مقدماً بواسطة تسليمات نموذجية مقدمة من قبل المعلم يصاحبها تقييم مرجعي. الطلبة تعطى لهم فرصة تقييم واحد أو أكثر من تسليمات نظرائهم. يمكن إخفاء هويات أصحاب التسليمات وكذلك التقييمات إن تطلب الأمر.

يحصل الطلبة على علامتين في نشاط ورشة العمل - علامة على تسليمهم وعلامة أخرى على تقييمهم لتسليمات نظرائهم. العلامتان كلاهما تسجلان في سجل العلامات.';
$string['modulenameplural'] = 'ورش عمل';
$string['mysubmission'] = 'تسليمي';
$string['nattachments'] = 'العدد الأقصى من مرفقات التسليم';
$string['noexamples'] = 'لا نماذج بعد في ورشة العمل هذه';
$string['noexamplesformready'] = 'ينبغي عليك تعريف نموذج التقييم قبل تقديم تسليمات نموذجية';
$string['nogradeyet'] = 'لا علامة بعد';
$string['nosubmissionfound'] = 'لا تسليم لهذا المستخدم';
$string['nosubmissions'] = 'لا تسليمات بعد في ورشة العمل هذه';
$string['notassessed'] = 'غير مقيَّم بعد';
$string['nothingtoreview'] = 'لا شيء لمراجعته';
$string['notoverridden'] = 'غير متجاوز';
$string['noworkshops'] = 'لا توجد ورش عمل في هذا المساق';
$string['noyoursubmission'] = 'لم تقم بتسليم عملك بعد';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'الإفادة الشاملة';
$string['overallfeedbackfiles'] = 'العدد الأقصى لمرفقات الإفادة الشاملة';
$string['overallfeedbackmaxbytes'] = 'أقصى حجم لمرفق الإفادة الشاملة';
$string['overallfeedbackmode'] = 'نمط الإفادة الشاملة';
$string['overallfeedbackmode_0'] = 'مُعطَلة';
$string['overallfeedbackmode_1'] = 'مُمَكَّنة واختيارية';
$string['overallfeedbackmode_2'] = 'مُمَكَّنة وإجبارية';
$string['overallfeedbackmode_help'] = 'عند تمكينها، سيظهر حقل نص أسفل نموذج التقييم. يمكن للمقيمين وضع إفادتهم الشاملة بشأن التسليم هناك، أو تقديم توضيح إضافي عن تقييمهم.';
$string['page-mod-workshop-x'] = 'أي صفحة لوحدة ورشة العمل';
$string['participant'] = 'المشارك';
$string['participantrevierof'] = 'المشارك هو مقيِّم لـ';
$string['participantreviewedby'] = 'المشارك مقيَّم من قبل';
$string['phaseassessment'] = 'طور التقييم';
$string['phaseclosed'] = 'مغلق';
$string['phaseevaluation'] = 'طور تقييم منح العلامات';
$string['phasesetup'] = 'طور الإعداد';
$string['phasesoverlap'] = 'طورا التسليم والتقييم لا يمكن لهما أن يتداخلا';
$string['phasesubmission'] = 'طور التسليم';
$string['pluginadministration'] = 'إدارة ورشة العمل';
$string['pluginname'] = 'ورشة العمل';
$string['prepareexamples'] = 'تحضير تسليمات النماذج';
$string['previewassessmentform'] = 'استعراض';
$string['publishedsubmissions'] = 'التسليمات المنشورة';
$string['publishsubmission'] = 'أنشر التسليمات';
$string['publishsubmission_help'] = 'التسليمات المنشورة متاحة للآخرين عند إغلاق ورشة العمل.';
$string['reassess'] = 'أعد التقييم';
$string['receivedgrades'] = 'العلامات المتلقاة';
$string['recentassessments'] = 'تقييمات ورشة العمل:';
$string['recentsubmissions'] = 'تسليمات ورشة العمل:';
$string['resetassessments'] = 'حذف كل التقييمات';
$string['resetassessments_help'] = 'يمكن اختيار حذف التقييمات الموزعة فقط دون التأثير على التسليمات. إذا كان بالنية حذف التسليمات، فتقييماتها سيتم حذفها ضمنياً وهذا الخيار سيتم تجاهله. لاحظ أن ذلك يشمل أيضاً تقييمات التسليمات النموذجية.';
$string['resetphase'] = 'التبديل إلى طور الإعداد';
$string['resetphase_help'] = 'عند تمكينه، فكل ورش العمل سيتم وضعها في طور الإعداد الأولي.';
$string['resetsubmissions'] = 'حذف كل التسليمات';
$string['resetsubmissions_help'] = 'كل التسليمات وتقييماتها سيتم حذفها. هذا لا يؤثر على التسليمات النموذجية.';
$string['saveandclose'] = 'إحفظ وأغلق';
$string['saveandcontinue'] = 'حفظ ومتابعة التحرير';
$string['saveandpreview'] = 'إحفظ واستعرض';
$string['saveandshownext'] = 'إحفظ وأظهر التالي';
$string['selfassessmentdisabled'] = 'تم تعطيل التقييم الذاتي';
$string['showingperpage'] = 'يجري إظهار {$a} عنصر في الصفحة';
$string['showingperpagechange'] = 'غيِّر ...';
$string['someuserswosubmission'] = 'هناك كاتب واحد على الأقل لم يسلم عمله بعد';
$string['sortasc'] = 'فرز تصاعدي';
$string['sortdesc'] = 'فرز تنازلي';
$string['strategy'] = 'استراتيجية منح العلامة';
$string['strategy_help'] = 'استراتيجية منح العلامة تحدد نموذج التقييم المستعمل وطريقة منح العلامات للتسليمات. هناك 4 خيارات:

* منح العلامات التجميعي - تُمنح التعليقات والعلامة إزاء نواحٍ معينة
* التعليقات - تُمنح التعليقات إزاء نواحٍ معينة ولكن لا يمكن منح العلامات
* عدد الأخطاء - تُمنح التعليقات والتقييم بـ نعم/لا إزاء دوافع معينة
* سلم التقييم - التقييم على أساس المستويات، يعطى وفقاً لمعايير معينة';
$string['strategyhaschanged'] = 'استراتيجية منح العلامة في ورشة العمل قد تغيرت منذ فتح النموذج للتحرير.';
$string['submission'] = 'التسليم';
$string['submissionattachment'] = 'المرفق';
$string['submissionby'] = 'التسليم من قِبل {$a}';
$string['submissioncontent'] = 'محتوى التسليم';
$string['submissionend'] = 'الموعد النهائي للتسليمات';
$string['submissionendbeforestart'] = 'لا يمكن جعل الموعد النهائي للتسليمات قبل تاريخ فتحها';
$string['submissionenddatetime'] = 'الموعد النهائي للتسليمات: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} الموعد النهائي للتسليمات';
$string['submissionendswitch'] = 'تحول إلى الطور التالي بعد الموعد النهائي للتسليمات';
$string['submissionendswitch_help'] = 'إذا تم تحديد الموعد النهائي للتسليمات وهذه الخانة مؤشرة، ستقوم ورسة العمل تلقائياً بالانتقال إلى طور التقييم بعد الموعد النهائي للتسليمات.

إذا قمت بتمكين هذه الميزة، من الموصى به أن تقوم بتهيئة طريقة التوزيع المجدول أيضاً. إذا لم يتم توزيع التسليمات، لا يمكن إجراء أي تقييمات حتى وإن كانت ورشة العمل نفسها في طور التقييم.';
$string['submissiongrade'] = 'علامة التسليم';
$string['submissiongrade_help'] = 'هذا الإعداد يحدد العلامة العظمى التي يمكن إحرازها للعمل المسلم.';
$string['submissiongradeof'] = 'علامة التسليم (من {$a})';
$string['submissionsettings'] = 'إعدادات التسليم';
$string['submissionstart'] = 'قبول التسليمات بدءاً من';
$string['submissionstartdatetime'] = '{$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} يُفتح للتسليمات';
$string['submissiontitle'] = 'العنوان';
$string['subplugintype_workshopallocation'] = 'طريقة توزيع التسليمات';
$string['subplugintype_workshopallocation_plural'] = 'طرق توزيع التسليمات';
$string['subplugintype_workshopeval'] = 'طريقة تقييم منح العلامات';
$string['subplugintype_workshopeval_plural'] = 'طرق تقييم منح العلامات';
$string['subplugintype_workshopform'] = 'استراتيجية منح العلامات';
$string['subplugintype_workshopform_plural'] = 'استراتيجيات منح العلامات';
$string['switchingphase'] = 'يجري تبديل الطور';
$string['switchphase'] = 'تبديل الطور';
$string['switchphase10info'] = 'أنت على وشك تحويل ورشة العمل إلى <strong>طور الإعداد</strong>. في هذا الطور، لا يمكن للمستخدمين تعديل تسليماتهم أو تقييماتهم. قد يستعمل المعلمون هذا الطور لتغيير إعدادات ورشة العمل، تعديل استراتيجية منح العلامات أو يحسنون نماذج التقييم.';
$string['switchphase20info'] = 'أنت على وشك تحويل ورشة العمل إلى <strong>طور التسليم</strong>. يمكن للطلبة تسليم أعمالهم في هذا الطور (ضمن تواريخ التحكم بالتسليم، إن أوجدت). قد يقوم المعلمون بتوزيع التسليمات من أجل التقييم المناظر.';
$string['switchphase30auto'] = 'ستتحول ورشة العمل تلقائياً إلى طور التقييم بعد {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'أنت على وشك تحويل ورشة العمل إلى <strong>طور التقييم</strong>. في هذا الطور، قد يقوم المقيمون بتقييم التسليمات التي وُزِّعت عليهم (ضمن تواريخ التحكم بالتقييمات، إن أوجدت).';
$string['switchphase40info'] = 'أنت على وشك تحويل ورشة العمل إلى <strong>طور تقييم منح العلامات</strong>. في هذا الطور، لا يمكن للمستخدمين تعديل تسليماتهم أو تقييماتهم. قد يستعمل المعلمون أدوات تقييم منح العلامات لاحتساب الدرجات النهائية وتقديم الإفادات للمقيمين.';
$string['switchphase50info'] = 'أنت على وشك إغلاق ورشة العمل. هذا سيؤدي إلى إظهار الدرجات المحتسبة في سجل التقديرات. يمكن للطلبة معاينة تسليماتهم وتقييماتهم لتلك التسليمات.';
$string['taskassesspeers'] = 'قيِّم المناظرين';
$string['taskassesspeersdetails'] = 'الإجمالي: {$a->total}<br />قيد الانتظار: {$a->todo}';
$string['taskassessself'] = 'قيِّم نفسك';
$string['taskconclusion'] = 'أعطِ استنتاجاً عن النشاط';
$string['taskinstructauthors'] = 'أعط تعليمات عن التسليم';
$string['taskinstructreviewers'] = 'أعط تعليمات عن التقييم';
$string['taskintro'] = 'ضع وصف ورشة العمل';
$string['tasksubmit'] = 'قم بتسليم عملك';
$string['toolbox'] = 'أدوات ورشة العمل';
$string['undersetup'] = 'ورشة العمل حالياً هي قيد الإعداد. إنتظر لطفاً حتى تتحول إلى الطور التالي.';
$string['useexamples'] = 'استعمل نماذج';
$string['useexamples_desc'] = 'التسليمات النموذجية تُقدم للتدريب على التقييم';
$string['useexamples_help'] = 'عند تمكينه، يمكن للمستخدمين محاولة تقييم تسليم نموذجي واحد أو أكثر ومقارنة تقييماتهم بتقييم مرجعي. لا يتم احتساب العلامة الممنوحة على التقييم.';
$string['usepeerassessment'] = 'استعمل التقييم المناظر';
$string['usepeerassessment_desc'] = 'يمكن للطلبة تقييم أعمال الآخرين';
$string['usepeerassessment_help'] = 'عند تمكينه، يمكن للمستخدمين أن توزع عليهم أعمال الآخرين لتقييمها، وسيتلقون درجات إضافية على تقييماتهم هذه فضلاً عن الدرجات الخاصة بتسليماتهم.';
$string['userdatecreated'] = 'مُسَلَّمة في <span>{$a}</span>';
$string['userdatemodified'] = 'معدلة في <span>{$a}</span>';
$string['userplan'] = 'مخطط ورشة العمل';
$string['userplan_help'] = 'يعرض مخطط ورشة العمل كل أطوار النشاط ويدرج مهام كل منها. الطور الحالي مُبَرَّز وإكمال المهمة مؤشر بعلامة.';
$string['useselfassessment'] = 'استعمل التقييم الذاتي';
$string['useselfassessment_desc'] = 'يمكن للطلبة تقييم أعمالهم الذاتية';
$string['useselfassessment_help'] = 'عند تمكينه، سيكون بالإمكان توزيع التسليم على نفس المستخدم المقدِّم له لغرض تقييمه وسيتلقى علامة على ذلك فضلاً عن العلامة الممنوحة له على تسليمه.';
$string['weightinfo'] = 'الوزن: {$a}';
$string['withoutsubmission'] = 'مُقَيِّم بدون تسليم خاص به';
$string['workshop:addinstance'] = 'إضافة ورشة عمل جديدة';
$string['workshop:allocate'] = 'توزيع التسليمات بغرض التقييم';
$string['workshop:editdimensions'] = 'تحرير نماذج التقييم';
$string['workshop:ignoredeadlines'] = 'تجاهل تقييدات الوقت';
$string['workshop:manageexamples'] = 'إدارة التسليمات النموذجية';
$string['workshop:overridegrades'] = 'تجاوز العلامات المحتسبة';
$string['workshop:peerassess'] = 'التقييم المناظر';
$string['workshop:publishsubmissions'] = 'نشر التسليمات';
$string['workshop:submit'] = 'التسليم';
$string['workshop:switchphase'] = 'تحويل الطور';
$string['workshop:view'] = 'معاينة ورشة العمل';
$string['workshop:viewallassessments'] = 'معاينة كل التقييمات';
$string['workshop:viewallsubmissions'] = 'معاينة كل التسليمات';
$string['workshop:viewauthornames'] = 'معاينة أسماء الكُتَّاب';
$string['workshop:viewauthorpublished'] = 'معاينة كُتَّاب التسليمات المنشورة';
$string['workshop:viewpublishedsubmissions'] = 'معاينة التسليمات المنشورة';
$string['workshop:viewreviewernames'] = 'معاينة أسماء المُقيِّمين';
$string['workshopname'] = 'اسم ورشة العمل';
$string['yourgrades'] = 'علاماتك';
$string['yoursubmission'] = 'تسليمك';
