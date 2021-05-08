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
 * Strings for component 'plugin', language 'ar', version '2.9'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'أفعال';
$string['availability'] = 'حالة التوفر';
$string['checkforupdates'] = 'تحقق من وجود تحديثات متوفرة';
$string['checkforupdateslast'] = 'آخر عملية تحقق تم إجراؤها بتاريخ {$a}';
$string['dependencyinstall'] = 'ثبت';
$string['dependencyupload'] = 'تحميل';
$string['detectedmisplacedplugin'] = 'المكون الإضافي "{$a->component}" مثبت في موقع غير صحيح "{$a->current}" ، والموقع المتوقع هو "{$a->expected}"';
$string['displayname'] = 'اسم المكون الإضافي';
$string['err_response_curl'] = 'يتعذر جلب بيانات التحديثات المتاحة - خطأ cURL غير متوقع.';
$string['err_response_format_version'] = 'إصدار غير متوقع لشكل رد الفعل. يرجى محاولة إعادة التأكد من وجود تحديثات متاحة.';
$string['err_response_http_code'] = 'يتعذر جلب بيانات التحديثات المتاحة - رمز استجابة HTTP غير متوقع.';
$string['filterall'] = 'إظهار الكل';
$string['filtercontribonly'] = 'أظهار  المكونات الإضافية فقط';
$string['filterupdatesonly'] = 'إظهار القابل للتحديث فقط';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'لم يتم تثبيت أي مكونات إضافية من هذا النوع';
$string['notdownloadable'] = 'لا يمكن تحميل الحزمة';
$string['notdownloadable_help'] = 'لا يمكن تنزيل حزمة ZIP مع التحديث تلقائيًا. يرجى الرجوع إلى صفحة الوثائق لمزيد من المساعدة';
$string['notes'] = 'ملاحظات';
$string['notwritable'] = 'ملفات المكون الإضافي غير قابلة للكتابة عليها';
$string['notwritable_help'] = 'ملفات المكون الإضافي غير قابلة للكتابة عليها بواسطة خادم الويب. يجب أن يكون لعملية خادم الويب حق الوصول للكتابة إلى مجلد المكوّن الإضافي وجميع محتوياته. اتاحة الكتابة على مجلد الجذر للمكون الإضافي المعني قد تكون ضرورية أيضًا.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['pluginchecknotice'] = 'هذه الصفحة تعرض الملاحق التي قد تستدعي انتباهك في أثناء الترقية، مثل الملاحق الجديدة التي سيتم تنصيبها، الملاحق التي ستتم ترقيتها، الملاحق المفقودة... إلخ. يتم عرض ملاحق إضافية إذا كان هناك تحديث متاح لها. يُنصح بأن تتحقق من توفر أحدث الإصدارات للملاحق وتحديث نصوصها البرمجية قبل متابعة ترقية إصدار مودل هذا.';
$string['plugindisable'] = 'عطل';
$string['plugindisabled'] = 'تم تعطيله';
$string['pluginenable'] = 'مكن - فعل';
$string['pluginenabled'] = 'ممكن - مفعل';
$string['release'] = 'إطلاق';
$string['requiredby'] = 'مطلوب لِ: {$a}';
$string['requires'] = 'يتطلب';
$string['rootdir'] = 'دليل';
$string['settings'] = 'الإعدادات';
$string['source'] = 'مصدر';
$string['sourceext'] = 'إضافي';
$string['sourcestd'] = 'قياسي';
$string['status'] = 'الحالة';
$string['status_delete'] = 'للحذف';
$string['status_downgrade'] = 'تم تثبيت إصدار أحدث';
$string['status_missing'] = 'غير موجود على القرص';
$string['status_new'] = 'سيتم تثبيته';
$string['status_nodb'] = 'لا قاعدة بيانات';
$string['status_upgrade'] = 'سيتم ترقيته';
$string['status_uptodate'] = 'منصب';
$string['systemname'] = 'محدث';
$string['type_auth'] = 'طريقة إثبات الأصالة';
$string['type_auth_plural'] = 'طُرق المصادقة';
$string['type_availability'] = 'شرط التوفر';
$string['type_availability_plural'] = 'شروط التوفر';
$string['type_block'] = 'كتلة';
$string['type_block_plural'] = 'الكتل';
$string['type_cachelock'] = 'معالج قفل ذاكرة التخزين المؤقت';
$string['type_cachelock_plural'] = 'معالجات قفل ذاكرة التخزين المؤقت';
$string['type_cachestore'] = 'مخزن ذاكرة التخزين المؤقت';
$string['type_cachestore_plural'] = 'مخازن ذاكرة التخزين المؤقت';
$string['type_calendartype'] = 'نوع التقويم';
$string['type_calendartype_plural'] = 'أنواع التقويم';
$string['type_coursereport'] = 'تقرير المقرر الدراسي';
$string['type_coursereport_plural'] = 'تقارير المقرر الدراسي';
$string['type_editor'] = 'محرر';
$string['type_editor_plural'] = 'محررات';
$string['type_enrol'] = 'طريقة انضمام';
$string['type_enrol_plural'] = 'طُرق الانضمام';
$string['type_filter'] = 'مرشح نص';
$string['type_filter_plural'] = 'مرشحات النص';
$string['type_format'] = 'تنسيق المقرر الدراسي';
$string['type_format_plural'] = 'تنسيقات المقرر الدراسي';
$string['type_gradeexport'] = 'طريقة تصدير العلامات';
$string['type_gradeexport_plural'] = 'طُرق تصدير العلامات';
$string['type_gradeimport'] = 'طريقة استيراد العلامات';
$string['type_gradeimport_plural'] = 'طُرق استيراد العلامات';
$string['type_gradereport'] = 'تقرير سجل التقديرات';
$string['type_gradereport_plural'] = 'تقارير سجل التقديرات';
$string['type_gradingform'] = 'طريقة متقدمة لتوزيع الدرجات';
$string['type_gradingform_plural'] = 'طرق متقدمة لتوزيع الدرجات';
$string['type_local'] = 'مكون إضافي محلي';
$string['type_local_plural'] = 'مكونات إضافية محلية';
$string['type_message'] = 'نتاج المراسلة';
$string['type_message_plural'] = 'مخرجات المراسلة';
$string['type_mnetservice'] = 'خدمة MNet';
$string['type_mnetservice_plural'] = 'خدمات MNet';
$string['type_mod'] = 'وحدة النشاط';
$string['type_mod_plural'] = 'وحدات النشاط';
$string['type_plagiarism'] = 'ملحق منع الانتحال';
$string['type_plagiarism_plural'] = 'مكونات إضافية لمنع الانتحال';
$string['type_portfolio'] = 'محفظة';
$string['type_portfolio_plural'] = 'المحافظ';
$string['type_profilefield'] = 'نوع حقل الملف الشخصي';
$string['type_profilefield_plural'] = 'أنواع حقول الملف الشخصي';
$string['type_qbehaviour'] = 'سلوك السؤال';
$string['type_qbehaviour_plural'] = 'تصرف الأسئلة';
$string['type_qformat'] = 'تنسيق إستيراد/تصدير السؤال';
$string['type_qformat_plural'] = 'تنسيقات إستيراد/تصدير السؤال';
$string['type_qtype'] = 'نوع السؤال';
$string['type_qtype_plural'] = 'أنواع الأسئلة';
$string['type_report'] = 'تقرير الموقع';
$string['type_report_plural'] = 'تقارير الموقع';
$string['type_repository'] = 'مستودع';
$string['type_repository_plural'] = 'مستودعات';
$string['type_theme'] = 'مظهر';
$string['type_theme_plural'] = 'مظاهر';
$string['type_tool'] = 'أداة المشرف';
$string['type_tool_plural'] = 'أدوات الإدارة';
$string['type_webservice'] = 'بروتوكول خدمات الويب';
$string['type_webservice_plural'] = 'بروتوكولات خدمات الويب';
$string['uninstall'] = 'إزالة التثبيت';
$string['uninstallconfirm'] = 'أنت على وشك إلغاء تثبيت المكوّن الإضافي <em>{$a->name}</em>. سيؤدي هذا إلى حذف كل شيء في قاعدة البيانات المرتبطة بهذا المكوِّن الإضافي ، بما في ذلك التكوين ، وسجلات السجل ، وملفات المستخدم التي يديرها المكون الإضافي وما إلى ذلك. ولا توجد طريقة للخلف ولا ينشئ Moodle نفسه أي نسخة احتياطية للاسترداد. هل أنت متأكد أنك تريد المتابعة؟';
$string['uninstalldelete'] = 'أنت على وشك إلغاء تثبيت المكوّن الإضافي <em>{$a->name}</em>. سيؤدي هذا الإلغاء إلى حذف، من قاعدة البيانات، كل شيء مرتبط بهذا المكوِّن الإضافي، بما في ذلك التكوين، وجداول السجل، وملفات المستخدم المتابعة من قبل هذا المكون الإضافي وما إلى ذلك. ولن يكون هناك سبيل للرجوع للخلف وMoodle نفسه لا ينشئ أي نسخة استرداد احتياطية. هل أنت متأكد أنك تريد الاستمرار؟';
$string['uninstalldeleteconfirm'] = 'تم حذف جميع البيانات المرتبطة بالمكون الإضافي <em>{$a->name}</em> من قاعدة البيانات. لمنع هذا المكون الإضافي من إعادة تثبيت نفسه، يجب إزالة مجلده <em>{$a->rootdir}</em> من الخادم. هل تريد إزالة مجلد هذا المكوّن الإضافي الآن؟';
$string['uninstalldeleteconfirmexternal'] = 'يبدو أن الإصدار الحالي من المكوِّن الإضافي تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا أردت إزالة مجلد هذا المكون الإضافي، فقد تفقد تعديلات محلية هامة من التعليمات البرمجية. الرجاء التأكد من أنك بالتأكيد تريد إزالة مجلد المكوِّن الإضافي قبل الاستمرار.';
$string['uninstallextraconfirmblock'] = 'هناك عدة نسخ {$a->instances} من هذه المجموعة.';
$string['uninstallextraconfirmenrol'] = 'يوجد {$a->enrolments} لتسجيلات المستخدمين.';
$string['uninstallextraconfirmmod'] = 'يوجد  {$a->instances} نسخ مطابقة لهذا النموذج في {$a->courses} مساقات';
$string['uninstalling'] = 'جاري إلغاء تثبيت {$a->name}';
$string['updateavailable'] = 'هناك إصدار جديد {$a} متاح!';
$string['updateavailable_moreinfo'] = 'مزيد من المعلومات...';
$string['updateavailable_release'] = 'إطلاق {$a}';
$string['updatepluginconfirm'] = 'تأكيد تحديث المكون الإضافي';
$string['updatepluginconfirmexternal'] = 'يبدو أن الإصدار الحالي من المكوِّن الإضافي تم الحصول عليه من خلال نظام إدارة شفرة المصدر ({$a}). إذا قمت بتثبيت هذا التحديث، فلن تتمكن بعد ذلك من الحصول على تحديثات المكون الإضافي من مورد نظام إدارة التعليمات البرمجية. الرجاء التأكد من أنك بالتأكيد تريد تحديث المكون الإضافي قبل المتابعة.';
$string['updatepluginconfirminfo'] = 'ت على وشك تثبيت إصدار جديد من المكوّن الإضافي <strong>{$a->name}</strong>. سيتم تنزيل حزمة zip مع إصدار {$a->version} من المكوّن الإضافي من <a href="{$a->url}">{$a->url}</a> وسيتم استخراجها إلى تثبيت Moodle حتى تتمكن من ترقية التثبيت الخاص بك.';
$string['updatepluginconfirmwarning'] = 'يرجى ملاحظة أن Moodle لن يقوم تلقائيًا بعمل نسخة احتياطية من قاعدة البيانات الخاصة بك قبل الترقية. نوصي بشدة أن تنشئ لقطات احتياطية كاملة الآن، وذلك للتعامل مع الحالة النادرة التي قد تحوي الشفرة الجديدة أخطاء تجعل موقعك غير متوفر أو ربما تفسد قاعدة البيانات الخاصة بك. المضي قدما على مسؤوليتك الخاصة.';
$string['version'] = 'الإصدار';
$string['versiondb'] = 'إصدار حالي';
$string['versiondisk'] = 'إصدار جديد';
