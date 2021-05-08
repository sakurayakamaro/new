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
 * Strings for component 'qtype_combined', language 'ar', version '2.9'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['correct_choice_embed_code'] = '[[{$a->qid}:{$a->qtype}:{correct choice}]]';
$string['embeddedquestionremovedfromform'] = 'واحد أو أكثر من الأسئلة المضمنة قد تمت إزالته من نص السؤال. بيانات تلك الأسئلة المزالة ما تزال ظاهرة أدناه، ولكن ستتم إزالتها بشكل نهائي عنما تنقر على زر \'التحقق من نص السؤال\' أو تنقر على \'حفظ التغييرات\'، ما لم تقم بإعادة الترميز البرمجي المُضَّمن إلى نص السؤال مرة أخرى.';
$string['err_accepts_vertical_or_horizontal_layout_param'] = '<p>إن نوع السؤال \'{$a}\' يسمح لك بتحديد تخطيط نوع سؤالك على النحو الآتي
:<ul>
 <li>[[{question identifier}:{$a}:v]] عمودي أو</li>
  <li>[[{question identifier}:{$a}:h]] أفقي.</li></ul>
  <p>ينبغي عليك عدم إدخال أي شيء آخر بعد النقطتين الأخيرتين.</p>';
$string['err_duplicateids'] = 'كل عينة لسؤال فرعي عليها أن تمتلك مُعرَّفاً مختلفاً. لقد استعملتَ المُعرَّفات الآتية لأكثر من سؤال \'{$a}\'.';
$string['err_insufficientnoofcodeparts'] = 'خطأ، ترميزك البرمجي لتضمين مسيطر السؤال \'{$a->fullcode}\' فيه عدد قليل من الأجزاء المفصولة بنقطتين. ينبغي أن يكون لديك على الأقل مُعرَّف السؤال متبوعاً بمُعرَّف نوع السؤال.';
$string['err_invalid_number'] = 'إن نوع السؤال \'{$a}\' يتوقع وجود رقم بعد مُعرَّف نوع السؤال، ترميزك البرمجي للتضمين ينبغي أن يكون بالشكل [[{your question id}:{$a}:{a number here}]]';
$string['err_invalid_width_specifier_postfix'] = '<p>إن نوع السؤال \'{$a}\' يسمح لك بتحديد عُرض سؤالك على النحو الآتي:
<ul>
 <li>[[{question identifier}:{$a}:____]] حيث أن عرض مربع الإدخال سيعتمد على عدد الشُّرَط التحتانية أو</li>
  <li>[[{question identifier}:{$a}:__10__]] حيث سيعتمد عرض مربع الإدخال على الرقم.</li></ul>
  <p>ينبغي عليك عدم إدخال أي شيء آخر بعد النقطتين الأخيرتين.</p>';
$string['err_invalidquestionidentifier'] = 'ترميزك البرمجي لمُعرَّف السؤال يحتوي على واحد أو أكثر من الرموز الأبجدية الرقمية.';
$string['err_subq_not_included_in_question_text'] = 'يبدو أنك قد أزلتَ هذا السؤال من نص السؤال. قم بتضمين هذا السؤال في النموذج مستعلاً الترميز البرمجي {$a} أو ستتم إزالته تماماً عند تسليمك لهذا النموذج مرة أخرى.';
$string['err_thisqtypecannothavemorethanonecontrol'] = 'لقد حاولتَ تضمين أكثر من مسيطر واحد لنوع السؤال \'{$a->qtype}\' مستعملاً اسم عينة السؤال \'{$a->qid}\'. نوع الأسئلة هذا يسمح لك بتضمين مسيطر واحد لكل عينة سؤال.';
$string['err_thisqtypedoesnotacceptextrainfo'] = 'إن نوع السؤال مُضمَّن بالترميز البرمجي [[{your question id}:{$a}]].
لا ينبغي عليك وضع أي شيء بعد مُعرَّف نوع السؤال، ولا حتى النقطتين.';
$string['err_unrecognisedqtype'] = 'إن مُعرَّف نوع السؤال \'{$a->qtype}\' الذي أدخلته في الترميز البرمجي المُضمَّن
\'{$a->fullcode}\' غير معروف.';
$string['err_you_must_provide_third_param'] = 'ينبغي عليك إعطاء معامل ثالث لنوع السؤال {$a}.';
$string['incorrectfeedback'] = 'تغذية راجعة لأي إجابة غير صحيحة';
$string['pluginname'] = 'مركب';
$string['pluginnameadding'] = 'إضافة سؤال مركب';
$string['pluginnameediting'] = 'تحرير سؤال مركب';
$string['subqheader'] = 'إدخال \'{$a->qtype}\' \'{$a->qid}\'';
$string['subqheader_not_in_question_text'] = 'إدخال \'{$a->qtype}\' \'{$a->qid}\' (غير مُضمَّن في نص السؤال).';
$string['updateform'] = 'التحقق من نص السؤال وتحديث النموذج';
$string['validationerror'] = 'جزء من إجابتك يتطلب الانتباه: {$a}';
$string['validationerror_multiplecontrols'] = 'الإدخالات {$a->controlnos} ({$a->controlname}) - {$a->error}';
$string['validationerror_singlecontrol'] = 'الإدخال {$a->controlno} ({$a->controlname}) - {$a->error}';
$string['validationerrors'] = 'أجزاء من إجابتك تتطلب الانتباه: {$a}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] أو [[{$a->qid}:{$a->qtype}:h]] إعتماداً على رغبتك بترتيب الخيارات عمودياً أم أفقياً.';
$string['weighting'] = 'الأوزان';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{width specifier}]] أو مجرد [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = 'واحد من إجاباتك صحيح.';
$string['yougotnright'] = '{$a->num} من إجاباتك صحيحة.';
