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
 * Strings for component 'tool_uploaduser', language 'ar', version '2.9'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'السماح بالحذف';
$string['allowrenames'] = 'السماح بإعادة التسمية';
$string['allowsuspends'] = 'السماح بتعليق وتفعيل الحسابات';
$string['assignedsysrole'] = 'دور النظام المُعيَّن {$a}';
$string['csvdelimiter'] = 'محدد CSV';
$string['defaultvalues'] = 'القيم الافتراضية';
$string['deleteerrors'] = 'إحذف الأخطاء';
$string['encoding'] = 'الترميز';
$string['errormnetadd'] = 'لا يمكن إضافة المستخدمين عن بعد';
$string['errors'] = 'الأخطاء';
$string['nochanges'] = 'لا يوجد تغير';
$string['pluginname'] = 'تحميل المستخدم';
$string['renameerrors'] = 'أخطاء إعادة التسمية';
$string['requiredtemplate'] = 'مطلوب. يمكنك استخدام بناء قالب جملة هنا (%l = lastname, %f = firstname, %u = username). انظر التعليمات للمزيد من التفاصيل و الأمثلة.';
$string['rowpreviewnum'] = 'استعراض الصفوف';
$string['unassignedsysrole'] = 'دور النظام غير المعيّن {$a}';
$string['uploadpicture_baduserfield'] = 'سمة المستخدم المحددة غير صالحة. من فضلك، حاول مرة أخرى.';
$string['uploadpicture_cannotmovezip'] = 'تعذر نقل الملف المضغوط إلى مجلد مؤقت.';
$string['uploadpicture_cannotprocessdir'] = 'لا يمكن معالجة الملفات المضغوطة';
$string['uploadpicture_cannotsave'] = 'لا يمكن حفظ صورة للمستخدم {$a}. تحقق من ملف الصورة الأصلي .';
$string['uploadpicture_cannotunzip'] = 'لا يمكن فك ملف الصور المضغوط';
$string['uploadpicture_invalidfilename'] = 'ملف الصورة {$a} يحتوي على أحرف غير صالحة في اسمها .. تجاوز.';
$string['uploadpicture_overwrite'] = 'الكتابة فوق صور المستخدم الموجودة ؟';
$string['uploadpicture_userfield'] = 'سمة المستخدم و المستخدمة لمطابقة الصورة:';
$string['uploadpicture_usernotfound'] = 'المستخدم مع  \'{$a->userfield}\' قيمة  \'{$a->uservalue}\' غير موجود. تجاوز.';
$string['uploadpicture_userskipped'] = 'تخطي المستخدم {$a}  (لديه بالفعل صورة).';
$string['uploadpicture_userupdated'] = 'صورة محدثة للمستخدم {$a}.';
$string['uploadpictures'] = 'رفع صور المستخدمين';
$string['uploadpictures_help'] = 'ويمكن تحميل الصور للمستخدم كملف مضغوط من ملفات الصور. يجب تسمية ملفات الصور المختارة من قبل المستخدم-attribute.extension، على سبيل المثال user1234.jpg لمستخدم باسم المستخدم user1234.';
$string['uploaduser:uploaduserpictures'] = 'تحميل صور المستخدم';
$string['uploadusers'] = 'رفع المستخدمين';
$string['uploadusers_help'] = 'ويمكن تحميل المستخدمين (والمسجلين اختياريا في المقررات) عن طريق ملف نصي. تنسيق الملف يجب أن يكون على النحو التالي:
* كل سطر من الملف يحتوي على سجل واحد
* كل سجل هو عبارة عن سلسلة من البيانات مفصولة بفواصل (أو محددات أخرى)
* يحتوي السجل الأول على قائمة أسماء الحقول التي تحدد شكل بقية الملف
* أسماء الحقول المطلوبة هي اسم المستخدم، كلمة السر، الاسم الأول، اسم العائلة، البريد الإلكتروني';
$string['uploaduserspreview'] = 'معاينة تحميل المستخدمين';
$string['uploadusersresult'] = 'نتائج رفع المستخدمين';
$string['useraccountupdated'] = 'تم تحديث مستخدم';
$string['useraccountuptodate'] = 'المستخدم حتى تاريخه';
$string['userdeleted'] = 'تم حذف المستخدم';
$string['userrenamed'] = 'تم تغير اسم مستخدم';
$string['userscreated'] = 'تم إنشاء المستخدمين';
$string['usersdeleted'] = 'تم حذف المستخدمين';
$string['usersrenamed'] = 'تمت إعادة تسمية المستخدمين';
$string['usersskipped'] = 'تم تخطي المستخدمين';
$string['usersupdated'] = 'تم تحديث المستخدمين';
$string['usersweakpassword'] = 'المستخدمين الذين لديهم كلمة مرور ضعيفة';
$string['uubulk'] = 'حدد الجزء الأكبر للعمليات';
$string['uubulkall'] = 'كل المستخدمين';
$string['uubulknew'] = 'المستخدمون الجدد';
$string['uubulkupdated'] = 'المستخدمون الذين تم تحديثهم';
$string['uucsvline'] = 'سطر CSV';
$string['uulegacy1role'] = '(الطالب الأصلي) = 1 typeN';
$string['uulegacy2role'] = '(المعلم الأصلي) typeN = 2';
$string['uulegacy3role'] = '(الأصل معلم بدون صلاحية التحرير) typeN = 3';
$string['uunoemailduplicates'] = 'أمنع تكرار البريد الإلكتروني';
$string['uuoptype'] = 'نوع الرفع';
$string['uuoptype_addinc'] = 'إضافة الكل، إلحاق عدد من أسماء المستخدمين إذا لزم الأمر';
$string['uuoptype_addnew'] = 'أضف الجديد فقط، وتخطى المستخدمين الموجودين';
$string['uuoptype_addupdate'] = 'أضف المستخدم الجديد وقم بتحديث المستخدمين الحاليين';
$string['uuoptype_update'] = 'حدث المستخدمين الحاليين فقط';
$string['uupasswordcron'] = 'ولدت من cron';
$string['uupasswordnew'] = 'كلمة مرور المستخدم الجديدة';
$string['uupasswordold'] = 'كلمة مرور المستخدم الحالية';
$string['uustandardusernames'] = 'أسماء المستخدمين المعياري';
$string['uuupdateall'] = 'تجاوز مع الإعدادات الافتراضية و الملف';
$string['uuupdatefromfile'] = 'تجاوز بالملف';
$string['uuupdatemissing'] = 'ملء المفقود من الملف و الإعدادات الافتراضية';
$string['uuupdatetype'] = 'تفاصيل المستخدم الحالية';
$string['uuusernametemplate'] = 'قالب اسم المستخدم';
