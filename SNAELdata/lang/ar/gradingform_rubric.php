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
 * Strings for component 'gradingform_rubric', language 'ar', version '2.9'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'أضف معياراً';
$string['alwaysshowdefinition'] = 'إسمح للمستخدمين بمعاينة سلم التقييم (بخلافه، سيتم عرضه فقط بعد التقييم)';
$string['backtoediting'] = 'عودة إلى التحرير';
$string['confirmdeletecriterion'] = 'هل أنت متأكد من رغبتك في حذف هذا المعيار؟';
$string['confirmdeletelevel'] = 'هل أنت متأكد من رغبتك في حذف هذا المستوى؟';
$string['criterionaddlevel'] = 'أضف مستوىً';
$string['criteriondelete'] = 'إحذف المعيار';
$string['criterionempty'] = 'أنقر لتحرير المعيار';
$string['criterionmovedown'] = 'أنقل للأسفل';
$string['criterionmoveup'] = 'أنقل للأعلى';
$string['definerubric'] = 'تعريف سلم التقييم';
$string['description'] = 'الوصف';
$string['enableremarks'] = 'إسمح للمقيِّم بوضع ملاحظات نصية لكل معيار';
$string['err_mintwolevels'] = 'كل معيار ينبغي أن يكون له مستويان اثنان على الأقل';
$string['err_nocriteria'] = 'سلم التقييم ينبغي أن يتكون من معيار واحد على الأقل';
$string['err_nodefinition'] = 'تعريف المستوى لا يمكن أن يترك فارغاً';
$string['err_nodescription'] = 'وصف المعيار لا يمكن أن يترك فارغاً';
$string['err_scoreformat'] = 'عدد النقاط لكل مستوى ينبغي أن يكون رقماً صالحاً';
$string['err_totalscore'] = 'أقصى عدد من النقاط الممكنة عند استعمال سلم التقييم ينبغي أن يكون أكبر من صفر.';
$string['gradingof'] = 'وضع علامات {$a}';
$string['leveldelete'] = 'إحذف المستوى {$a}';
$string['levelempty'] = 'أنقر لتحرير المستوى';
$string['name'] = 'الاسم';
$string['needregrademessage'] = 'لقد تغير تعريف سلم التقييم بعد منح العلامات لهذا الطالب. لا يمكن للطالب معاينة هذا السلم حتى تقوم بالتحقق منه وتحديث الدرجة.';
$string['pluginname'] = 'سلم التقييم';
$string['previewrubric'] = 'استعراض سلم التقييم';
$string['regrademessage1'] = 'أنت على وشك حفظ التغييرات في سلم تقييم سبق وأن تم استعماله لتقييم الطلبة. لطفاً، حدد فيما إذا كانت العلامات الحالية بحاجة إلى مراجعة. إذا اخترت ذلك، فسيكون سلم التقييم مخفياً عن الطلاب حتى تتم مراجعة علاماتهم.';
$string['regrademessage5'] = 'أنت على وشك حفظ تغييرات هامة في سلم تقييم سبق وأن تم استعماله لتقييم الطلبة. القيم في سجل التقديرات لن تتغير ولكن سلم التقييم  سيكون مخفياً عن الطلاب حتى تتم مراجعة علاماتهم.';
$string['regradeoption0'] = 'لا تضع علامة لإعادة التقييم';
$string['regradeoption1'] = 'ضع علامة لإعادة التقييم';
$string['restoredfromdraft'] = 'ملاحظة: آخر محاولة لتقييم هذا الشخص لم يتم حفظها بشكل صحيح لذلك تمت استعادة مسودات العلامات. إذا أردت إلغاء هذه التغييرات استعمل زر \'إلغاء\' أدناه.';
$string['rubric'] = 'سلم التقييم';
$string['rubricmapping'] = 'قواعد تعيين النقاط للدرجات';
$string['rubricmappingexplained'] = 'الدرجة الصغرى الممكنة لسلم التقييم هذا هي <b>{$a->minscore} نقطة</b>. سيتم تحويلها إلى الدرجة الصغرى المتاحة في النشاط (والتي هي 0 ما لم تتم مقايستها). الدرجة القصوى والتي هي <b>{$a->maxscore} نقطة</b> سيتم تحويلها إلى الدرجة القصوى للنشاط. الدرجات الوسطى سيتم تحويلها وفقاً لذلك.

إذا تم استعمال المقياس لوضع العلامات، سيتم تقريب الدرجة وتحويلها إلى عناصر المقياس كما لو أنها أعداد صحيحة متوالية.

يمكن تغيير حسابات هذه الدرجة عبر تحرير النموذج وتأشير الخانة \'إحسب العلامة التي لها أدنى درجة يمكن تحقيقها لسلم التقييم\'.';
$string['rubricnotcompleted'] = 'لطفاً، إختر شيئاً ما لكل معيار';
$string['rubricoptions'] = 'خيارات سلم التقييم';
$string['rubricstatus'] = 'حالة سلم التقييم الحالي';
$string['save'] = 'احفظ';
$string['saverubric'] = 'إحفظ سلم التقييم واجعله جاهزاً';
$string['saverubricdraft'] = 'الحفظ كمسودة';
$string['scorepostfix'] = '{$a} نقاط';
$string['showdescriptionstudent'] = 'إعرض وصف سلم التقييم لمن يتم تقييمهم';
$string['showdescriptionteacher'] = 'إعرض وصف سلم التقييم خلال التقييم';
$string['showremarksstudent'] = 'أظهر الملاحظات لمن يتم تقييمهم';
$string['showscorestudent'] = 'أظهر النقاط لكل مستوى لمن يتم تقييمهم';
$string['showscoreteacher'] = 'أظهر النقاط لكل مستوى خلال التقييم';
$string['sortlevelsasc'] = 'اتجاه الفرز للمستويات:';
$string['sortlevelsasc0'] = 'تنازلياً حسب عدد النقاط';
$string['sortlevelsasc1'] = 'تصاعدياً حسب عدد النقاط';
