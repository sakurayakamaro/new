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
 * Strings for component 'tool_xmldb', language 'ar', version '2.9'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'فعلي';
$string['aftertable'] = 'بعد الجدول:';
$string['back'] = 'رجوع';
$string['backtomainview'] = 'العودة الي الرئيسي';
$string['cannotuseidfield'] = 'تعذر إدراج حقل المُعرَّف "id" لأنه عمود تلقائي.';
$string['change'] = 'قم بالتغيير';
$string['charincorrectlength'] = 'طول غير صحيح لحقل المحارف';
$string['check_bigints'] = 'إبحث عن أعداد صحيحة غير صالحة في قاعدة البيانات';
$string['check_defaults'] = 'إبحث عن قيم افتراضية متعارضة';
$string['check_foreign_keys'] = 'تحقق من انتهاكات المفاتيح الخارجية';
$string['check_indexes'] = 'البحث عن فهارس قاعدة بيانات مفقودة';
$string['check_oracle_semantics'] = 'البحث عن دلالات طول غير صحيحة';
$string['checkbigints'] = 'تحقق من الأعداد الصحيحة';
$string['checkdefaults'] = 'تحقق من الافتراضيات';
$string['checkforeignkeys'] = 'تحقق من المفاتيح الخارجية';
$string['checkindexes'] = 'تحقق من الفهارس';
$string['checkoraclesemantics'] = 'تحقق من الدلالات';
$string['completelogbelow'] = '(راجع سجل كامل البحث أدناه)';
$string['confirmcheckbigints'] = 'هذه الوظيفة ستبحث عن <a href="http://tracker.moodle.org/browse/MDL-11038"> حقول عدد صحيح ذات أخطاء محتملة </a> في مخدم مودل الخاص بك، وستقوم بتوليد (ولكن بدون التنفيذ!) عبارات SQL اللازمة تلقائياً التي تجعل كل الأعداد الصحيحة في قاعدة البيانات مُعرَّفة بشكل صحيح.

بمجرد توليدها، يمكنك نسخ هذه العبارات وتنفيذها بأمان عبر واجهة SQL المفضلة لديك (لا تنسَ إجراء الحفظ الاحتياطي لبياناتك قبل القيام بذلك).

من المستحسن بشدة أن تكون مشغلاً لأحدث (+ إصدار) متاح لنسختك من مودل قبل تنفيذ البحث عن الأعداد الصحيحة المعابة.

هذه الوظيفة لا تنفذ أي إجراء يغير قاعدة البيانات (تقرأ فقط منها)، لذلك يمكن تنفيذها بأمان في أيّ لحظة.';
$string['confirmcheckdefaults'] = 'هذه الدالة ستبحث عن القيم الافتراضية الغير متناسقة في خادم مودل الخاص بك و تولد (ولكن لا تنفذ!) عبارات SQL اللازمة للحصول على كل القيم الافتراضية المعرفة بشكل صحيح. <br/> و بعد التوليد يمكنك نسخ هذه العبارة و تنفيذها عليها بأمان مع واجهة SQL الخاصة بك المفضلة (لا تنس النسخ الاحتياطي للبيانات الخاصة بك قبل القيام بذلك). <br/> و أنه يوصى أن يتم تشغيل أحدث (+ إصدار) متوفر من إطلاق مودل الخاص بك (1.8، 1.9 ، 2.X ...) قبل تنفيذ البحث في القيم الافتراضية غير متناسقة. <br /> وهذه الدالة لا تؤدي أي إجراء على قاعدة البيانات (تقرأ فقط منها )، لذلك يمكن تنفيذها بأمان في أي لحظة.';
$string['confirmcheckforeignkeys'] = 'هذه الدالة ستبحث عن الانتهاكات المحتملة في المفاتيح الخارجية المعرفة في تعريفات install.xml. (مودل لا يولد حاليا قيود المفاتيح الخارجية الفعلية في قاعدة البيانات، وهذا هو سبب البيانات غير الصحيحة التي قد تكون موجودة).

من المستحسن بشدة أن تكون مشغلاً لأحدث (+ إصدار) متاح لنسختك من مودل قبل تنفيذ البحث عن الأعداد الصحيحة المعابة.

هذه الوظيفة لا تنفذ أي إجراء يغير قاعدة البيانات (تقرأ فقط منها)، لذلك يمكن تنفيذها بأمان في أيّ لحظة.';
$string['confirmcheckindexes'] = 'هذه الدالة ستبحث عن الفهارس المفقودة المحتملة في خادم مودل الخاص بك و تولد (ولكن لا تنفذ!) تلقائيا عبارات SQL اللازمة للحفاظ على كل شيء محدث. <br/> و بعد التوليد يمكنك نسخ هذه العبارة و تنفيذها بسلام مع الخاص بك واجهة SQL المفضلة (لا تنس النسخ الاحتياطي للبيانات الخاص بك قبل القيام بذلك). <br /> وانه يوصى أن يتم تشغيل أحدث (+ إصدار) متوفر من إطلاق مودل الخاص بك (1.8، 1.9، 2. س ...) قبل تنفيذ البحث في الفهارس المفقودة. <br /> وهذه الدالة لا تؤدي أي إجراء على قاعدة البيانات (تقرأ فقط منها )، لذلك يمكن تنفيذها بأمان في أي لحظة.';
$string['confirmcheckoraclesemantics'] = 'هذه الدالة ستبحث عن <a href="https://tracker.moodle.org/browse/MDL-29322"> أعمدة Oracle VARCHAR2 باستخدام دلالات BYTE </a> في مخدم مودل الخاص بك وستقوم بتوليد (ولكن بدون التنفيذ!) عبارات SQL تلقائياً لجعل كافة الأعمدة محولة إلى استعمال دلالات CHAR بدلاً من ذلك (أفضل من أجل التوافق بين قواعد البيانات وزيادة أقصى طول للمحتويات).

بمجرد توليدها، يمكنك نسخ هذه العبارات وتنفيذها بأمان عبر واجهة SQL المفضلة لديك (لا تنسَ إجراء الحفظ الاحتياطي لبياناتك قبل القيام بذلك).

من المستحسن بشدة أن تكون مشغلاً لأحدث (+ إصدار) متاح لنسختك من مودل قبل تنفيذ البحث عن الأعداد الصحيحة المعابة.

هذه الوظيفة لا تنفذ أي إجراء يغير قاعدة البيانات (تقرأ فقط منها)، لذلك يمكن تنفيذها بأمان في أيّ لحظة.';
$string['confirmdeletefield'] = 'هل أنت متأكد تماما أنك تريد حذف هذا الحقل:';
$string['confirmdeleteindex'] = 'هل أنت متأكد تماما أنك تريد حذف الفهرس:';
$string['confirmdeletekey'] = 'هل أنت متأكد تماما أنك تريد حذف المفتاح:';
$string['confirmdeletetable'] = 'هل أنت متأكد تماما أنك تريد حذف الجدول:';
$string['confirmdeletexmlfile'] = 'هل أنت متأكد تماما أنك تريد حذف الملف:';
$string['confirmrevertchanges'] = 'هل أنت متأكد تماما أنك تريد أن تتراجع عن التغييرات التي أجريت:';
$string['create'] = 'أنشئ';
$string['createtable'] = 'أنشئ جدول:';
$string['defaultincorrect'] = 'الافتراضي غير صحيح';
$string['delete'] = 'إحذف';
$string['delete_field'] = 'إحذف الحقل';
$string['delete_index'] = 'إحذف الفهرس';
$string['delete_key'] = 'إحذف المفتاح';
$string['delete_table'] = 'إحذف الجدول';
$string['delete_xml_file'] = 'إحذف ملف XML';
$string['doc'] = 'الوثيقة';
$string['docindex'] = 'فهرس الوثائق:';
$string['documentationintro'] = 'يتم إنشاء هذه الوثائق تلقائيا من تعريف قاعدة البيانات XMLDB. هي متوفرة باللغة الإنجليزية فقط.';
$string['down'] = 'أسفل';
$string['duplicate'] = 'تكرار';
$string['duplicatefieldname'] = 'يوجد حقل آخر بنفس الاسم';
$string['duplicatefieldsused'] = 'تكرار الحقول مستخدم';
$string['duplicateindexname'] = 'تكرار اسم الفهرس';
$string['duplicatekeyname'] = 'مفتاح آخر بهذا الاسم موجود';
$string['duplicatetablename'] = 'جدول آخر بهذا الاسم موجود';
$string['edit'] = 'تحرير';
$string['edit_field'] = 'تحرير الحقل';
$string['edit_field_save'] = 'احفظ الحقل';
$string['edit_index'] = 'تحرير الفهرس';
$string['edit_index_save'] = 'احفظ الفهرس';
$string['edit_key'] = 'تحرير المفتاح';
$string['edit_key_save'] = 'احفظ المفتاح';
$string['edit_table'] = 'تحرير الجدول';
$string['edit_table_save'] = 'احفظ الجدول';
$string['edit_xml_file'] = 'تحرير ملف XML';
$string['enumvaluesincorrect'] = 'قيم غير صحيحة لحقل التعداد';
$string['expected'] = 'المتوقع';
$string['extensionrequired'] = 'آسف - الامتدادPHP  \'{$a}\' مطلوب لهذا الإجراء. الرجاء تثبيت الامتداد إذا كنت ترغب في استخدام هذه الميزة.';
$string['field'] = 'الحقل';
$string['fieldnameempty'] = 'حقل الاسم فارغ';
$string['fields'] = 'الحقول';
$string['fieldsnotintable'] = 'حقل غير موجود في الجدول';
$string['fieldsusedinindex'] = 'يستخدم هذا الحقل كمؤشر';
$string['fieldsusedinkey'] = 'يستخدم هذا الحقل كمفتاح.';
$string['filemodifiedoutfromeditor'] = 'تحذير: الملف تم تعديله بشكل محلي أثناء استخدام محرر XMLDB. سيتم حفظ الكتابة فوق التغييرات المحلية.';
$string['filenotwriteable'] = 'الملف غير قابل للكتابة';
$string['fkunknownfield'] = 'يشير المفتاح الخارجي {$a->keyname} في الجدول {$a->tablename} إلى حقل غير موجود {$a->reffield} في الجدول المشار إليه {$a->reftable}.';
$string['fkunknowntable'] = 'يشير المفتاح الخارجي {$a->keyname} في الجدول {$a->tablename} إلى جدول غير موجود {$a->reftable}.';
$string['fkviolationdetails'] = 'المفتاح الخارجي {$a->keyname}  في الجدول {$a->tablename} ينتهك من قبل من {$a->numviolations} من  {$a->numrows} الصفوف.';
$string['float2numbernote'] = 'تنبيه: على الرغم من أن الحقول "عشرية" هي 100٪ بدعم من XMLDB، من المستحسن تهجيرها إلى حقول "رقمية" بدلا من ذلك.';
$string['floatincorrectdecimals'] = 'عدد من الكسور العشرية غير صحيح لحقل عشري';
$string['floatincorrectlength'] = 'حقل عشري طوله غير صحيح';
$string['generate_all_documentation'] = 'جميع الوثائق';
$string['generate_documentation'] = 'التوثيق';
$string['gotolastused'] = 'اذهب إلى آخر الملفات المستخدمة';
$string['incorrectfieldname'] = 'اسم غير صحيح';
$string['incorrectindexname'] = 'اسم فهرس غير صحيح';
$string['incorrectkeyname'] = 'اسم مفتاح غير صحيح';
$string['incorrecttablename'] = 'اسم جدول غير صحيح';
$string['index'] = 'الفهرس';
$string['indexes'] = 'الفهارس';
$string['indexnameempty'] = 'اسم الفهرس فارغ';
$string['integerincorrectlength'] = 'طول حقل عدد صحيح غير صالح';
$string['key'] = 'المفتاح';
$string['keynameempty'] = 'اسم المفتاح يجب أن لا يكون فارغاً';
$string['keys'] = 'المفاتيح';
$string['listreservedwords'] = 'قائمة الكلمات المحجوزة <br />( يستعمل للإبقاء على <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">الكلمات المحجوزة في XMLDB</a> محدثة)';
$string['load'] = 'تحميل';
$string['main_view'] = 'المعاينة الأساسية';
$string['masterprimaryuniqueordernomatch'] = 'الحقول في المفتاح الخارجي الخاص بك يجب أن يتم سردها في نفس الترتيب كما تم سردها في المفتاح الفريد على الجدول المرجعي.';
$string['missing'] = 'المفقود';
$string['missingindexes'] = 'وجدت الفهارس المفقودة';
$string['mustselectonefield'] = 'يجب عليك تحديد حقل واحد لمعرفة الإجراءات ذات الصلة بالحقل!';
$string['mustselectoneindex'] = 'يجب عليك تحديد فهرس واحد لمعرفة الإجراءات ذات الصلة بالفهرس!';
$string['mustselectonekey'] = 'يجب عليك تحديد مفتاح واحد لمعرفة الإجراءات ذات الصلة بالمفتاح!';
$string['new_table_from_mysql'] = 'جدول جديد من MySQL';
$string['newfield'] = 'حقل جديد';
$string['newindex'] = 'فهرس جديد';
$string['newkey'] = 'مفتاح جديد';
$string['newtable'] = 'جدول جديد';
$string['newtablefrommysql'] = 'جدول جديد من MySQL';
$string['nofieldsspecified'] = 'لا يوجد حقل محدد';
$string['nomasterprimaryuniquefound'] = 'العمود/الأعمدة التي يشير إليها مفتاحك الخارجي ينبغي تضمينها في مفتاح أساسي أو فريد من نوعه في الجدول المرجعي. لاحظ أن كون العمود في فهرس فريد ليس كافياً.';
$string['nomissingindexesfound'] = 'لم يتم العثور على المفقود من الفهارس، قاعدة البيانات الخاصة بك لا تحتاج اتخاذ مزيد من الإجراءات.';
$string['noreffieldsspecified'] = 'لم تحدد حقول مرجعية';
$string['noreftablespecified'] = 'لم يتم العثور على جدول مرجعي';
$string['noviolatedforeignkeysfound'] = 'لا توجد مفاتيح انتهكت الخارجية';
$string['nowrongdefaultsfound'] = 'لم يتم العثور على قيم افتراضية غير متناسقة، قاعدة البيانات الخاصة بك لا تحتاج اتخاذ مزيد من الإجراءات.';
$string['nowrongintsfound'] = 'لم يتم العثور على أعداد صحيحة خاطئة، قاعدة البيانات الخاصة بك لا تحتاج اتخاذ مزيد من الإجراءات.';
$string['nowrongoraclesemanticsfound'] = 'لم يتم العثور على أعمدة أوراكل باستخدام دلالات BYTE، قاعدة البيانات الخاصة بك لا تحتاج اتخاذ مزيد من الإجراءات.';
$string['numberincorrectdecimals'] = 'عدد غير صحيح من المنازل العشرية لحقل الأرقام';
$string['numberincorrectlength'] = 'غير صحيح طول الحقل الرقمي';
$string['pendingchanges'] = 'ملاحظة: لقد أجريت تغييرات على هذا الملف. يمكن حفظها في أيّ لحظة.';
$string['pendingchangescannotbesaved'] = 'هناك تغييرات في هذا الملف ولكن لا يمكن حفظها ! يرجى التحقق من أن كل من المجلد و "install.xml"  لديها أذونات الكتابة لخادم الويب.';
$string['pendingchangescannotbesavedreload'] = 'هناك تغييرات في هذا الملف ولكن لا يمكن حفظها ! يرجى التحقق من أن كل من المجلد و "install.xml" لديها أذونات الكتابة لخادم الويب. ثم إعادة تحميل هذه الصفحة و بعد ذلك يجب عليك أن تكون قادرا على حفظ هذه التغييرات.';
$string['pluginname'] = 'محرر XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'لا يمكن للمفاتيح الأساسية أن تكون فارغة';
$string['reserved'] = 'محجوز';
$string['reservedwords'] = 'الكلمات المحجوزة';
$string['revert'] = 'العودة';
$string['revert_changes'] = 'التراجع عن التغييرات';
$string['save'] = 'إحفظ';
$string['searchresults'] = 'نتائج البحث';
$string['selectaction'] = 'إختر الإجراء:';
$string['selectdb'] = 'إختر قاعدة البيانات:';
$string['selectfieldkeyindex'] = 'حدد حقل / مفتاح / فهرس:';
$string['selectonecommand'] = 'الرجاء اختيار إجراء واحد من القائمة لعرض كود PHP';
$string['selectonefieldkeyindex'] = 'الرجاء اختيار مجال واحد / مفتاح / فهرس من القائمة لعرض التعليمات البرمجية PHP';
$string['selecttable'] = 'إختر الجدول:';
$string['table'] = 'الجدول';
$string['tablenameempty'] = 'لا يمكن لاسم الجدول أن يكون فارغاً';
$string['tables'] = 'الجداول';
$string['unknownfield'] = 'يشير إلى حقل غير معروف';
$string['unknowntable'] = 'يشير إلى جدول غير معروف';
$string['unload'] = 'إلغاء التحميل';
$string['up'] = 'أعلى';
$string['view'] = 'معاينة';
$string['view_reserved_words'] = 'عرض الكلمات المحجوزة';
$string['view_structure_php'] = 'عرض بنية PHP';
$string['view_structure_sql'] = 'عرض بنية SQL';
$string['view_table_php'] = 'معاينة جدول PHP';
$string['view_table_sql'] = 'معاينة جدول SQL';
$string['viewedited'] = 'معاينة ما تم تحريره';
$string['vieworiginal'] = 'معاينة الأصل';
$string['viewphpcode'] = 'معاينة ترميز PHP';
$string['viewsqlcode'] = 'معاينة ترميز SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'مفاتيح خارجية انتهكت';
$string['violatedforeignkeysfound'] = 'العثور على مفاتيح خارجية انتهكت';
$string['violations'] = 'انتهاكات';
$string['wrong'] = 'خاطئ';
$string['wrongdefaults'] = 'وجدت افتراضات خاطئة';
$string['wrongints'] = 'وجدت أعداد صحيحة خاطئة';
$string['wronglengthforenum'] = 'طول حقل التعداد غير صحيح';
$string['wrongnumberofreffields'] = 'خطأ عدد من الحقول المرجعية';
$string['wrongoraclesemantics'] = 'العثور على خطأ دلالات BYTE أوراكل';
$string['wrongreservedwords'] = 'الكلمات المحجوزة <br /> المستخدمة حاليا (لاحظ أن أسماء الجداول ليست مهمة في حالة استخدام $CFG->prefix)';
$string['yesmissingindexesfound'] = 'تم العثور على بعض الفهارس المفقودة في قاعدة البيانات الخاصة بك . هنا تفاصيلها و المطلوبة عبارة SQL ليتم تنفيذها مع واجهة SQL الخاصة بك و المفضلة لإنشاء كل منهم (لا تنسى النسخ الاحتياطي لبياناتك قبل القيام بذلك) . <br/> و بعد أن تفعل ذلك، فإنه من المستحسن بشدة تنفيذ هذه الأداة مرة أخرى للتأكد من أنه لا يوجد فهارس أكثر مفقودة .';
$string['yeswrongdefaultsfound'] = 'تم العثور على بعض الافتراضات الغير متناسقة في قاعدة البيانات الخاصة بك. هنا تفاصيلها وعبارة SQL المطلوبة ليتم تنفيذها مع واجهة SQL الخاصة بك و المفضلة لإصلاح كل منهم (لا تنسى النسخ الاحتياطي للبيانات الخاصة بك قبل القيام بذلك). <br /> وبعد أن تفعل ذلك، فإنه من المستحسن بشدة تنفيذ هذه الأداة مرة أخرى للتأكد من أنه لم يتم العثور على افتراضات أكثر غير متناسقة.';
$string['yeswrongintsfound'] = 'تم العثور على بعض الأعداد الصحيحة الخاطئة في قاعدة البيانات الخاصة بك. هنا تفاصيلها وعبارة SQL المطلوبة ليتم تنفيذها مع واجهة SQL الخاصة بك و المفضلة لإنشاء كل منهم (لا تنسى النسخ الاحتياطي لبياناتك قبل القيام بذلك). <br /> و بعد أن تفعل ذلك، فإنه من المستحسن بشدة تنفيذ هذه الأداة مرة أخرى للتأكد من أنه لم يتم العثور على أعداد صحيحة أكثر خاطئة.';
$string['yeswrongoraclesemanticsfound'] = 'تم العثور على بعض أعمدة أوراكل باستخدام دلالات بايت في قاعدة البيانات الخاصة بك. هنا تفاصيلها وعبارة SQL المطلوبة ليتم تنفيذها مع واجهة SQL الخاصة بك و المفضلة لإنشاء كل منهم (لا تنس النسخ الاحتياطي للبيانات الخاصة بك قبل القيام بذلك). <b /> و بعد أن تفعل ذلك، فإنه من المستحسن بشدة تنفيذ هذه الأداة مرة أخرى للتأكد من أنه لم يتم العثور على دلالات أكثر خاطئة.';
