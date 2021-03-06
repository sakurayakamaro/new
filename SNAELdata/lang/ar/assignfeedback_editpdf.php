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
 * Strings for component 'assignfeedback_editpdf', language 'ar', version '2.9'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'أضف إلى القائمة السريعة';
$string['annotationcolour'] = 'لون التعليق';
$string['black'] = 'أسود';
$string['blue'] = 'أزرق';
$string['cannotopenpdf'] = 'لا يمكن فتح ملف PDF. قد يكون الملف تالفًا أو بتنسيق غير مدعوم.';
$string['clear'] = 'واضح';
$string['colourpicker'] = 'منتقي الألوان';
$string['command'] = 'أمر:';
$string['comment'] = 'تعليقات';
$string['commentcolour'] = 'لون التعليق';
$string['commentcontextmenu'] = 'قائمة سياق التعليق';
$string['couldnotsavepage'] = 'لا يمكن حفظ الصفحة {$a}';
$string['currentstamp'] = 'ختم';
$string['deleteannotation'] = 'حذف التعليق التوضيحي';
$string['deletecomment'] = 'امسح التعليق';
$string['deletefeedback'] = 'حذف ردود الفعل بصيغة  PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'تحميل الملاحظات بصيغة PDF';
$string['editpdf'] = 'التعليق على PDF';
$string['editpdf_help'] = 'تعلق الطلاب على الإرسالات مباشرة في المستعرض .. و ينتج عن هذا ملف PDF قابل للتحرير .';
$string['enabled'] = 'التعليق على PDF';
$string['enabled_help'] = 'في حالة التمكين ، سيكون المعلم قادرًا على إنشاء ملفات PDF مشروحة عند تحديد المهام. يتيح ذلك للمعلم إضافة التعليقات و الرسم و الأختام مباشرة فوق عمل الطلاب.
يتم التعليق التوضيحي في المستعرض و لا يلزم وجود برامج إضافية.';
$string['errorgenerateimage'] = 'حدث خطأ أثناء إنشاء صورة باستخدام ghostscript .. و معلومات تصحيح الأخطاء: {$a}';
$string['filter'] = 'تصفية التعليقات ...';
$string['generatefeedback'] = 'توليد التعليقات بصيغة  PDF';
$string['generatingpdf'] = 'توليد ملف PDF ...';
$string['gotopage'] = 'الذهاب لصفحة';
$string['green'] = 'أخضر';
$string['gsimage'] = 'اختبار الصورة بصيغة Ghostscript';
$string['highlight'] = 'تسليط الضوء';
$string['jsrequired'] = 'جافا سكريبت مطلوبة للتعليق على  PDF. يرجى تمكين JavaScript في متصفحك لاستخدام هذه الميزة.';
$string['launcheditor'] = 'بدء تشغيل محرر PDF ...';
$string['line'] = 'خط';
$string['loadingeditor'] = 'تحميل محرر PDF';
$string['navigatenext'] = 'الصفحة التالية';
$string['navigateprevious'] = 'الصفحة السابقة';
$string['output'] = 'انتاج:';
$string['oval'] = 'بيضاوي';
$string['pagenumber'] = 'صفحة رقم {$a}';
$string['pagexofy'] = 'صفحة رقم {$a} من مجموع صفحات {$a->total}';
$string['pathtogspathdesc'] = 'يرجى ملاحظة أن التعليقات التوضيحية بتنسيق PDF تتطلب تعيين المسار إلى ghostscript في {$a}.';
$string['pen'] = 'قلم';
$string['pluginname'] = 'التعليق على PDF';
$string['rectangle'] = 'مستطيل';
$string['red'] = 'أحمر';
$string['result'] = 'النتيجة:';
$string['searchcomments'] = 'البحث في التعليقات';
$string['select'] = 'اختر';
$string['stamp'] = 'الختم';
$string['stamppicker'] = 'منتقي الطوابع';
$string['stamps'] = 'طوابع بريدية';
$string['stampsdesc'] = 'يجب أن تكون الطوابع ملفات صور (الحجم الموصى به: 40 × 40). يمكن استخدام هذه الصور مع أداة الختم للتعليق على PDF.';
$string['test_doesnotexist'] = 'يشير مسار ghostscript إلى ملف غير موجود';
$string['test_empty'] = 'مسار ghostscript فارغ - يرجى إدخال المسار الصحيح';
$string['test_isdir'] = 'يشير مسار ghostscript إلى مجلد ، يرجى تضمين برنامج ghostscript في المسار الذي تحدده';
$string['test_notestfile'] = 'اختبار PDF مفقود';
$string['test_notexecutable'] = 'يشير ghostscript إلى ملف غير قابل للتنفيذ';
$string['test_ok'] = 'يبدو أن مسار ghostscript على ما يرام - يرجى التحقق من أنه يمكنك رؤية الرسالة في الصورة أدناه';
$string['testgs'] = 'اختبار مسار المخطط';
$string['tool'] = 'أداة';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'عرض تعليقات على PDF  ...';
$string['white'] = 'أبيض';
$string['yellow'] = 'أصفر';
