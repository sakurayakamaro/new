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
 * Strings for component 'tool_task', language 'ar', version '2.9'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'في اسرع وقت ممكن';
$string['blocking'] = 'حجب';
$string['component'] = 'مكوّن';
$string['corecomponent'] = 'النواة';
$string['default'] = 'الافتراضي';
$string['disabled'] = 'معطّل';
$string['disabled_help'] = 'لا يتم تنفيذ المهام المجدولة المعطلة من cron ، و مع ذلك لا يزال من الممكن تنفيذها يدويًا عبر أداة CLI.';
$string['edittaskschedule'] = 'تعديل جدول المهام: {$a}';
$string['faildelay'] = 'تأخير الفشل';
$string['lastruntime'] = 'آخر تشغيل';
$string['nextruntime'] = 'التشغيل التالي';
$string['plugindisabled'] = 'البرنامج المساعد معطل';
$string['pluginname'] = 'تهيئة المهمة المجدولة';
$string['resettasktodefaults'] = 'إعادة تعيين جدول المهام إلى الإعدادات الافتراضية';
$string['resettasktodefaults_help'] = 'سيؤدي ذلك إلى تجاهل أي تغييرات محلية وإعادة الجدول الزمني لهذه المهمة إلى إعداداته الأصلية.';
$string['scheduledtaskchangesdisabled'] = 'تم منع التعديلات على قائمة المهام المجدولة في تكوين Moodle';
$string['scheduledtasks'] = 'المهام المجدولة';
$string['taskdisabled'] = 'تم تعطيل المهمة';
$string['taskscheduleday'] = 'اليوم';
$string['taskscheduleday_help'] = 'حقل يوم الشهر لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل يوم
* <strong>*/2</strong> كل يومين
* <strong>1</strong> الأول من كل شهر
* <strong>1,15</strong> الأول والخامس عشر من كل شهر';
$string['taskscheduledayofweek'] = 'يوم من الأسبوع';
$string['taskscheduledayofweek_help'] = 'حقل يوم الأسبوع لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل يوم
* <strong>0</strong> كل يوم أحد
* <strong>6</strong> كل يوم سبت
* <strong>1,5</strong> كل اثنين وجمعة';
$string['taskschedulehour'] = 'الساعة';
$string['taskschedulehour_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل ساعة
* <strong>*/2</strong> كل ساعتين
* <strong>2-10</strong> كل ساعة من 02:00 حتى 10:00 (ضمناً)
* <strong>2,6,9</strong> الثانية صباحاً، السادسة صباحاً، التاسعة صباحاً';
$string['taskscheduleminute'] = 'الدقيقة';
$string['taskscheduleminute_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل دقيقة
* <strong>*/5</strong> كل 5 دقائق
* <strong>2-10</strong> كل دقيقة ما بين الدقيقة الثانية وحتى العاشرة لكل ساعة (ضمناً)
* <strong>2,6,9</strong> الدقائق؛ الثانية، السادسة، والتاسعة من كل ساعة';
$string['taskschedulemonth'] = 'الشهر';
$string['taskschedulemonth_help'] = 'حقل الساعة لجدولة المهام. يستعمل الحقل نفس تنسيق مشغل الوظائف الدورية في يونكس. بعض الأمثلة هي:

* <strong>*</strong> كل شهر
* <strong>*/2</strong> كل شهرين
* <strong>1</strong> كل كانون الثاني/يناير
* <strong>1,5</strong> كل كانون الثاني/يناير و أيار/مايو';
