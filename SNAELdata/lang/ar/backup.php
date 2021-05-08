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
 * Strings for component 'backup', language 'ar', version '2.9'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'قم باختيار ما إذا أردت استخدام عمل نسخ احتياطي ألياً أو يدوياً. إذا تم اختيار النسخ الاحتياطي اليدوي ، فالنسخ الاحتياطي الآلي لن يكون ممكناً إلا من خلال النص البرمجي للنسخ الاحتياطي والذي يتم تنفيذه من واجهة سطر الأوامر (CLI) . ويمكن التنفيذ إما يدوياً أو من خلال الملف الدوري Cron.';
$string['autoactivedisabled'] = 'معطل';
$string['autoactiveenabled'] = 'مفعل';
$string['autoactivemanual'] = 'يدوي';
$string['automatedbackupschedule'] = 'مجدول';
$string['automatedbackupschedulehelp'] = 'إختر أيام الأسبوع التي يتم فيها تشغيل الحفظ الاحتياطي التلقائي.';
$string['automatedbackupsinactive'] = 'لم يتم تمكين الحفظ الاحتياطي التلقائي من قِبَل مشرف الموقع';
$string['automatedbackupstatus'] = 'حالة الحفظ الاحتياطي التلقائي';
$string['automatedsettings'] = 'إعدادات الحفظ الاحتياطي التلقائي';
$string['automatedsetup'] = 'تهيئة الحفظ الاحتياطي التلقائي';
$string['automatedstorage'] = 'مخزن الحفظ الاحتياطي التلقائي';
$string['automatedstoragehelp'] = 'إختر الموضع الذي تريد استعماله لتخزين نسخ الحفظ الاحتياطي المنشأة تلقائياً.';
$string['backupactivity'] = 'نسخة احتياطية للنشاط: {$a}';
$string['backupcourse'] = 'الحفظ الاحتياطي للمساق: {$a}';
$string['backupcoursedetails'] = 'تفاصيل المقرر';
$string['backupcoursesection'] = 'القسم: {$a}';
$string['backupcoursesections'] = 'أقسام المقرر';
$string['backupdate'] = 'التاريخ مأخوذ';
$string['backupdetails'] = 'تفاصيل النسخة الاحتياطية';
$string['backupdetailsnonstandardinfo'] = 'الملف المُحدَّد ليس  بالشكل المعياري المقبول لملف النسخ الاحتياطي لمودل.عملية الاستعادة ستقوم بمحاوبة تحويل الملف للشكل المعياري للنسخ الاحتياطي و ثم سيتم استرجاعه بعد نجاح العملية';
$string['backupformat'] = 'تنسيق';
$string['backupformatimscc1'] = 'لفيفة IMS عامة 1.0';
$string['backupformatimscc11'] = 'لفيفة IMS عامة 1.1';
$string['backupformatmoodle1'] = 'مودل 1';
$string['backupformatmoodle2'] = 'مودل 2';
$string['backupformatunknown'] = 'تنسيق غير معروف';
$string['backuplog'] = 'المعلومات التقنية والتحذيرات';
$string['backupmode'] = 'نسق';
$string['backupmode10'] = 'عام';
$string['backupmode20'] = 'إستيراد';
$string['backupmode30'] = 'محور';
$string['backupmode40'] = 'نفس الموقع';
$string['backupmode50'] = 'مُؤتمت';
$string['backupmode60'] = 'تم التحويل';
$string['backupsection'] = 'الحفظ الاحتياطي لمقطع المساق: {$a}';
$string['backupsettings'] = 'إعدادات الحفظ الاحتياطي';
$string['backupsitedetails'] = 'تفاصيل الموقع';
$string['backupstage16action'] = 'استمرار';
$string['backupstage1action'] = 'التالي';
$string['backupstage2action'] = 'التالي';
$string['backupstage4action'] = 'تنفيذ الحفظ الاحتياطي';
$string['backupstage8action'] = 'استمرار';
$string['backuptype'] = 'نوع';
$string['backuptypeactivity'] = 'نشاط';
$string['backuptypecourse'] = 'مقرر دراسي';
$string['backuptypesection'] = 'قسم';
$string['backupversion'] = 'إصدار النسخة الاحتياطية';
$string['cannotfindassignablerole'] = 'دور الـ{$a}  في النسخة الاحتياطية لا يمكن ربطها بأي من الأدوار المسموح لك بتعيينها';
$string['choosefilefromactivitybackup'] = 'مساحة الحفظ الاحتياطي للنشاط';
$string['choosefilefromactivitybackup_help'] = 'عندما تستخدم نشاطات نسخ الاحتياط الإعدادات التلقائية, ملفات نسخ الاحتياط ستخزن هنا';
$string['choosefilefromautomatedbackup'] = 'نُسخ الحفظ الاحتياطي التلقائي';
$string['choosefilefromautomatedbackup_help'] = 'يحتوي على نُسخ الحفظ الاحتياطي المنشأة تلقائياً';
$string['choosefilefromcoursebackup'] = 'مساحة الحفظ الاحتياطي للمساق';
$string['choosefilefromcoursebackup_help'] = 'عندما تستخدم نشاطات نسخ الاحتياط الإعدادات التلقائية, ملفات نسخ الاحتياط ستخزن هنا';
$string['choosefilefromuserbackup'] = 'مساحة الحفظ الاحتياطي الخاصة بالمستخدم';
$string['choosefilefromuserbackup_help'] = 'يتم تخزين ملفات الحفظ الاحتياطي التي تم حفظها بلا معلومات المُستخدمين هنا.';
$string['configgeneralactivities'] = 'يحدد الوضع الافتراضي لتضمين الأنشطة في الحفظ الاحتياطي.';
$string['configgeneralanonymize'] = 'في حالة التمكين ستصبح المعلومات الخاصة المستخدمين مجهولة افتراضيا';
$string['configgeneralbadges'] = 'لتعيين الإعداد الافتراضي لتضمين الشارات في نسخة احتياطية.';
$string['configgeneralblocks'] = 'يضبط الوضع الافتراضي لتضمين الكتل في الحفظ الاحتياطي.';
$string['configgeneralcomments'] = 'يحدد الوضع الافتراضي لتضمين التعليقات في الحفظ الاحتياطي.';
$string['configgeneralfilters'] = 'يحدد الوضع الافتراضي لتضمين المرشحات في الحفظ الاحتياطي.';
$string['configgeneralgroups'] = 'يضبط الوضع الافتراضي لتضمين المجموعات والتجميعات في الحفظ الاحتياطي.';
$string['configgeneralhistories'] = 'يحدد الوضع الافتراضي لتضمين ماضي المستخدمين في الحفظ الاحتياطي.';
$string['configgenerallogs'] = 'في حالة التمكين، سيتم تضمن سجلات الوقوعات في الحفظ الاحتياطي إفتراضياً';
$string['configgeneralquestionbank'] = 'إذا تم تمكين بنك الأسئلة ، فسيتم تضمينه في النُسخ الاحتياطية بشكل افتراضي. الرجاء ملاحظة: سيؤدي تعطيل هذا الإعداد إلى تعطيل النسخة الاحتياطية للأنشطة التي تستخدم بنك الأسئلة ، مثل الاختبار.';
$string['configgeneralroleassignments'] = 'في حالة التمكين سيتم تضمين تعيينات الأدوار في الحفظ الاحتياطي افتراضياً.';
$string['configgeneralusers'] = 'يحدد الوضع الافتراضي بشأن ما إذا كان ينبغي لتضمين المستخدمين في الحفظ الاحتياطي.';
$string['configgeneraluserscompletion'] = 'في حالة التمكين سيتم تضمين معلومات الإكمال للمستخدمين في الحفظ الاحتياطي افتراضياً.';
$string['configloglifetime'] = 'يحدد هذا المدة الزمنية التي تريد الاحتفاظ بمعلومات سجلات النسخ الاحتياطي فيها. يتم حذف السجلات الأقدم من هذا العمر تلقائيًا. من المستحسن الحفاظ على هذه القيمة صغيرة ، لأن المعلومات المسجلة الاحتياطية يمكن أن تكون ضخمة.';
$string['confirmcancel'] = 'إلغاء الحفظ الاحتياطي';
$string['confirmcancelno'] = 'إبقى';
$string['confirmcancelquestion'] = 'هلأنت متأكد بأنك ترغب في القيام بعملية الإلغاء؟
جميع المعلومات التي أدخلتها ستفقد.';
$string['confirmcancelyes'] = 'إلغاء';
$string['confirmnewcoursecontinue'] = 'تحذير جديد للمقرر الدراسي';
$string['confirmnewcoursecontinuequestion'] = 'سيتم إنشاء مقرر دراسي مؤقت (مخفي) من قِبل عملية استعادة المقرر. لإيقاف الاستعادة انقر فوق إلغاء الأمر. لا تغلق المتصفح أثناء عملية الاستعادة.';
$string['coursecategory'] = 'الفئة التي سيتم إسترجاع المقرر الدراسي إليها';
$string['courseid'] = 'المعرف الأصلي';
$string['coursesettings'] = 'إعدادات المقرر';
$string['coursetitle'] = 'العنوان';
$string['currentstage1'] = 'الإعدادات المبدئية';
$string['currentstage16'] = 'إكتمل';
$string['currentstage2'] = 'إعدادات المخطط';
$string['currentstage4'] = 'التأكيد والاستعراض';
$string['currentstage8'] = 'تنفيذ الحفظ الاحتياطي';
$string['enterasearch'] = 'ادخل للبحث';
$string['error_block_for_module_not_found'] = 'تم العثور على كتلة يتيمة للمساق. هذه الكتلة لن تضمّن في النسخة الاحتياطية.';
$string['error_course_module_not_found'] = 'تم العثور على كتلة يتيمة (id: {$a->bid}) لنموذج المساق (id: {$a->mid}). هذه الكتلة لن تضمّن في النسخة الاحتياطية.';
$string['errorfilenamemustbezip'] = 'يجب أن يكون الملف المدخل عبارة عن ملف مضغوط بإمتداد (mbz.)';
$string['errorfilenamerequired'] = 'يجب ان تدخل اسم ملف صحيح لنسخة الحفظ الاحتياطي';
$string['errorinvalidformat'] = 'صيغة الحفظ الاحتياطي غير معروفة';
$string['errorinvalidformatinfo'] = 'الملف المحدد غير صالح كملف مودل للنسخة الاحتياطية ولا يمكن استعادته';
$string['errorminbackup20version'] = 'تم إنشاء ملف النسخ الاحتياطي هذا بإصدار تطويري من نسخة Moodle احتياطية ({$a->backup}). الحد الأدنى المطلوب هو {$a->min}. لا يمكن استعادتها.';
$string['errorrestorefrontpagebackup'] = 'يمكنك استعادة الحفظ الاحتياطي للصفحة الأمامية إلى الصفحة الأمامية حصراً';
$string['executionsuccess'] = 'تم بنجاح إنشاء ملف الحفظ الاحتياطي.';
$string['filealiasesrestorefailures'] = 'فشل استعادة الاسماء المستعارة';
$string['filealiasesrestorefailures_help'] = 'لأسماء المستعارة عبارة عن روابط رمزية لملفات أخرى ، بما في ذلك تلك المخزنة في المستودعات الخارجية. في بعض الحالات ، لا يمكن لـ Moodle استعادتها - على سبيل المثال عند استعادة النسخة الاحتياطية في موقع آخر أو عند عدم وجود الملف المشار إليه.

يمكن العثور على مزيد من التفاصيل والسبب الفعلي للفشل في ملف سجل الاستعادة.';
$string['filealiasesrestorefailuresinfo'] = 'تعذر استعادة بعض الأسماء المستعارة المضمنة في ملف النسخة الاحتياطية. تحتوي القائمة التالية على موقعهم المتوقع والملف المصدر الذي كانوا يشيرون إليه في الموقع الأصلي.';
$string['filename'] = 'إسم الملف';
$string['filereferencesincluded'] = 'يتم تضمين مراجع الملفات التي تشير إلى المحتويات الخارجية في ملف الحفظ الاحتياطي. لن تعمل هذه الماجع إذا تمت استعادة النسخة الاحتياطية على موقع مختلف.';
$string['filereferencesnotsamesite'] = 'ملف الحفظ الاحتياطي هو من موقع مختلف، لذلك لا يمكن استعادة مراجع الملفات.';
$string['filereferencessamesite'] = 'ملف الحفظ الاحتياطي هو من هذا الموقع، لذلك يمكن استعادة مراجع الملفات.';
$string['generalactivities'] = 'ضمِّن الأنشطة';
$string['generalanonymize'] = 'معومات مجهولة الهوية';
$string['generalbackdefaults'] = 'إفتراضيات الحفظ الاحتياطي العامة';
$string['generalbadges'] = 'تضمين شارات';
$string['generalblocks'] = 'ضمِّن الكتل';
$string['generalcomments'] = 'تضمين التعليقات';
$string['generalfilters'] = 'تضمين المرشحات';
$string['generalgradehistories'] = 'تضمين التاريخ';
$string['generalgroups'] = 'تضمين المجموعات والتجميعات';
$string['generalhistories'] = 'تضمين السوابق التاريخية';
$string['generallogs'] = 'ضمِّن السجلات';
$string['generalquestionbank'] = 'تشمل بنك الأسئلة';
$string['generalroleassignments'] = 'ضمِّن إسنادات الأدوار';
$string['generalsettings'] = 'إعدادات النسخ الاحتياطي العام';
$string['generalusers'] = 'تضمين المستخدمين';
$string['generaluserscompletion'] = 'تضمين معلومات المستخدمين التكميلية';
$string['hidetypes'] = 'إخفاء خيارات النوع';
$string['importbackupstage16action'] = 'إستمرار';
$string['importbackupstage1action'] = 'التالي';
$string['importbackupstage2action'] = 'التالي';
$string['importbackupstage4action'] = 'تنفيذ الاستيراد';
$string['importbackupstage8action'] = 'إستمرار';
$string['importcurrentstage0'] = 'إختيار المقرر';
$string['importcurrentstage1'] = 'الإعدادات الأولية';
$string['importcurrentstage16'] = 'إكتمل';
$string['importcurrentstage2'] = 'إعدادات المخطط';
$string['importcurrentstage4'] = 'التأكيد والاستعراض';
$string['importcurrentstage8'] = 'تنفيذ الاستيراد';
$string['importfile'] = 'استيراد ملف الحفظ الاحتياطي';
$string['importgeneralduplicateadminallowed'] = 'السماح بحل المشرف للتعارض';
$string['importgeneralduplicateadminallowed_desc'] = 'إذا كان لدى الموقع حساب باسم المستخدم "admin”، فإن محاولة استعادة ملف نسخة احتياطية يحتوي على حساب باسم المستخدم "admin" يمكن أن يسبب تعارضًا. إذا تم تمكين هذا الإعداد، فسيتم حل التعارض عن طريق تغيير اسم المستخدم في ملف النسخة الاحتياطية إلى "admin_xyz".';
$string['importgeneralmaxresults'] = 'أقصى عدد من المساقات المدرجة للاستيراد';
$string['importgeneralmaxresults_desc'] = 'يتحكم هذا في عدد المساقات المدرجة أثناء الخطوة الأولى من عملية الاستيراد';
$string['importgeneralsettings'] = 'الافتراضيات العامة للاستيراد';
$string['importsuccess'] = 'إكتمل الاستيراد. أنقر على استمرار للرجوع إلى المساق';
$string['includeactivities'] = 'ضمِّن:';
$string['includeditems'] = 'البنود المتضمَّنة:';
$string['includefilereferences'] = 'مراجع الملف إلى محتويات خارجية';
$string['includesection'] = 'قسم {$a}';
$string['includeuserinfo'] = 'بيانات المستخدم';
$string['jumptofinalstep'] = 'القفز الى الخطوة النهائية';
$string['locked'] = 'مغلق';
$string['lockedbyconfig'] = 'تم قفل هذا الإعداد بواسطة إعدادات النسخ الاحتياطي الافتراضية';
$string['lockedbyhierarchy'] = 'مؤمن بواسطة التبعيات';
$string['lockedbypermission'] = 'لا تمتلك الصلاحيات الكافية لتغيير هذا الإعداد';
$string['loglifetime'] = 'حافظ على سجلات حتى';
$string['managefiles'] = 'إدارة ملفات الحفظ الاحتياطي';
$string['missingfilesinpool'] = 'تعذر حفظ بعض الملفات أثناء الحفظ الاحتياطي، وبالتالي لن يكون من الممكن استعادتها.';
$string['module'] = 'وحدة';
$string['moodleversion'] = 'إصدار مودل';
$string['morecoursesearchresults'] = 'تم العثور على أكثر من {$a} مساق (مساقات)، يتم عرض أول {$a} من النتائج';
$string['moreresults'] = 'يوجد نتائج كثيرة، الرجاء ادخال بحث أكثر دقة';
$string['nomatchingcourses'] = 'لا توجد مقررات دراسية لعرضها';
$string['norestoreoptions'] = 'لا يوجد تصنيفات أو مقررات لتستطيع القيام بعملية الإستراجاع إليها';
$string['originalwwwroot'] = 'رابط النسخة الاحتياطية';
$string['preparingdata'] = 'اعداد البيانات';
$string['preparingui'] = 'التحضير لعرض الصفحة';
$string['previousstage'] = 'السابق';
$string['qcategory2coursefallback'] = 'فئة الأسئلة "{$a->name}”، الموجودة في الأصل ضمن محتوى فئة النظام/المساق في ملف النسخ الاحتياطي ، سيتم إنشاءها في محتوى المساق بواسطة الاستعادة';
$string['qcategorycannotberestored'] = 'لا يمكن إنشاء فئة الأسئلة "{$a->name}" بواسطة الاستعادة';
$string['question2coursefallback'] = 'فئة الأسئلة "{$ a-> name}”، الموجودة أصلا ضمن محتوى فئة النظام / المساق في ملف النسخ الاحتياطي ، سيتم إنشاؤها في سياق محتوى المساق بواسطة الاستعادة.';
$string['questionegorycannotberestored'] = 'لا يمكن إنشاء الأسئلة "{$a->name}" بواسطة الاستعادة';
$string['restoreactivity'] = 'إسترجاع النشاط';
$string['restorecourse'] = 'إسترجاع المقرر';
$string['restorecoursesettings'] = 'إعدادات المقرر';
$string['restoreexecutionsuccess'] = 'تم استرجاع المساق بنجاح، النقر على زر الاستمرار أدناه سيأخذك لمعاينة المساق الذي قمت باسترجاعه.';
$string['restorefileweremissing'] = 'تعذرت استعادة بعض الملفات لأنها كانت مفقودة في النسخة الاحتياطية.';
$string['restorenewcoursefullname'] = 'اسم المقرر الجديد';
$string['restorenewcourseshortname'] = 'مختصر اسم المقرر الجديد';
$string['restorenewcoursestartdate'] = 'تاريخ بدء جديد';
$string['restorerolemappings'] = 'استرجع تخطيط الدور';
$string['restorerootsettings'] = 'إسترجاع الإعدادات';
$string['restoresection'] = 'إسترجاع القسم';
$string['restorestage1'] = 'التأكيد';
$string['restorestage16'] = 'المراجعة';
$string['restorestage16action'] = 'تنفيذ الاسترجاع';
$string['restorestage1action'] = 'التالي';
$string['restorestage2'] = 'الوجهة';
$string['restorestage2action'] = 'التالي';
$string['restorestage32'] = 'العملية';
$string['restorestage32action'] = 'استمرار';
$string['restorestage4'] = 'الإعدادات';
$string['restorestage4action'] = 'التالي';
$string['restorestage64'] = 'إكمال';
$string['restorestage64action'] = 'استمرار';
$string['restorestage8'] = 'مخطط';
$string['restorestage8action'] = 'التالي';
$string['restoretarget'] = 'إرجاع الهدف';
$string['restoretocourse'] = 'إستعادة المقرر:';
$string['restoretocurrentcourse'] = 'إستعادة لهذا المقرر';
$string['restoretocurrentcourseadding'] = 'دمج المساق الاحتياطي مع هذا المساق';
$string['restoretocurrentcoursedeleting'] = 'احذف محتويات هذا المقرر تم قم بإسترجاعه';
$string['restoretoexistingcourse'] = 'الاسترجاع إلى مساق موجود';
$string['restoretoexistingcourseadding'] = 'دمج المساق الاحتياطي مع المساق الموجود';
$string['restoretoexistingcoursedeleting'] = 'حذف محتويات المساق الموجود ثم القيام بالاسترجاع';
$string['restoretonewcourse'] = 'الاسترجاع كمساق جديد';
$string['restoringcourse'] = 'عملية إسترجاع المقرر قيد التنفيذ';
$string['restoringcourseshortname'] = 'إسترجاع';
$string['rootenrolmanual'] = 'استرجاع كتسجيل يدوي';
$string['rootsettingactivities'] = 'ضمِّن الأنشطة';
$string['rootsettinganonymize'] = 'المعلومات عن المستخدم غير محددة الهوية';
$string['rootsettingbadges'] = 'تشمل الشارات';
$string['rootsettingblocks'] = 'ضمِّن الكتل';
$string['rootsettingcalendarevents'] = 'تضمين أحداث التقويم';
$string['rootsettingcomments'] = 'ضمِّن التعليقات';
$string['rootsettingfilters'] = 'ضمِّن المرشحات';
$string['rootsettinggradehistories'] = 'ضمِّن تاريخ الدرجات';
$string['rootsettinggroups'] = 'تضمين المجموعات والتجميعات';
$string['rootsettingimscc1'] = 'تحويل لفيفة IMS العامة إلى1.0';
$string['rootsettingimscc11'] = 'تحويل لفيفة IMS العامة إلى1.1';
$string['rootsettinglogs'] = 'ضمِّن سجلات المقرر';
$string['rootsettingquestionbank'] = 'تضمين بنك الأسئلة';
$string['rootsettingroleassignments'] = 'ضمِّن إسنادات أدوار المستخدمين';
$string['rootsettings'] = 'إعدادات الحفظ الاحتياطي';
$string['rootsettingusers'] = 'ضمِّن المستخدمين المسجلين';
$string['rootsettinguserscompletion'] = 'ضمِّن تفاصيل إكمال المستخدمين';
$string['sectionactivities'] = 'الأنشطة';
$string['sectioninc'] = 'تم تضمينها في الحفظ الاحتياطي (بدون معلومات المستخدمين)';
$string['sectionincanduser'] = 'تم التضمين في الحفظ الاحتياطي مع معلومات المستخدم';
$string['selectacategory'] = 'إختر التصنيف';
$string['selectacourse'] = 'إختر المساق';
$string['setting_course_fullname'] = 'اسم المقرر الدراسي';
$string['setting_course_shortname'] = 'الاسم المختصر للمقرر';
$string['setting_course_startdate'] = 'تاريخ بدء المساق';
$string['setting_keep_groups_and_groupings'] = 'الاحتفاظ بالمجموعات والتجمُّعات الحالية';
$string['setting_keep_roles_and_enrolments'] = 'الاحتفاظ بالأدوار والتسجيلات الحالية';
$string['setting_overwriteconf'] = 'استبدال إعدادات المقرر';
$string['showtypes'] = 'أظهر خيارات الأنواع';
$string['sitecourseformatwarning'] = 'هنا النسخة الاحتياطية للصفحة الأولى، لاحظ أن هذه النسخة لا يمكن استردادها إلا من  الصفحة الأولى';
$string['skiphidden'] = 'تخطي المقررات الخفية';
$string['skiphiddenhelp'] = 'اختيار إما تضمين أو تخطي المقررات الخفية';
$string['skipmodifdays'] = 'تخطي المقررات الدراسية التي لم يتم تعديلها منذ';
$string['skipmodifdayshelp'] = 'اختيار تخطي المقررات الدراسية التي لم يتم تعديلها منذ الأيام المُحدَّدة';
$string['skipmodifprev'] = 'تخطي المقررات الدراسية التي لم يتم تعديلها منذ النسخ الاحتياطي السابق';
$string['skipmodifprevhelp'] = 'اختيار إما تضمين أو تخطي المقررات الدراسية التي لم يتم تعديلها منذ النسخ الاحتياطي التلقائي الماضي   في هذا النسخ، وهذا يتطلب التسجيل ليتم التفعيل.';
$string['storagecourseandexternal'] = 'منطقة ملفات الحفظ الاحتياطي للمساق والمجلد المحدد';
$string['storagecourseonly'] = 'منطقة ملفات الحفظ الاحتياطي للمساق';
$string['storageexternalonly'] = 'المجلد المحدد للحفظ الاحتياطي التلقائي';
$string['timetaken'] = 'الوقت المستغرق';
$string['title'] = 'عنوان';
$string['totalcategorysearchresults'] = 'مجموع التصنيفات : {$a}';
$string['totalcoursesearchresults'] = 'إجمالي المساقات: {$a}';
$string['unnamedsection'] = 'قسم غير مُسمَّى';
$string['userinfo'] = 'معلومات المُستخدم';
