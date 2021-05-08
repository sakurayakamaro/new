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
 * Strings for component 'qtype_coderunner', language 'ar', version '2.9'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'إخفاء';
$string['HIDE_IF_FAIL'] = 'الإخفاء عند الفشل';
$string['HIDE_IF_SUCCEED'] = 'الإخفاء عند النجاح';
$string['aborted'] = 'تم إحباط الاختبار بسبب وقوع خطأ.';
$string['ace-language'] = 'لغة Ace';
$string['addingcoderunner'] = 'تجري إضافة سؤال CodeRunner جديد';
$string['advanced_customisation'] = 'تخصيص متقدم';
$string['ajax_error'] = '*** خطأ في AJAX. لا تقم بحفظ هذا! ***';
$string['allok'] = 'تم تجاوز كل الاختبارات!';
$string['allornone'] = 'لا بد من إعطاء الترميز الاختباري إما لكل حالات الاختبار أو ليس لواحد منها.';
$string['allornothing'] = 'منح العلامات على أساس الكل أو لا شيء';
$string['allornothing_help'] = 'إذا تم تأشير \'الكل أو لا شيء\'، ينبغي تلبية متطلبات كل حالات الفحص من قبل التسليم ليتمكن من اكتساب أي درجات. بخلاف ذلك، يتم الحصول على الدرجات عبر جمع درجات كل حالات الفحص الناجحة والتعبير عنها بشكل نسبة مقاسة إلى الدرجة العظمى الممكنة للسؤال.

يمكن تعيين الدرجات على مستوى كل حالة من حالات الفحص فقط إذا كان \'الكل أو لا شيء\' غير مؤشر.

إذا تم استعمال قالب المُقيِّم الذي يمنح جزءاً من الدرجات لحالات الفحص، \'الكل أو لا شيء\' ينبغي عموماً أن يكون غير مؤشر.';
$string['allowmultiplestdins'] = 'السماح بمكتبات متعددة من stdins';
$string['answer'] = 'الجواب';
$string['answer_help'] = 'يمكن إدخال إجابة نموذجية هنا واستعمالها للتحقق من قبل كاتب السؤال وإظهارها إختيارياً للطلاب خلال المراجعة. وهي مستعملة أيضاً من قبل النص البرمجي للفحص بالجملة. يتم التحقق من صحة الإجابة غير الفارغة عند الحفظ ما لم يتم رفع التأشير من \'التحقق عند الحفظ\'';
$string['answerbox_group'] = 'مربع الجواب';
$string['answerboxlines'] = 'الصفوف';
$string['answerpreload'] = 'التحميل المسبق لمربع الإجابة';
$string['answerpreload_help'] = 'النص المعطى هنا سيتم تحميله مسبقاً إلى مربع الإجابة الخاص بالطالب.';
$string['answerprompt'] = 'الجواب:';
$string['answerrequired'] = 'لطفاً، أعطِ إجابة غير فارغة';
$string['asolutionis'] = 'الحل من كاتب السؤال:';
$string['atleastonetest'] = 'ينبغي عليك إعطاء حالة اختبار واحدة على الأقل لهذا السؤال.';
$string['bad_dotdotdot'] = 'استعمال خاطئ لـ \'...\'. ينبغي أن تكون في النهاية، بعد غرامتين رقميتين متزايدتين';
$string['bad_new_prototype_name'] = 'تسمية خاطئة لنوع أولي جديد: مستعمل سلفاً';
$string['badcputime'] = 'محدد وقت وحدة المعالجة المركزية ينبغي تركه فارغاً أو أن يكون رقماً موجباً أكبر من الصفر.';
$string['bademptyprecheck'] = 'الفحص القبلي فشل مع المخرجات الآتية غير المتوقعة.';
$string['badmemlimit'] = 'محدد الذاكرة ينبغي إما تركه فارغاً أو أن يكون رقماً غير سالب';
$string['badpenalties'] = 'نظام الغرامة ينبغي أن يكون قائمة مفصولة بفوارز لأرقام ضمن المدى [0, 100]';
$string['badquestion'] = 'خطأ في السؤال';
$string['badsandboxparams'] = 'حقل \'أخرى\' (عوامل sandbox) ينبغي إما أن يكون فارغاً أو يحتوي سجلاً صحيحاً لـ JSON';
$string['badtemplateparams'] = 'عوامل القالب ينبغي إما أن تكون فارغة أو محتوية على سجل JSON صحيح';
$string['brokencombinator'] = 'كان متوقعاً {$a->numtests} من نتائج الفحص، لكن تم الحصول على {$a->numresults}. ربما هناك إفراط في المخرجات أو خطأ في السؤال؟';
$string['brokentemplategrader'] = 'مخرجات خاطئة من المُقيِّم: {$a->output}. ربما تنفيذ برنامجك قد تم إحباطه (أي بلغ أقصى استهلاك متاح للذاكرة أو تجاوز مهلة التنفيذ).';
$string['bulktestcontinuefromhere'] = 'قم بالتنفيذ مرة أخرى أو الاستئناف، بادئاً من هنا';
$string['bulktestindextitle'] = 'الفحص بالجملة لـ CodeRunner';
$string['bulktestrun'] = 'قم بتنفيذ كل فحوص الأسئلة لكل الأسئلة في النظام (بطيء، المشرف فقط)';
$string['coderunner'] = 'ترميز البرنامج';
$string['coderunner_help'] = 'استجابة إلى سؤال يكون وصفة لجزء من برنامج، دالة، أو برنامج كامل، يقوم المستجيب بإدخال ترميز مصدري بلغة برمجة معينة تلبي متطلبات تلك الوصفة.';
$string['coderunner_install_testsuite_failures'] = 'الفحوص التي فشلت';
$string['coderunner_install_testsuite_intro'] = 'هذه الصفحة تسمح لك بفحص أسئلة CodeRunner ذات نماذج إجابات للتأكد من أنها تعمل بشكل صحيح.';
$string['coderunner_install_testsuite_noanswer'] = 'الأسئلة التي ليس لها نماذج من الإجابات';
$string['coderunner_install_testsuite_title'] = 'حزمة فحص لنماذج إجابات CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'إن <a href="{$a->link}">النص البرمجي لفحص نموذج الإجابة</a> يتحقق من كون الأسئلة ذات نماذج إجابات تعمل بشكل صحيح.';
$string['coderunner_question_type'] = 'نوع السؤال CodeRunner:';
$string['coderunnercontexts'] = 'السياقات ذات أسئلة CodeRunner';
$string['coderunnersettings'] = 'إعدادات CodeRunner';
$string['coderunnersummary'] = 'الإجابة هي ترميز برمجي يتم تنفيذه في سياق مجموعة من حالات الفحص لتقرير مدى صحته.';
$string['coderunnertype_help'] = 'إختر لغة البرمجة ونوع السؤال. بمجرد إختيار النوع، يمكن مشاهدة التفاصيل في لوحة تفاصيل نوع السؤال أدناه.';
$string['columncontrols'] = 'جدول النتائج';
$string['columncontrols_help'] = 'خانات التأشير تحدد أي من أعمدة جدول النتائج ينبغي عرضها إلى الطالب بعد التسليم';
$string['confirm_proceed'] = 'إذا قمت بحفظ السؤال مع عدم التأشير على \'التخصيص\'، سيتم فقدان كل التخصيصات التي تم إجراؤها. أتريد المتابعة؟';
$string['cputime'] = 'محدد الوقت (بالثواني)';
$string['customisation'] = 'التخصيص';
$string['customisationcontrols'] = 'التخصيص';
$string['customise'] = 'تخصيص';
$string['datafiles_help'] = 'أي ملفات يتم رفعها هنا ستتم إضافتها إلى مجلد التشغيل عند تنفيذ برنامج القالب الموسع. هذا يسمح بإضافة بيانات كبيرة أو ملفات دعم بشكل ملائم.';
$string['default_penalty_regime'] = 'نظام الغرامة الافتراضي';
$string['default_penalty_regime_desc'] = 'نظام الغرامة الافتراضي المزمع تطبيقه مع الأسئلة الجديدة، متضمناً لقائمة مفصولة بفوارز من النسب المئوية للغرامات، وينتهي إختيارياً بـ ", ..." للدلالة على متوالية عددية مستمرة.';
$string['display'] = 'أعرض';
$string['editingcoderunner'] = 'يجري تحرير سؤال CodeRunner';
$string['empty_new_prototype_name'] = 'لا يمكن لتسمية نوع السؤال الجديد أن تكون فارغة';
$string['emptypenaltyregime'] = 'لا بد من تعريف نظام الغرامة (منذ الإصدار 3.1)';
$string['enable'] = 'تمكين';
$string['enable_diff_check'] = 'تمكين زر \'إظهار الفروق\'';
$string['enable_sandbox_desc'] = 'السماح باستعمال sandbox المحدد لتنفيذ تسليمات الطلاب';
$string['enablecombinator'] = 'تمكين المُدمِج';
$string['equalitygrader'] = 'تطابق كامل';
$string['error_loading_prototype'] = 'خطأ عند تحميل النوع الأولي. مشاكل الشبكة أو توقف المخدم، ربما!';
$string['errorstring-accessdenied'] = 'تم رفض الوصول إلى sandbox';
$string['errorstring-autherror'] = 'لا يوجد تصريح باستعمال sandbox';
$string['errorstring-jobe400'] = 'خطأ من مخدم sandbox العائد لـ Jobe:';
$string['errorstring-ok'] = 'تم';
$string['errorstring-overload'] = 'تعذر تشغيل Job بسبب فرط الحمل في المخدم. ربما عليك المحاولة مرة أخرى قريباً!';
$string['errorstring-pastenotfound'] = 'يتم طلب حالة job غير موجود';
$string['errorstring-submissionfailed'] = 'التسليم إلى sandbox قد فشل';
$string['errorstring-submissionlimitexceeded'] = 'تم بلوغ حد التسليم إلى Sandbox';
$string['errorstring-unknown'] = 'خطأ غير متوقع عند تنفيذ نصوصك البرمجية. قد يكون مخدم sandbox متوقفاً أو متعرضاً إلى حملٍ عالٍ. قد يكون من الأفضل أن تحاول مجدداً بعد برهة!';
$string['errorstring-wronglangid'] = 'تمت المطالبة بلغة غير موجودة';
$string['expected'] = 'المخرجات المتوقعة';
$string['expected_help'] = 'المخرجات المتوقعة من الفحص. تُشاهد من جهة القالب بمثابة {{TEST.expected}}.';
$string['expectedcolhdr'] = 'المتوقع';
$string['exportthisquestion'] = 'تصدير هذا السؤال';
$string['exportthisquestion_help'] = 'هذا سيقوم بإنشاء ملف تصدير مودل بصيغة XML محتوياً على هذا السؤال فقط. مثال على كون ذلك مفيداً، هو عندما تظن أن هذا السؤال يجسد مشكلة في ملحق CodeRunner وتريد التبليغ عنها برسالة إلى المطورين.';
$string['extra'] = 'بيانات القالب الإضافية';
$string['extra_help'] = 'حقل نصي إضافي قد يكون مفيداً أحياناً للاستعمال من قبل القالب، يتم الوصول إليه بمثابة {{TEST.extra}}';
$string['fail'] = 'فشل';
$string['failedhidden'] = 'برمجتك فشلت في واحد أو أكثر من الفحوص المخفية.';
$string['failedntests'] = 'فشلت في {$a->numerrors} من الفحوص';
$string['failedtesting'] = 'فشلت في الفحوص.';
$string['fails'] = 'الفشل';
$string['fileheader'] = 'ملفات الدعم';
$string['filloutoneanswer'] = 'عليك إدخال الترميز المصدري الذي يلبي المواصفات. سيتم تنفيذ الترميز الذي تُدخله لتقرير مدى صحته وسيتم منح العلامة وفقاً لذلك.';
$string['firstfailure'] = 'أول حالة فحص فاشلة: {$a}';
$string['forexample'] = 'على سبيل المثال';
$string['goodemptyprecheck'] = 'نجحت';
$string['gotcolhdr'] = 'Got';
$string['grader'] = 'المقيِّم';
$string['grading'] = 'منح العلامات';
$string['gradingcontrols'] = 'أدوات التحكم بمنح العلامات';
$string['hidden'] = 'مخفي';
$string['hidedifferences'] = 'إخفاء الفوارق';
$string['hiderestiffail'] = 'إخفاء الباقي عند الفشل';
$string['howtogetmore'] = 'لمزيد من المعلومات التفصيلية، إحفظ السؤال مع إزالة التأشير من \'التحقق عند الحفظ\' ثم إفحصه يدوياً';
$string['ideone_pass'] = 'كلمة مرور مخدم Ideone';
$string['ideone_user'] = 'مستخدم مخدم Ideone';
$string['info_unavailable'] = 'معلومات نوع السؤال غير متاحة بالنسبة إلى الأسئلة المخصصة.';
$string['inputcolhdr'] = 'أدخل';
$string['is_prototype'] = 'استعمله بمثابة نوع أولي';
$string['iscombinatortemplate'] = 'هو مُدمِج';
$string['jobe_apikey'] = 'مفتاح واجهة برمجة التطبيق لـ Jobe';
$string['jobe_host'] = 'مخدم Jobe';
$string['language'] = 'لغة Sandbox';
$string['languages'] = 'اللغات';
$string['mark'] = 'الدرجة';
$string['marking'] = 'تعيين الدرجات';
$string['markinggroup'] = 'منح الدرجات';
$string['memorylimit'] = 'حد الذاكرة (ميغا بايت)';
$string['missinganswers'] = 'إجابات مفقودة';
$string['missingprototypes'] = 'أنواع أولية مفقودة';
$string['morehidden'] = 'بعض حالات الفحص المخفية فشلت أيضاً.';
$string['nearequalitygrader'] = 'مطابقة قريبة من المساواة';
$string['negativeorzeromark'] = 'الدرجة ينبغي أن تكون أكبر من الصفر';
$string['noerrorsallowed'] = 'برمجتك ينبغي أن تجتاز كل الفحوص لتحصل على أي درجة. حاول مجدداً';
$string['nonnumericmark'] = 'درجة لا رقمية';
$string['noqtype'] = 'لم يتم إختيار نوع السؤال';
$string['options'] = 'الخيارات';
$string['ordering'] = 'الترتيب';
$string['overallresult'] = 'النتيجة الإجمالية';
$string['pass'] = 'ناجح';
$string['passes'] = 'ينجح';
$string['penaltyregime'] = '(نظام الغرامة: {$a} %)';
$string['penaltyregimelabel'] = 'نظام الغرامة:';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'تجري إضافة سؤال CodeRunner';
$string['pluginnameediting'] = 'يجري تحرير سؤال CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: يقوم بتنفيذ برمجة الطالب المقدمة عبر sandbox';
$string['precheck'] = 'الفحص الأولي';
$string['precheck_all'] = 'الكل';
$string['precheck_disabled'] = 'مُعطَّل';
$string['precheck_empty'] = 'فارغ';
$string['precheck_examples'] = 'الأمثلة';
$string['precheck_selected'] = 'مختارة';
$string['prototypeQ'] = 'هل هو نوع أولي؟';
$string['prototypeusageindex'] = 'المقررات الدراسية المتاحة';
$string['qtypehelp'] = 'مساعدة مع نوع السؤال';
$string['questiontype_required'] = 'ينبغي عليك اختيار نوع السؤال';
$string['seethisquestioninthequestionbank'] = 'مشاهدة هذا السؤال في بنك الأسئلة';
$string['stdin'] = 'الإدخال القياسي';
$string['stdin_help'] = 'الإدخال القياسي إلى النص، يشاهده القالب بمثابة {{TEST.stdin}}';
$string['syntax_errors'] = 'خطأ/أخطاء في الصياغة';
$string['template'] = 'القالب';
$string['template_changed'] = 'قالب الفحص الأولي تغير - أتريد تعطيل المُدمِج؟ [\'إلغاء\' يبقيه مُمَكَّناً.]';
$string['templatecontrols'] = 'أدوات تحكم القالب';
$string['templateerror'] = 'خطأ في القالب';
$string['templategrader'] = 'مُقيِّم القالب';
$string['templateparams'] = 'عوامل القالب';
$string['testcase'] = 'حالة الفحص {$a}';
$string['testcasecontrols'] = 'خصائص الفحص:';
$string['testcases'] = 'حالات الفحص';
$string['testcode'] = 'ترميز الفحص';
$string['testcode_help'] = 'الترميز الخاص بالفحص، مشاهد من قبل القالب بمثابة {{TEST.testcode}}';
$string['testcolhdr'] = 'الفحص';
$string['testingquestion'] = 'يجري فحص السؤال {$a}';
$string['testsplitterre'] = 'مقسم الفحص (تعبير إعتيادي)';
$string['testtype_both'] = 'كلاهما';
$string['testtype_normal'] = 'تحقق فقط';
$string['testtype_precheck'] = 'تحقق أولي فقط';
$string['typename'] = 'نوع السؤال';
$string['unauthorisedbulktest'] = 'ليس لديك وصول مناسب لأي أسئلة من نوع CodeRunner';
$string['unknownerror'] = 'وقع خطأ غير متوقع. قد يكون sandbox متوقفاً. حاول مجدداً بعد برهة.';
$string['useasexample'] = 'استعمل كمثال';
$string['validateonsave'] = 'التحقق عند الحفظ';
$string['xmlcoderunnerformaterror'] = 'خطأ في صيغة XML لسؤال coderunner';
