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
 * Strings for component 'auth', language 'ar', version '2.9'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'ملاحق المصادقة المتاحة';
$string['alternatelogin'] = 'لو قمت بداخل عنوان هنا، سيستخدم كصفحة دخول إلى الموقع، يجب أن تحتوي الصفحة على نموذج يتضمن الأمر <strong>\'{$a}\'</strong> والحقول <strong>username</strong> و <strong>password</strong>.<br /> كن حذر في أدخال عنوان صحيح في حالة أدخالك عنوان خاطئ سيتم حجبك عن الموقع. <br /> أترك هذا الإعداد فارغاً ليتم استخدم صفحة الدخول الأفتراضية.';
$string['alternateloginurl'] = 'استبدل عنوان الدخول';
$string['auth_changepasswordhelp'] = 'مساعدة تغير كلمة المرور';
$string['auth_changepasswordhelp_expl'] = 'أعرض مساعدة كلمة المررور المفقودة للمستخدمين الذين فقدوا {$a} كلمات مرورهم. هذا سيتم عرضة أمّا بالإضافة إلى أَو بدلاً مِنْ <strong>عنوان تغيير كلمة المرور </strong> أو تغير كلمة مرور مودل داخليا';
$string['auth_changepasswordurl'] = 'عنوان تغير كلمة المرور';
$string['auth_changepasswordurl_expl'] = 'حدّدْ عنوان لإرْسال المستخدمين الذين فَقدَوا {$a} كلمة المرورهم. أعد <strong>استخدم صفحة قياسية لتغير كلمة المرور </strong> إلي <strong>لا';
$string['auth_changingemailaddress'] = 'لقد طلبت تغيير بريدك الإلكتروني من {$a->oldemail} إلى {$a->newemail}. سنرسل لك رسالة إلى بريدك الإلكتروني الجديد لأسباب أمنية للتأكد من أنه ملكك. سيتم تحديث بريدك الإلكتروني حالما تفتح الرابط الذي ستجده لك في تلك الرسالة.';
$string['auth_common_settings'] = 'الإعدادات العامة';
$string['auth_data_mapping'] = 'تخطيط البيانات';
$string['auth_fieldlock'] = 'أغلق القيمة';
$string['auth_fieldlock_expl'] = 'قيمة قفلِ: </b> إذا مُكَّنِ، سَيَمْنعُ المستخدمي ومدراء مودل مِنْ تَحرير الحقلِ مباشرة. إستعملْ هذا الخيارِ إذا أنت تحتفظ بهذه البياناتِ في نظامِ تحقق خارجي. </p>';
$string['auth_fieldlocks'] = 'اغلق حقول المستخدم';
$string['auth_fieldlocks_help'] = '<p> تستطيع تأمين حقول بيانات المستخدم. هذا مفيد للمواقعِ التي يقوم مشرفوها بتحرير بيانات المستخدمين يدوياً أو باستعمال خدمة \'رفع المستخدمين\'. لو قمت بتأمين حقول مطلوبة من قبل مودل، تأكد من تزويدك لتلك البيانات عندما تنشئ حسابات المستخدمين؛ وإلا ستكون الحسابات غير صالحة للإستعمال. </p> <p>خذ في اعتبارك وضع إعداد حالة التأمين على \'عدم التأمين إذا كان الحقل فارغاً\' لتفادي هذه المشكلة.</p>';
$string['auth_invalidnewemailkey'] = 'خطأ: إذا كنت تحاول تأكيد تغيير بريدك الإلكتروني، فلربما أخطأت في نسخ الرابط المرسل لك إلى البريد الإلكتروني. رجاءً انسخه مرة وحاول مجدداً.';
$string['auth_multiplehosts'] = 'يمكن تحديد اكثر من مستضيف مواقع (host1.com, host2.net, host3.org)';
$string['auth_notconfigured'] = 'طريقة التوثيق {$a} لم يتم ضبطها.';
$string['auth_outofnewemailupdateattempts'] = 'لقد وصلت للحد الأقصى المسموح لمحاولات تغيير بريدك الإلكتروني. لقد تم إلغاء طلبك.';
$string['auth_passwordisexpired'] = 'انتهت صلاحية كلمة مرورك. هل ترغب في تغيرها الآن؟';
$string['auth_passwordwillexpire'] = 'ستنتهي صلاحية كلمة مرورك خلال {$a} أيام. هل ترغب في تغيرها الآن؟';
$string['auth_remove_delete'] = 'حذف كامل للداخلي';
$string['auth_remove_keep'] = 'إبقاء الداخلي';
$string['auth_remove_suspend'] = 'تعليق الداخلي';
$string['auth_remove_user'] = 'حدد ماذا سيفعل بحسابات المستخدمين الداخلية أثناء المزامنة الشاملة عندما يكون المستخدم قد حذف من المصدر الخارجي.
فقط المستخدمين المعلقين يتم إعادتهم بشكل تلقائي إذا ظهروا مرة ثانية في المصدر الخارجي.';
$string['auth_remove_user_key'] = 'المستخدم الخارجي المحذوف';
$string['auth_sync_script'] = 'سكريبت مزامنة كرون';
$string['auth_updatelocal'] = 'حذث المعلومات المحلية';
$string['auth_updatelocal_expl'] = '<p><b>تحديث محلي:</b> عند تفعيله، سيتم تحديث الحقل (عبر مصادقة خارجية) كلما سجل المستخدم دخوله أو عند إجراء مزامنة للمستخدم. يجب قفل الحقول المعدّة للتحديث المحلّي.</p>';
$string['auth_updateremote'] = 'حدث المعلمومات الخارجية';
$string['auth_updateremote_expl'] = '<p><b>تحديث خارجي:</b> عند التفعيل، سيتم تحديث المصادقة الخارجية عند تحديث سجل المستخدم. يجب إلغاء قفل الحقول للسماح بتحريرها.</p>';
$string['auth_updateremote_ldap'] = '<p> <b> مُلاحظة: </b> تحديث بياناتَ إل دي أي بي (LDAP) الخارجية تَتطلّبُ منك وَضعتَ (binddn)  و(bindpw) لربط مستخدم بصلاحيات تَحرير لكلّ سجلات المستخدم. هو حالياً لا تحتفظ بخواصَ متعددةَ القيم، وسَتُزيلُ قِيَمَ إضافيةَ عند التحديث. </p>';
$string['auth_user_create'] = 'تمكين إنشاء مستخدم';
$string['auth_user_creation'] = 'يستطيع المستخدمون الجدد أو (المجهولون) انشاء حسابات على مصدر التوثيق الخارجيّ و تأكيّد التسجيل عبر بريد إلكترونيّ . إذا أنت مكنت هذه الخاصيه, أذن تذكّر أن توفّق بين الخيارات ذات المركبة المحدّدة لإنشاء المستخدم أيضًا';
$string['auth_usernameexists'] = 'الاسم المختار موجود، الرجاء اختيار اسم اخر';
$string['authenticationoptions'] = 'خيارات التوثيق';
$string['authinstructions'] = 'هنا يمكنك إعطاء تعليمات للمستخدمين لديك حتى يعرفوا أسماء المستخدمين وكلمات المرور التي يتعين عليهم استخدامها. سيظهر النص الذي تقوم بإدخاله هنا على صفحة الدخول. إذا تركت هذا المكان فارغا فلن يتم طباعة أية تعليمات.';
$string['authloginviaemail'] = 'السماح بتسجيل الدخول عبر البريد الإلكتروني';
$string['authloginviaemail_desc'] = 'السماح للمستخدمين باستخدام كل من اسم المستخدم وعنوان البريد الإلكتروني (إذا كان فريدًا) لتسجيل الدخول إلى الموقع.';
$string['auto_add_remote_users'] = 'إضافة تلقائية للمستخدمين البعيدين';
$string['changepassword'] = 'تغيير عنوان كلمة المرور';
$string['changepasswordhelp'] = 'هنا تستطيع تعيين الموضع الذي يمكن للمستخدمين من خلاله استرداد أو تغيير أسماء المستخدمين أو كلمات المرور الخاصة بهم في حالة نسيانها. وسوف يكون ذلك متاحا للمستخدمين من خلال زر في صفحة الدخول وصفحة المستخدم الخاصة بهم. أما إذا تركت هذا المكان خاليا، فلن يتم طباعة الزر.';
$string['chooseauthmethod'] = 'إختر طريقة المصادقة';
$string['chooseauthmethod_help'] = 'هذا الإعداد يحدد طريقة المصادقة المستخدمة عند تسجيل دخول المستخدمين. يجب اختيار إضافات المصادقة المفعّلة فقط، وإلا فلن يتمكن المستخدم من تسجيل الدخول. لمنع المستخدم من تسجيل الدخول، اختر "منع تسجيل الدخول".';
$string['createpassword'] = 'أصدر كلمة المرور وأعلِّم المستخدم.';
$string['createpasswordifneeded'] = 'أنشئ كلمة مرور أذا كنت تحتاج';
$string['emailchangecancel'] = 'إلغاء تغيير البريد';
$string['emailchangepending'] = 'التغيير معلق. افتح الرابط الذي تم إرساله لك على {$a->preference_newemail}.';
$string['emailnowexists'] = 'البريد الإلكتروني الذي تريد تخصيصه في حسابك تم تخصيصه من قبل شخص آخر. لذا تم إلغاء طلبك لتغيير البريد، يمكنك المحاولة مرة أخرى مع بريد آخر.';
$string['emailupdate'] = 'تحديث البريد الإلكتروني';
$string['emailupdatemessage'] = 'عزيزي {$a->fullname}،

لقد طلبت تغيير البريد الإلكتروني لحسابك في {$a->site}. الرجاء افتح الرابط التالي لتأكيد هذا التغيير.

{$a->url}';
$string['emailupdatesuccess'] = 'تم تغيير البريد الإلكتروني للمستخدم <em>{$a->fullname}</em> بنجاح إلى <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'تأكيد تحديث البريد الإلكتروني في {$a->site}';
$string['enterthenumbersyouhear'] = 'أدخل الأرقام التي تسمعها';
$string['enterthewordsabove'] = 'أدخل الكلمات أعلاه';
$string['errormaxconsecutiveidentchars'] = 'ينبغي أن لا يزيد عدد الأحرف المتماثلة المتتالية في كلمة المرور على {$a} من الأحرف.';
$string['errorminpassworddigits'] = 'يجب أن تكون كلمات السر مكونة من {$a} رقم على الأقل.';
$string['errorminpasswordlength'] = 'يجب أن تتكون كلمة المرور على الأقل من {$a} من الأحرف.';
$string['errorminpasswordlower'] = 'يجب أن تتضمن كلمة المرور على الأقل {$a} من الحروف الصغيرة.';
$string['errorminpasswordnonalphanum'] = 'يجب أن تحتوي كلمات المرور على {$a} على الأقل من الرموز غير الأبجدية الرقمية  مثل * أو - أو #.';
$string['errorminpasswordupper'] = 'يجب أن تتضمن كلمة المرور على الأقل {$a} من الحروف الكبيرة.';
$string['errorpasswordreused'] = 'تم استخدام كلمة المرور هذه من قبل ، ولا يُسمح بإعادة استخدامها';
$string['errorpasswordupdate'] = 'خطأ في تحديث كلمة السر، لم يتم تغيير كلمة السر.';
$string['eventuserloggedin'] = 'قام المستخدم بتسجيل الدخول';
$string['eventuserloggedinas'] = 'المستخدم بتسجيل الدخول كمستخدم آخر';
$string['eventuserloginfailed'] = 'فشل تسجيل دخول المستخدم';
$string['forcechangepassword'] = 'فرض تغيير كلمة المرور';
$string['forcechangepassword_help'] = 'أفرض على المستخدمين تغيير كلمة المرور عند دخولهم إلى مودل في المرة القادمة.';
$string['forcechangepasswordfirst_help'] = 'أفرض على المستخدمين تغيير كلمة المرور عند دخولهم إلى مودل للمرة الأولى.';
$string['forgottenpassword'] = 'العنوان الذي ستدخله هنا، سيستخدم كصفحة استعادة كلمات المرور الضائعة لهذا الموقع.
هذا موجه للمواقع التي تتعامل مع كلمات المرور خارج مودل بالكامل. اتركه فارغاً لاستخدام صفحة استعادة كلمة المرور الافتراضية.';
$string['forgottenpasswordurl'] = 'عنوان رابط كلمة المرور المنسية';
$string['getanaudiocaptcha'] = 'الحصول على كاباتشا صوتية';
$string['getanimagecaptcha'] = 'احصل على كاباتشا صورية';
$string['getanothercaptcha'] = 'احصل على كاباتشا أخرى';
$string['guestloginbutton'] = 'زر دخول الضيف';
$string['incorrectpleasetryagain'] = 'غير صحيح، حاول مرة أخرى.';
$string['infilefield'] = 'الحقول المطلوبة في الملف';
$string['informminpassworddigits'] = 'على الأقل {$a} من الأرقام';
$string['informminpasswordlength'] = 'على الأقل {$a} من الأحرف';
$string['informminpasswordlower'] = 'على الأقل {$a} من الحروف الصغيرة';
$string['informminpasswordnonalphanum'] = 'على الأقل {$a} حرف غير الأبجدية والأرقام';
$string['informminpasswordreuselimit'] = 'يمكن إعادة استخدام كلمة السر بعد {$a} تغييرات';
$string['informminpasswordupper'] = 'على الأقل {$a} من الحروف الكبيرة';
$string['informpasswordpolicy'] = 'يجب أن تتضمن كلمة المرور {$a}';
$string['instructions'] = 'تعليمات';
$string['internal'] = 'داخلي';
$string['limitconcurrentlogins'] = 'الحد من عمليات تسجيل الدخول المتزامنة';
$string['limitconcurrentlogins_desc'] = 'إذا تم تفعيله، فسيتم الحد من عدد عمليات تسجيل الدخول المتزامنة لكل مستخدم. سيتم إنهاء الجلسة الأقدم عند الوصول إلى الحد الأقصى. يُرجى ملاحظة أن المستخدمين قد يفقدون جميع الأعمال التي لم يتم حفظها. هذا الإعداد غير متوافق مع تسجيل الدخول الأحادي (SSO) Single Sign-on (SSO).';
$string['locked'] = 'مغلق';
$string['md5'] = 'تشفير MD5';
$string['nopasswordchange'] = 'لا يمكن تغيير كلمة المرور';
$string['nopasswordchangeforced'] = 'لا يمكنك الاستمرار دون تغيير كلمة مرورك، مع ذلك، يبدو أنه لا توجد صفحة مخصصة لتغييرها. رجاءً قم بالاتصال بمشرف مودل.';
$string['noprofileedit'] = 'لا يمكن تحرير معلومات الحساب';
$string['ntlmsso_attempting'] = 'محاولة تسجيل الدخول الواحد (SSO) عبر NTLM...';
$string['ntlmsso_failed'] = 'فشل تسجيل الدخول التلقائي، حاول من صفحة تسجيل الدخول العادية...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO غير مفعّل.';
$string['passwordhandling'] = 'حقل التعامل مع كلمة المرور';
$string['plaintext'] = 'نص عادي';
$string['pluginnotenabled'] = 'ملحق المصادقة \'{$a}\' معطل.';
$string['pluginnotinstalled'] = 'ملحق المصادقة \'{$a}\' غير منصب.';
$string['potentialidps'] = 'هل تسجل الدخول عادة في مكان آخر قبل الوصول إلى هنا ؟<br />اختر من القائمة التالية لتسجل الدخول من مكانك المعتاد:';
$string['recaptcha'] = 'ريكاباتشا';
$string['recaptcha_help'] = 'كاباتشا تفيد في منع إساءة الاستخدام من البرامج الآلية. أدخل ببساطة الكلمات الظاهرة في المربع مرتبة ومفصولة بمسافة فارغة.

إن لم تكن متأكداً من الكلمات، يمكنك تجربة كاباتشا أخرى أو حتى تجربة كاباتشا صوتية.';
$string['security_question'] = 'سؤال الأمان';
$string['selfregistration'] = 'التسجيل الذاتي';
$string['selfregistration_help'] = 'إذا تم تحديد ملحق مصادقة، كالتسجيل الذاتي عبر البريد الإلكتروني، فهذا يسمح للمستخدمين المحتملين بتسجيل أنفسهم وإنشاء حساباتهم. وهذا قد يفسح المجال لأشخاص مزعجين بإنشاء حسابات في الموقع واستعمال منشورات المنتديات، والمدونات وغيرها لنشر إزعاجاتهم. لتجنّب هذا الخطر، ينبغي إلغاء تفعيل التسجيل التلقائي أو الحد منه عبر الإعداد <em>مجالات البريد المسموح بها</em>.';
$string['sha1'] = 'تشفير SHA-1';
$string['showguestlogin'] = 'يمكنك إظهار أو إخفاء زر دخول الضيف في صفحة الدخول.';
$string['stdchangepassword'] = 'استعمال الصفحة القياسية لتغيير كلمة المرور';
$string['stdchangepassword_expl'] = 'إذا كان نظام المصادقة الخارجي يسمح بتغيير كلمة المرور من خلال مودل، حوّل هذا الإعداد إلى (نعم).
هذا الإعداد يتخطى \'رابط تغيير كلمة المرور\'.';
$string['stdchangepassword_explldap'] = 'ملاحظة: ينصح استخدام LDAP عبر قناة SSL مشفرة (ldaps://) إن كان مخدم LDAP بعيداً.';
$string['suspended'] = 'حساب معلّق';
$string['suspended_help'] = 'لا يمكن لحسابات المستخدمين الموقوفة تسجيل الدخول أو استخدام خدمات الويب ، ويتم تجاهل أي رسائل صادرة.';
$string['testsettings'] = 'أختبر الإعدادات';
$string['testsettingsheading'] = 'اختبار إعدادات المصادقة - {$a}';
$string['unlocked'] = 'فتح';
$string['unlockedifempty'] = 'عدم الإغلاق إذا كان الحقل فارغا';
$string['update_never'] = 'أبداً';
$string['update_oncreate'] = 'عند الإنشاء';
$string['update_onlogin'] = 'عند كل تسجيل دخول';
$string['update_onupdate'] = 'أثناء التحديث';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() لا يدعم نوع المستخدم المحدد: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() لا يدعم نوع المستخدم المحدد (...حتى الآن)';
