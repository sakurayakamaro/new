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
 * Strings for component 'qtype_gapfill', language 'ar', version '2.9'.
 *
 * @package     qtype_gapfill
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerdisplay'] = 'إعرض الإجابات';
$string['answerdisplay_help'] = 'السحب والإفلات يظهر قائمة من الكلمات التي يمكن سحبها إلى الفراغات، مالئ الفراغات يعرض فراغات بلا كلمات للاختيار منها، المنسدل يعرض نفس القائمة من الإجابات الصحيحة (والمحتمل أنها خاطئة) لكل حقل';
$string['blank'] = 'فارغ';
$string['cannotimport'] = 'لا يمكن الاستيراد';
$string['casesensitive'] = 'يتحسس حالة الأحرف';
$string['casesensitive_help'] = 'عند تأشيره، إذا كانت الإجابة الصحيحة هي CAT، ستُعتبر الإجابة cat بأنها غير صحيحة';
$string['correctanswer'] = 'إجابة صحيحة';
$string['course'] = 'مساعد الاستيراد';
$string['coursenotfound'] = 'تعذر العثور على المقرر الدراسي، تحقق من اسمه المختصر';
$string['courseshortname'] = 'الاسم المختصر للمقرر';
$string['courseshortname_help'] = 'أدخل الاسم المختصر للمقرر المزمع استيراد السؤال إليه. هذا سيقوم بعملية استيراد قياسية للسؤال بصيغة XML من الملف example_questions.xml المتوضع في مجلد نوع السؤال، مالئ الفراغات.';
$string['delimitchars'] = 'الرموز المحددة';
$string['delimitchars_help'] = 'تغيير الرموز المحددة لموضع الفراغ عن الرمز الافتراضي [ ]، مفيد بالنسبة إلى أسئلة لغات البرمجة';
$string['delimitset_text'] = 'تحديد رموز الفراغات، بحيث يمكنك إضافة % % للعبارة The %cat% sat on the %mat%';
$string['disableregex'] = 'تعطيل التعابير الإعتيادية';
$string['disableregex_help'] = 'تعطيل معالجة التعابير الإعتيادية وإجراء مقارنة قياسية للجُمل. هذا قد يكون مفيداً لأسئلة html حيث تنبغي معاملة الأقواس الزاوية (&lt; و &gt;) حرفياً والرموز الرياضية مثل * ينبغي النظر إليها حرفياً بدلاً من معاملتها كتعابير';
$string['disableregexset_text'] = 'تعطيل معالجة التعابير الإعتيادية للاستجابات';
$string['displaydragdrop'] = 'السحب والإفلات';
$string['displaydropdown'] = 'المنسدل';
$string['displaygapfill'] = 'مالئ الفراغات';
$string['duplicatepartialcredit'] = 'الدرجة جزئية لأن لديك إجابات مكررة';
$string['fixedgapsize'] = 'حجم الفراغ ثابت';
$string['fixedgapsize_help'] = 'عند محاولة السؤال سيتم جعل كل الفراغات بنفس الحجم المناسب لأكبر فراغ منها. هذا من شأنه تجنب جعل حجم الفراغ كدليل على الإجابة الصحيحة، بعبارة أخرى، إن كانت الفراغات مثل [بلد] و [محيطات]، سيكون من الواضح أن كلمة محيطات محلها هو الفراغ الأكبر حجماً';
$string['fixedgapsizeset_text'] = 'يجعل حجم كل الفراغات مساوياً لحجم الفراغ الأكبر منها';
$string['gapfill'] = 'مالئ الفراغات.';
$string['moreoptions'] = 'خيارات أخرى';
$string['noduplicates'] = 'بلا تكرار';
$string['noduplicates_help'] = 'عند تأشيره، كل إجابة لا بد لها أن تكون فريدة، مفيد عندما يكون لكل حقل المعامل | ، ومثال على ذلك: ما هي أنواع الميداليات الأولمبية، وكل حقل فيه [ذهب|فضة|برونز]، إذا أدخل الطالب ذهب في كل حقل، سيحصل على علامة عن الحق الأول فقط، (الحقول الأخرى ستحصل على تأشيرة مع ذلك). هو في الواقع عملية إهمال للإجابات المتكررة لأغراض منح الدرجات.';
$string['or'] = 'أو';
$string['pleaseenterananswer'] = 'لطفاً، أدخل الإجابة.';
$string['pluginname'] = 'مالئ الفراغات';
$string['pluginname_help'] = 'ضع الكلمات التي تريد إكمالها بين أقواس مربعة. مثلاً: ظهرت [الشمس] من بين [السحاب]. إذا كانت كلمتا السحاب والغيوم مقبولتان، استعمل [السحاب|الغيوم]. نمطا السحب والإفلات والمنسدل يسمحان بخلط قائمة الإجابات وعرضها؛ والتي يمكنها أن تتضمن إجابات خاطئة بغرض التشتيت.';
$string['pluginnameadding'] = 'تجري إضافة سؤال من نوع مالئ الفراغات.';
$string['pluginnameediting'] = 'تحرير سؤال مالئ الفراغات.';
$string['pluginnamesummary'] = 'نمط سؤال إملأ الفراغات. يسمح بالسحب والإفلات أو الخيارات من قائمة منسدلة مع وجود عناصر التشتيت. صياغته سهلة التعلم جداً.';
$string['questioncatnotfound'] = 'تعذر العثور على صنف السؤال، أنقر <a href={$a}>هنا</a> لتأسيسه، ثم أنقر على زر العودة في المستعرض';
$string['questionsmissing'] = 'لم تقم بوضع اي حقول في نص سؤالك';
$string['visitquestions'] = 'أنقر <a href={$a}>هنا</a> للذهاب إلى الأسئلة';
$string['wronganswers'] = 'عناصر التشتيت.';
$string['wronganswers_help'] = 'قائمة بالكلمات الخاطئة مصممة لتشتيت الانتباه عن الإجابات الصحيحة. يتم الفصل ما بين كل منها بفارزة، ويُطبق فقط مع نمطي السحب والإفلات والمنسدل.';
