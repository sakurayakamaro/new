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
 * Strings for component 'cohort', language 'ar', version '2.9'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'إضافة فوج جديد';
$string['allcohorts'] = 'جميع الدفعات';
$string['anycohort'] = 'أي';
$string['assign'] = 'تعيين';
$string['assigncohorts'] = 'تعيين أعضاء الدفعة';
$string['assignto'] = 'أعضاء فوج \'{$a}\'';
$string['backtocohorts'] = 'عودة إلى الأفواج';
$string['bulkadd'] = 'أضف إلى الدفعة';
$string['bulknocohort'] = 'لا توجد دفعات متاحة للعرض';
$string['categorynotfound'] = 'لم يتم العثور على الفئة {$a} أو ليس لديك إذن لإنشاء دفعة هناك. سيتم استخدام السياق الافتراضي.';
$string['cohort'] = 'فوج';
$string['cohorts'] = 'الأفواج';
$string['cohortsin'] = '{$a}: الأفواج المتاحة';
$string['component'] = 'المصدر';
$string['contextnotfound'] = 'لم يتم العثور على السياق {$a} أو ليس لديك إذن لإنشاء دفعة هناك. سيتم استخدام السياق الافتراضي.';
$string['csvcontainserrors'] = 'تم العثور على أخطاء في بيانات CSV. انظر الى التفاصيل بالأسفل.';
$string['csvcontainswarnings'] = 'تم العثور على تحذيرات في بيانات CSV. انظر الى التفاصيل بالأسفل.';
$string['csvextracolumns'] = 'سيتم تجاهل العمود (الأعمدة) {$a} .';
$string['currentusers'] = 'المستخدمون الحاليون';
$string['currentusersmatching'] = 'المستخدمون الحاليون المطابقون';
$string['defaultcontext'] = 'السياق الافتراضي';
$string['delcohort'] = 'حذف الفوج';
$string['delconfirm'] = 'هل حقاً تريد حذف فوج \'{$a}\'؟';
$string['description'] = 'الوصف';
$string['displayedrows'] = '{$a->displayed} الصفوف تعرض من {$a->total}.';
$string['duplicateidnumber'] = 'يوجد فوج مع نفس رقم المعرّف موجود مسبقاً';
$string['editcohort'] = 'تحرير الفوج';
$string['eventcohortcreated'] = 'إنشاء  دفعة';
$string['eventcohortdeleted'] = 'حذف الدفعة';
$string['eventcohortmemberadded'] = 'تمت إضافة المستخدم إلى الدفعة';
$string['eventcohortmemberremoved'] = 'تمت إزالة المستخدم من الدفعة';
$string['eventcohortupdated'] = 'تم تحديث الدفعة';
$string['external'] = 'دفعة خارجية';
$string['idnumber'] = 'معرّف الفوج';
$string['memberscount'] = 'حجم الفوج';
$string['name'] = 'الاسم';
$string['namecolumnmissing'] = 'يوجد خطأ ما في تنسيق ملف CSV. يرجى التحقق من أنه يتضمن أسماء الأعمدة الصحيحة. لإضافة مستخدمين إلى الدفعة، انتقل إلى "تحميل المستخدمين" في إدارة الموقع.';
$string['namefieldempty'] = 'اسم الحقل لا يمكن أن يكون فارغاً';
$string['nocomponent'] = 'تم إنشاؤه يدوياً';
$string['potusers'] = 'المستخدمون المحتملون';
$string['potusersmatching'] = 'المستخدمون المحتملون المطابقون';
$string['preview'] = 'معاينة';
$string['removeuserwarning'] = 'إزالة مستخدمين من الدفعة قد يؤدي إلى إلغاء التحاقهم من المستخدمين في مقررات متعددة و الذي يتضمن حذفهم من إعدادات المستخدم و الدرجات ، و غيرها من عضوية المجموعات و معلومات المستخدم من المقررات المتأثرة .';
$string['search'] = 'بحث';
$string['searchcohort'] = 'البحث في الأفواج';
$string['selectfromcohort'] = 'إختر أعضاءً من الفوج';
$string['systemcohorts'] = 'نظام الدفعات';
$string['unknowncohort'] = 'دفعة غير معروفة ({$a}) !';
$string['uploadcohorts'] = 'تحميل الدفعات';
$string['uploadcohorts_help'] = 'يمكن تحميل الدفعات عبر ملف نصي. يجب أن يكون تنسيق الملف كما يلي:
* يحتوي كل سطر من الملف على سجل واحد
* كل سجل عبارة عن سلسلة من البيانات مفصولة بفواصل (أو محددات أخرى)
* يحتوي السجل الأول على قائمة بأسماء الحقول التي تحدد تنسيق الباقي الملف
* اسم الحقل المطلوب هو الاسم
* أسماء الحقول الاختيارية هي idnumber ، والوصف ، و descriptionformat ، مرئية ، والسياق ، والفئة ، category_id ، category_idnumber ، category_path';
$string['uploadedcohorts'] = 'تم تحميل {$a} دفعات';
$string['useradded'] = 'إضافة المستخدم للدفعة "{$a}"';
$string['visible'] = 'مرئي';
$string['visible_help'] = 'يمكن عرض أي دفعة من قبل المستخدمين الذين لديهم قدرة "moodle / cohort: view" في سياق الدفعات.
يمكن أيضًا عرض الدفعات المرئية بواسطة المستخدمين في الدورات المواد الأساسية.';
