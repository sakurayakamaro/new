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
 * Strings for component 'quiz_statistics', language 'ar', version '2.9'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'الإجابة الفعلية';
$string['allattempts'] = 'كل المحاولات';
$string['allattemptsavg'] = 'العلامة المتوسطة لكل المحاولات';
$string['allattemptscount'] = 'العدد الكلي للمحاولات المكتملة التي تم منح علاماتها';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" تباين  {$a->variant}';
$string['analysisofresponses'] = 'تحليل الاستجابات';
$string['analysisofresponsesfor'] = 'تحليل الاستجابات لـ {$a}';
$string['analysisvariant'] = '"{$a->name}" تباين {$a->variant}';
$string['attempts'] = 'المحاولات';
$string['attemptsall'] = 'كل المحاولات';
$string['attemptsfirst'] = 'المحاولة الأولى';
$string['backtoquizreport'] = 'عودة إلى صفحة تقرير الإحصائيات الرئيسية';
$string['calculatefrom'] = 'حساب الإحصائيات من';
$string['calculatingallstats'] = 'حساب إحصاءات الاختبار و الأسئلة و تحليل بيانات الاستجابة';
$string['cic'] = 'معامل الاتساق الداخلي (لـ{$a})';
$string['completestatsfilename'] = 'حالات كاملة';
$string['count'] = 'عدد';
$string['counttryno'] = 'عدّ المحاولة  {$a}';
$string['coursename'] = 'اسم المساق';
$string['detailedanalysis'] = 'تحليل أكثر تفصيلاً لاستجابات هذا السؤال';
$string['detailedanalysisforvariant'] = 'تحليل أكثر تفصيلاً للاستجابات على البديل {$a} لهذا السؤال';
$string['discrimination_index'] = 'مؤشر التمييز';
$string['discriminative_efficiency'] = 'كفاءة التمييز';
$string['downloadeverything'] = 'قم بتنزيل التقرير بالكامل بصيغة';
$string['duration'] = 'مفتوحة لـ';
$string['effective_weight'] = 'الوزن المؤثر';
$string['errordeleting'] = 'خطأ في حذف سجلات {$a} القديمة.';
$string['errormedian'] = 'خطأ في جلب الوسيط';
$string['errorpowerquestions'] = 'خطأ جلب البيانات لحساب التباين لدرجات السؤال';
$string['errorpowers'] = 'خطأ جلب البيانات لحساب التباين في درجات الاختبار';
$string['errorrandom'] = 'خطأ في الحصول على بيانات البند الفرعي';
$string['errorratio'] = 'معدل الأخطاء (ل{$a})';
$string['errorstatisticsquestions'] = 'خطأ في جلب البيانات لحساب إحصائيات درجات السؤال';
$string['facility'] = 'مؤشر السهولة';
$string['firstattempts'] = 'أول المحاولات';
$string['firstattemptsavg'] = 'متوسط الدرجات للمحاولة الأولى';
$string['firstattemptscount'] = 'عدد المحاولات الأولى الكاملة والمُصحَّحة';
$string['frequency'] = 'التكرار';
$string['highestattempts'] = 'أعلى محاولة تم تصحيحها';
$string['highestattemptsavg'] = 'متوسط درجة أعلى محاولات مقيّمة';
$string['intended_weight'] = 'الوزن المعد';
$string['kurtosis'] = 'نقاط توزيع التفرطح  ( لـ {$a})';
$string['lastattempts'] = 'المحاولة الأخيرة';
$string['lastattemptsavg'] = 'متوسط درجة المحاولات الأخيرة';
$string['lastcalculated'] = 'آخر حساب {$a->lastcalculated} قبل هذا كانت هناك {$a->count}. محاولات منذ ذلك الحين.';
$string['maximumfacility'] = 'أعلى السهولة';
$string['median'] = 'وسيط الدرجة  (لـ {$a})';
$string['medianfacility'] = 'وسيط السهولة';
$string['minimumfacility'] = 'أدنى السهولة';
$string['modelresponse'] = 'نموذج الاستجابة';
$string['nameforvariant'] = 'المتغير {$a->variant} من {$a->name}';
$string['negcovar'] = 'التباين السلبي للدرجة مع إجمالي درجة المحاولة';
$string['negcovar_help'] = 'إن درجة هذا السؤال لهذا العدد من المحاولات على هذا الاختبار يختلف في الاتجاه المعاكس .. لأن درجة المحاولات الإجمالية تميل إلى أن تكون أقل من المتوسط في درجة هذا السؤال .. و هو فوق المتوسط و العكس بالعكس.
لدينا لا يمكن حساب المعادلة بطريقة فعالة لوزن السؤال في هذه الحالة. حسابات وزن السؤال فعالة للأسئلة الأخرى في هذا الاختبار، الوزن الفعلي للسؤال لهذه الأسئلة إذا أعطيت الأسئلة سلط الضوء مع التباين السلبي على درجة الحد الأقصى عن الصفر.
إذا قمت بتحرير هذا الاختبار و إعطاء هؤلاء السؤال مع التباين السلبي على الدرجة كحد أقصى من الصفر فإن وزن السؤال الفعلي لهذه الأسئلة يكون صفرا و الثقل الحقيقي للسؤال الفعال من الأسئلة الأخرى سيتم وفقا للحسابات الآنية.';
$string['nostudentsingroup'] = 'لا يوجد طلاب في هذه المجموعة حتى الآن';
$string['optiongrade'] = 'اعتماد جزئي';
$string['partofquestion'] = 'جزء من السؤال';
$string['pluginname'] = 'إحصائيات';
$string['position'] = 'المكان';
$string['positions'] = 'الأماكن';
$string['questioninformation'] = 'معلومات السؤال';
$string['questionname'] = 'اسم السؤال';
$string['questionnumber'] = 'رقم السؤال';
$string['questionstatistics'] = 'إحصائيات السؤال';
$string['questionstatsfilename'] = 'احصائيات السؤال';
$string['questiontype'] = 'نوع السؤال';
$string['quizinformation'] = 'معلومات الاختبار';
$string['quizname'] = 'اسم الاختبار';
$string['quizoverallstatistics'] = 'إحصاءات الاختبار الكاملة';
$string['quizstructureanalysis'] = 'تحليل بنية الاختبار';
$string['random_guess_score'] = 'نتيجة التخمين العشوائي';
$string['recalculatenow'] = 'إعادة حساب الدرجات الآن';
$string['reportsettings'] = 'إحصائيات حساب الإعدادات';
$string['response'] = 'الاستجابة';
$string['skewness'] = 'نقاط توزيع الانحراف (لــ{$a})';
$string['slotstructureanalysis'] = 'التحليل الهيكلي لرقم السؤال {$a}';
$string['standarddeviation'] = 'الانحراف المعياري (ل {$a})';
$string['standarddeviationq'] = 'الانحراف المعياري';
$string['standarderror'] = 'الخطأ المعياري ( ل {$a} )';
$string['statistics'] = 'الإحصائيات';
$string['statistics:componentname'] = 'تقرير إحصاءات الاختبار';
$string['statistics:view'] = 'عرض تقرير الإحصاءات';
$string['statisticsreport'] = 'تقرير الإحصاءات';
$string['statisticsreportgraph'] = 'إحصاءات عن موقع السؤال';
$string['statsfor'] = 'إحصاءات الاختبار  (لـ{$a})';
$string['variant'] = 'تباين';
$string['whichtries'] = 'تحليل الإجابات ل';
