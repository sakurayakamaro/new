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
 * Strings for component 'blog', language 'ar', version '2.9'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'أضف مدخل جديد';
$string['addnewexternalblog'] = 'تسجيل مدونة خارجية';
$string['assocdescription'] = 'إن كنت تكتب عن مقرر و/أو وحدة نشاط، قم بتحديدهم من هنا.';
$string['associated'] = 'مرتبطة {$a}';
$string['associatewithcourse'] = 'مدونة عن المقرر الدراسي {$a->coursename}';
$string['associatewithmodule'] = 'مدونة عن {$a->modtype}: {$a->modname}';
$string['association'] = 'ارتباط';
$string['associations'] = 'ارتباطات';
$string['associationunviewable'] = 'لا يمكن للآخرين عرض هذه المشاركة إلى أن يتم ربطها بمقرر ما أو يتم تغيير حقل \'انشر إلى\'';
$string['autotags'] = 'إضافة هذه الوسوم';
$string['autotags_help'] = 'أدخل واحد أو أكثر من الوسوم المحلية (مفصولة بفوارز) التي تريد إضافتها تلقائياً إلى كل مشاركة مدونة تم نسخها من المدونة الخارجية إلى مدونتك المحلية.';
$string['backupblogshelp'] = 'في حالة تشغيله، سيتم تضمين المدونات في الحفظ الاحتياطي للموقع';
$string['blockexternalstitle'] = 'مدونات خارجية';
$string['blocktitle'] = 'عنوان كتلة "وسوم المدونة"';
$string['blog'] = 'مدونة';
$string['blogaboutthis'] = 'مدون عن هذا الـ {$a->type}';
$string['blogaboutthiscourse'] = 'اكتب تدوينة حول هذا المقرر';
$string['blogaboutthismodule'] = 'اكتب تدوينة حول هذا {$a}';
$string['blogadministration'] = 'إدارة المدونة';
$string['blogdeleteconfirm'] = 'احذف هذه المدونة';
$string['blogdisable'] = 'التدوين غير مفعّل!';
$string['blogentries'] = 'التدوينات';
$string['blogentriesabout'] = 'التدوينات عن {$a}';
$string['blogentriesbygroupaboutcourse'] = 'التدوينات عن {$a->course} بواسطة {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'التدوينات عن {$a->mod} بواسطة {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'التدوينات عن {$a->course} بواسطة {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'التدوينات عن {$a->mod} بواسطة {$a->user}';
$string['blogentrybyuser'] = 'تدوينة بواسطة {$a}';
$string['blogpreferences'] = 'تفضيلات المدونة';
$string['blogs'] = 'مدونات';
$string['blogscourse'] = 'مدونة المقرر الدراسي';
$string['blogssite'] = 'مدونة الموقع الرئيسسي';
$string['blogtags'] = 'وسوم المدونة';
$string['cannotviewcourseblog'] = 'ليس لديك الإذن المطلوب لعرض المدونات في هذا المقرر';
$string['cannotviewcourseorgroupblog'] = 'ليس لديك الإذن المطلوب لعرض المدونات في هذا المقرر أو هذه المجموعة';
$string['cannotviewsiteblog'] = 'ليس لديك الإذن المطلوب لعرض جميع مدونات الموقع';
$string['cannotviewuserblog'] = 'ليس لديك الإذن المطلوب لقراءة مدونات المستخدمين';
$string['configexternalblogcrontime'] = 'كم مرة يتحقق مودل من المدونات الخارجية بحثاً عن تدوينات جديدة.';
$string['configmaxexternalblogsperuser'] = 'عدد المدونات الخارجية المسموح للمستخدم بربطها بمدونة مودل الخاصة به.';
$string['configuseblogassociations'] = 'تمكين ربط مدخلات المدونات بالمقررات الدراسية ووحدات المقررات الدراسية';
$string['configuseexternalblogs'] = 'يمكن المستخدمين من تحديد خلاصات مدونة خارجية. يتحقق مودل من هذه الخلاصات بشكل دوري وينسخ التدوينات الجديدة للمدونة المحلية لذلك المستخدم.';
$string['courseblog'] = 'مدونة المقرر الدراسي: {$a}';
$string['courseblogdisable'] = 'مدونات المقرر غير مفعّلة';
$string['courseblogs'] = 'يستطيع المستخدمون رؤية مدونات الأشخاص المشتركين معهم في المقرر الدراسي';
$string['deleteblogassociations'] = 'حذف متعلقات المدونة';
$string['deleteblogassociations_help'] = 'عند تأشيره فلن تعود مشاركات المدونة مرتبطة بهذا المساق أو أي من أنشطته وموارده. لن يتم حذف مدخلات المدونة نفسها.';
$string['deleteexternalblog'] = 'إلغاء تسجيل هذه المدونة الخارجية';
$string['deleteotagswarn'] = 'هل أنت متأكد من حذف هذه الوسوم من جميع التدوينات، وكذلك حذفها من النظام؟';
$string['description'] = 'وصف';
$string['description_help'] = 'أدخل جملة أو اثنتين تلخص محتويات مدونتك الخارجية. (إذا لم توفر وصفاً لها، سيتم استخدام الوصف المسجل في مدونتك الخارجية).';
$string['donothaveblog'] = 'ليس لديك مدونتك الخاصة، عذراً.';
$string['editentry'] = 'تحرير تدوينة';
$string['editexternalblog'] = 'تحرير هذه المدونة الخارجية';
$string['emptybody'] = 'لا يمكن ترك محتوى المدونة فارغاً';
$string['emptyrssfeed'] = 'العنوان الذي أدخلته لا يشير إلى خلاصات RSS صالحة';
$string['emptytitle'] = 'لا يمكن ترك عنوان المدونة فارغاً';
$string['emptyurl'] = 'يجب أن تحدد عنوان لخلاصات RSS صالحة';
$string['entrybody'] = 'متن بند المدونة';
$string['entrybodyonlydesc'] = 'وصف المشاركة';
$string['entryerrornotyours'] = 'هذا المدخل ليس خاص بك';
$string['entrysaved'] = 'تم حفظ مشاركتك';
$string['entrytitle'] = 'عنوان مدخل';
$string['eventblogassociationadded'] = 'انشاء المدونة';
$string['eventblogentriesviewed'] = 'شوهدت محتويات المدونة';
$string['evententryadded'] = 'اضافة محتوى المدنة بنجاح';
$string['evententrydeleted'] = 'حذف محتوى المدونة بنجاح';
$string['evententryupdated'] = 'تم تحديث مدخل بلوق';
$string['externalblogcrontime'] = 'جدولة مشغل الوظائف الدورية للمدونة الخارجية';
$string['externalblogdeleteconfirm'] = 'هل حقاً تريد إلغاء تسجيل هذه المدونة الخارجية؟';
$string['externalblogdeleted'] = 'تم إلغاء تسجيل المدونة الخارجية';
$string['externalblogs'] = 'مدونات خارجية';
$string['feedisinvalid'] = 'هذه الخلاصة غير صالحة';
$string['feedisvalid'] = 'هذه الخلاصة صالحة';
$string['filterblogsby'] = 'ترشيح حسب...';
$string['filtertags'] = 'ترشيح الوسوم';
$string['filtertags_help'] = 'يمكنك استعمال هذه الميزة لترشيح المدونات التي تريدها. إذا حددت الوسوم (مفصولة بفوارز) هنا، فسيتم نسخ المدخلات الموسومة بهذه الوسوم فقط من المدونة الخارجية.';
$string['groupblog'] = 'مدونة مجموعة: {$a}';
$string['groupblogdisable'] = 'مدونة المجموعة غير مفعلة';
$string['groupblogentries'] = 'مدخلات المدونات المرتبطة بـ {$a->coursename} بواسطة مجموعة {$a->groupname}';
$string['groupblogs'] = 'يستطيع المستخدمون فقط رؤية مدونات الأشخاص المشتركين معهم في المجموعة';
$string['incorrectblogfilter'] = 'نوع مرشح المدونة المحدد غير صحيح';
$string['intro'] = 'تم إنشاء هذه التغذية الإخبارية  بشكل آلي من مدونة أو أكثر';
$string['invalidgroupid'] = 'معرف مجموعة غير صالح';
$string['invalidurl'] = 'لا يمكن الوصول لهذا العنوان';
$string['linktooriginalentry'] = 'رابط للتدوينة الأصلية';
$string['maxexternalblogsperuser'] = 'العدد الأقصى من المدونات الخارجية لكل مستخدم';
$string['myprofileuserblogs'] = 'عرض جميع مشاركات المدونة';
$string['name'] = 'الاسم';
$string['name_help'] = 'أدخل اسماً واصفاً لمدونتك الخارجية. (سيتم استعمال عنوان مدونتك الخارجية إن لم تكتب اسماً).';
$string['noentriesyet'] = 'لا يوجد مدلات مرئية هناء';
$string['noguestpost'] = 'لا يستطيع الضيف إضافة مدونات';
$string['nopermissionstodeleteentry'] = 'ليس لديك الإذن المطلوب لحذف هذه التدوينة';
$string['norighttodeletetag'] = 'انت لست مخول بحذف هذا - {$a}';
$string['nosuchentry'] = 'تدوينة غير موجودة';
$string['notallowedtoedit'] = 'غير مسموح لك القيام بتحرير/تعديل هذا المدخل';
$string['numberofentries'] = 'مدخلات: ش';
$string['numberoftags'] = 'عدد العلامات التي ستعرض';
$string['page-blog-edit'] = 'صفحات تحرير المدونة';
$string['page-blog-index'] = 'صفحات قوائم المدونات';
$string['page-blog-x'] = 'كافة صفحات المدونات';
$string['pagesize'] = 'عدد مدخلات المدونة في كل صفحة';
$string['permalink'] = 'رابط دائم';
$string['personalblogs'] = 'يستطيع المستخدمون مشاهدة المدونات الخاصة بهم فقط';
$string['preferences'] = 'خيارات';
$string['publishto'] = 'انشر إلى';
$string['publishto_help'] = 'لديك 3 خيارات:

* شخصي (مسودة) - فقط أنت والإداريين يمكنهم رؤية هذه المداخلة
* أي شخص على هذا الموقع - أي سخص مسجل في هذا الموقع يمكنه رؤية هذه المداخلة
* أي شخص في العالم - يمكن لأي شخص، متضمناً الضيوف قراءة هذه المداخلة';
$string['publishtocourse'] = 'المستخدمين المشتركين معك بمقرر';
$string['publishtocourseassoc'] = 'أعضاء من المقرر المرتبط';
$string['publishtocourseassocparam'] = 'أعضاء في {$a}';
$string['publishtogroup'] = 'المستخدمين المشتركين معك في مجموعة';
$string['publishtogroupassoc'] = 'أعضاء مجموعتك في المقرر المرتبط';
$string['publishtogroupassocparam'] = 'أعضاء مجموعتك في {$a}';
$string['publishtonoone'] = 'أنت (مسودة)';
$string['publishtosite'] = 'أي أحد في هذا الموقع';
$string['publishtoworld'] = 'أي أحد في العالم';
$string['readfirst'] = 'إقرأ هذه أولاً';
$string['relatedblogentries'] = 'تدوينات ذات صلة';
$string['retrievedfrom'] = 'جلب من';
$string['rssfeed'] = 'مغذي المدونة  باستخدام تكنولوجي  RSS';
$string['searchterm'] = 'البحث: {$a}';
$string['settingsupdatederror'] = 'لقد حدث خطأ ما، لا يمكن تحديث إعدادات المدونة';
$string['siteblog'] = 'مدونة الموقع: {$a}';
$string['siteblogdisable'] = 'مدونات الموقع غير مفعلة';
$string['siteblogheading'] = 'مدونة الموقع';
$string['siteblogs'] = 'يستطيع جميع المستخدمين مشاهدة كل بنود المدونات';
$string['tagdatelastused'] = 'أرخ العلامة المستخدة مؤخرا';
$string['tagparam'] = 'وسم: {$a}';
$string['tags'] = 'الوسوم';
$string['tagsort'] = 'رتب العلامة المعروضة بي';
$string['tagtext'] = 'نص العلامة';
$string['timefetched'] = 'وقت آخر مزامنة';
$string['timewithin'] = 'إعرض الوسوم المستعملة ضمن هذا العدد من الأيام';
$string['updateentrywithid'] = 'تحديث مدخل';
$string['url'] = 'رابط مغذي خدمة الأخبار';
$string['url_help'] = 'أدخل عنوان الخلاصات RSS للمدونة الخارجية';
$string['useblogassociations'] = 'تمكين ربط المدونات';
$string['useexternalblogs'] = 'تمكين المدونات الخارجية';
$string['userblog'] = 'مدونة المستخدم: {$a}';
$string['userblogentries'] = 'مدخلات المدونات من قِبَل {$a}';
$string['valid'] = 'صالح';
$string['viewallblogentries'] = 'كل المدخلات حول هذا {$a}';
$string['viewallmodentries'] = 'عرض كل المدخلات حول هذا {$a->type}';
$string['viewallmyentries'] = 'عرض كافة تدويناتي';
$string['viewblogentries'] = 'التدوينات حول هذا {$a->type}';
$string['viewblogsfor'] = 'عرض كل التدوينات لـ...';
$string['viewcourseblogs'] = 'معاينة كل التدوينات لهذا المقرر الدراسي';
$string['viewentriesbyuseraboutcourse'] = 'معاينة التدوينات حول هذا المقرر الدراسي والتي من قِبَل {$a}';
$string['viewgroupblogs'] = 'عرض تدوينات المجموعة...';
$string['viewgroupentries'] = 'تدوينات المجموعة';
$string['viewmodblogs'] = 'المدونات لوحدة...';
$string['viewmodentries'] = 'مدونات الوحدة';
$string['viewmyentries'] = 'تدويناتي';
$string['viewmyentriesaboutcourse'] = 'عرض تدويناتي حول هذا المقرر';
$string['viewmyentriesaboutmodule'] = 'عرض تدويناتي حول هذا {$a}';
$string['viewsiteentries'] = 'عرض كل المداخلات';
$string['viewuserentries'] = 'عرض كل تدوينات {$a}';
$string['worldblogs'] = 'العالم يستطيع قراءة التدوينات الموضوعة لتكون متاحة للعالم';
$string['wrongpostid'] = 'مُعرَّف المشاركة غير صحيح';
