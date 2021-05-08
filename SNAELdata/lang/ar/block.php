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
 * Strings for component 'block', language 'ar', version '2.9'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'انقل الى زاوية التصغير';
$string['anypagematchingtheabove'] = 'أي صفحة متطابقة مع الصفحة العليا';
$string['appearsinsubcontexts'] = 'يظهر في اامتحويات لفرعية';
$string['assignrolesinblock'] = 'اعتماد صلاحيات في {$a} الصندوق';
$string['blocksettings'] = 'إعدادات الكتلة';
$string['bracketfirst'] = '{$a} أولاً';
$string['bracketlast'] = '{$a} آخراً';
$string['configureblock'] = 'إجراء تغير على الصندوق';
$string['contexts'] = 'سياقات الصفحة';
$string['contexts_help'] = 'السياقات أكثر تحديداً لنوع الصفحات حيث الكتل التي يمكن عرضها ضمن موقعها الأصلي . يوجد عدة خيارات هنا اعتماداً على موقع الكتلة الأساسي و موقعك الحالي . كمثال يمكنك تقييد ظهور الكتل في المنتدى فقط في المقرر و ذلك بإضافة الكتل للمقرر (مكنها من الظهور في كل الصفحات الفرعية) ، ثم اذهب إلى المنتدى و حرر إعدادات الكتل إلى العرض فقط في المنتدى .';
$string['createdat'] = 'الموضع الأصلي للكتلة';
$string['createdat_help'] = 'الموقع الأساسي الذي تم إنشاء الكتل فيه . إعدادات الكتل قد يجعلها تظهر في أماكن أخرى (سياقات) داخل الموقع الأساسي .
كمثال كتلة أنشئت في صفحة المقرر يمكن عرضها في الأنشطة داخل ذلك المقرر .
الكتلة المنشأة في الصفحة الأولى يمكن عرضها في كل الموقع';
$string['defaultregion'] = 'المنطقة الافتراضية';
$string['defaultregion_help'] = 'المظاهر قد تعرّف اسما واحدا أو من مناطق الكتل حيث تظهر الكتل . هذه الإعدادات تحدد أي من هذه الكتل تريدها أن تظهر بشكل افتراضي . النطاق يمكن تجاوزه في صفحات محددة إذا لزم الأمر  ..';
$string['defaultweight'] = 'الوزن الافتراضي';
$string['defaultweight_help'] = 'تسْمحُ لك القيمةِ الأفتراضي إخْتياَر المكان الذي تُريدُ الكتلةَ أَنْ تَظْهرَ فيه ضمن المنطقةِ المُختَاَرةِ، أمّا في الأعلى أَو الأسفل. مع العلم أنه سيتم حساب الموقعَ النهائيَ للكتلة مع باقي الكُتَل في تلك المنطقةِ (على سبيل المثال، فقط كتلة واحدة يُمْكِنُ أَنْ تَكُونَ في الأعلى). يُمْكِنُ أَنْ تُتجاوزَ هذه القيمةِ على الصفحاتِ المعيّنةِ إذا كان هذا مطلوبا.';
$string['deleteblock'] = 'حذف الصندوق';
$string['deleteblockcheck'] = 'هل انت متأكد وواثق من حذف عنوان الصندوق';
$string['deleteblockwarning'] = 'أنت على وشك حذف كتلة تظهر في مكان آخر.

موقع الكتلة الأصلي: {$ a-> location}
تعرض على الصفحات من النوع: {$ a-> pagetype}

هل أنت متأكد أنك تريد المتابعة؟';
$string['deletecheck'] = 'حذف الصندوق';
$string['dockblock'] = 'تصغير الصندوق';
$string['hideblock'] = 'اخفاء الصندوق';
$string['hidedockpanel'] = 'اخفاء صندوق التصغير';
$string['hidepanel'] = 'اخفاء اللوحة';
$string['moveblock'] = 'نقل الصندوق';
$string['moveblockafter'] = 'نقل الصندوق بعد الصندوق التالي';
$string['moveblockbefore'] = 'نقل الصندوق الى الصندوق الذي قبل';
$string['moveblockinregion'] = 'نقل الصندوق الى المنطقة';
$string['movingthisblockcancel'] = 'تحريك هذه الكتلة ({$a})';
$string['onthispage'] = 'في هذه الصفحة';
$string['pagetypes'] = 'أنواع الصفحات';
$string['pagetypewarning'] = 'إنّ نوعَ الصفحةِ المحدّدِ سابقاً لَمْ يَعُدْ قابلاً للاختيار. رجاءً إخترْ نوعَ الصفحةِ الأكثر ملائمة من القائمة التالية.';
$string['region'] = 'المنطقة';
$string['restrictpagetypes'] = 'عرض أنواع الصفحات';
$string['showblock'] = 'عرض الصندوق';
$string['showoncontextandsubs'] = 'العرض في \'{$a}\' وأي صفحات أخرى ضمنه';
$string['showoncontextonly'] = 'فقط إعرض في \'{$a}\'';
$string['showonentiresite'] = 'إعرض في كافة أنحاء الموقع';
$string['showonfrontpageandsubs'] = 'إعرض في الصفحة الأمامية وأي صفحات مضافة إليها';
$string['showonfrontpageonly'] = 'أعرض في الصفحة الأمامية فقط';
$string['subpages'] = 'إختر الصفحات';
$string['thisspecificpage'] = 'هذه الصفحة بحد ذاتها';
$string['undockall'] = 'إلغاء إرساء الكل';
$string['undockblock'] = 'ازالة تصغير الصندوق';
$string['undockitem'] = 'إلغاء إرساء هذه الكتلة';
$string['visible'] = 'مرئي';
$string['weight'] = 'الوزن';
$string['wherethisblockappears'] = 'حيثما تظهر هذه الكتلة';
