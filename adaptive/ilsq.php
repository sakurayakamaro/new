<?php

/*
if address status == 1, page from profile
if address status == 0, page from login
*/

require_once('../config.php');
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('ilsquestionnaire');

$PAGE->navbar->add($pagetitle);
$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/ilsq.php');

require_login();

$error = false;
$errorQ = isset($errorQ) ? $errorQ : array();
$y=0;

if(isset($_POST['submit'])){
	for($x=1;$x<45;$x++){
		if($_POST['Q'.$x]==''){
			$error = true;
			$errorQ[$y]=$x;
			$y++;
		}
	}
	if(!$error){
		// insert db
		// calculate
		$a=0;$b=1;$c=1;$d=1;
		$act=0;$ref=0; // active/reflective
		$sns=0;$int=0; // sensing/intuitive
		$vis=0;$vrb=0; // visual/verbal
		$seq=0;$glo=0; // sequential/global
		
		for($x=1;$x<45;$x++){
			// Rule 1 - active/reflective
			if((4*$a+1)==$x){
				if($_POST['Q'.$x]=='a'){ $act++; }
				if($_POST['Q'.$x]=='b'){ $ref++; }
				$a++;
			}
			// Rule 2 - sensing/intuitive
			if((2 + 4*($b - 1))==$x){
				if($_POST['Q'.$x]=='a'){ $sns++; }
				if($_POST['Q'.$x]=='b'){ $int++; }
				$b++;
			}
			// Rule 3 - visual/verbal
			if((4*$c - 1)==$x){
				if($_POST['Q'.$x]=='a'){ $vis++; }
				if($_POST['Q'.$x]=='b'){ $vrb++; }
				$c++;
			}
			// Rule 4 - sequential/global
			if((4*$d)==$x){
				if($_POST['Q'.$x]=='a'){ $seq++; }
				if($_POST['Q'.$x]=='b'){ $glo++; }
				$d++;
			}
		} // eof for
		if($act>$ref){$rule1 = $act-$ref; $rule1.='a';}
			else{$rule1 = $ref-$act; $rule1.='b';}
		if($sns>$int){$rule2 = $sns-$int; $rule2.='a';}
			else{$rule2 = $int-$sns; $rule2.='b';}
		if($vis>$vrb){$rule3 = $vis-$vrb; $rule3.='a';}
			else{$rule3 = $vrb-$vis; $rule3.='b';}
		if($seq>$glo){$rule4 = $seq-$glo; $rule4.='a';}
			else{$rule4 = $glo-$seq; $rule4.='b';}
			
		echo "<script>window.location.href='".$CFG->wwwroot."/adaptive/resultilsq.php?r1=".adaptive_encrypt($rule1)."&r2=".adaptive_encrypt($rule2)."&r3=".adaptive_encrypt($rule3)."&r4=".adaptive_encrypt($rule4)."'</script>";
	} // eof !$error
} // eof if(isset)


echo $OUTPUT->header();
?>
<script>
function profile() {
	window.location.href = "<?php echo $CFG->wwwroot;?>/user/profile.php";
}
</script>
<style>
	.moodle-actionmenu{
		color:#000;
	}
	.moodle-actionmenu{
		color:#FFF;
	}
	.usertext:hover{
		color:#CFF;
	}
	.brandLogo{
		color:#fff;
		font-family: Verdana, Geneva, sans-serif;
		font-size: 16px;
		font-style: normal;
		font-variant: small-caps;
		line-height: 16.5px;
	}
	.brandLogo:hover{
		color:#bdd3ff;
	}
	.breadcrumb li:first-child{
		padding-left: 25px;
		background:url('../pix/h/home.png');
		background-size: 15px 12px;
		background-repeat: no-repeat;
		background-position: 0;
		color:#5c60ff;
		font-weight:bold;
	}
.alert-box {
	color:#555;
	border-radius:10px;
	font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
	padding:10px 36px;
	margin:10px;
}
.alert-box span {
	font-weight:bold;
	text-transform:uppercase;
}
.error {
	background:#ffecec url('image/warning.png') no-repeat 10px 50%;
	border:1px solid #f5aca6;
}
.success {
	background:#e9ffd9 url('image/success.png') no-repeat 10px 50%;
	border:1px solid #a6ca8a;
}
.warning {
	background:#fff8c4 url('image/warning.png') no-repeat 10px 50%;
	border:1px solid #f2c779;
}
.notice {
	background:#e3f7fc url('image/notice.png') no-repeat 10px 50%;
	border:1px solid #8ed9f6;
}
#submit{	
  -moz-box-shadow:    0 1px 2px 3px #D7D7D7;
  -webkit-box-shadow: 0 1px 2px 3px #ccc;
  box-shadow:         0 1px 2px 3px #ccc;
}
#submit:hover{	
  -moz-box-shadow:    0 0 0 0 #D7D7D7;
  -webkit-box-shadow: 0 0 0 0 #ccc;
  box-shadow:         0 0 0 0 #ccc;
}
</style>
<div id="page" class="container-fluid" style="width:60%;">
<div id="page-content" class="row-fluid">
<div role="main">
<h2>Learning Style Questionnaire</h2>
<form action="" method="post" name="ilsq">
<table width="100%" border="0">
<?php if($error){?>
  <tr>
    <td colspan="2"><div class="alert-box warning"><span>Warning: </span>Please filled out all required field.</div></td>
  </tr>
<?php }?>
  <tr>
    <td colspan="2">
	<p align="justify"><strong>Purpose</strong>: This questionnaire is to access your preferences according to four dimensions (active/reflective, sensing/intuitive, visual/verbal and sequential/global) of a learning style model formulated by Richard M. Felder and Linda K. Silverman. After you answers all the 44-items on the questionnaire and click on "Submit", system will immediately give your learning style profile and provide study tips with different learning style preferences.</p>
	<p align="justify">Other than that, result of this questionnaire added with your knowledge level which initially accessed by your previous CGPA will be used to generate learning materials. You may get difference learning materials from your friends according to your learning style and knowledge level.</p>
	<p align="justify"><strong>Directions</strong>: Please choose only one answer for each question. If both “a” and “b” seem to apply to you, choose the one that applies more frequently. When you are finished selecting answers to each question please select the submit button at the end of the form.</p>

  <p align="justify"><strong>الغرض</strong>: يهدف هذا الاستبيان إلى الوصول إلى تفضيلاتك وفقًا لأربعة أبعاد (نشط / عاكس ، استشعار / حدسي ، بصري / لفظي ومتسلسل / عالمي) لنموذج أسلوب التعلم الذي صاغه ريتشارد إم فيلدر وليندا ك.سيلفرمان. بعد أن تجيب على جميع البنود الـ 44 الموجودة في الاستبيان والنقر على "إرسال" ، سيعطي النظام على الفور ملف تعريف نمط التعلم الخاص بك ويقدم نصائح دراسية مع تفضيلات أسلوب التعلم المختلفة.</p>
  <p align="justify">بخلاف ذلك ، سيتم استخدام نتيجة هذا الاستبيان المضاف بمستوى معرفتك الذي تم الوصول إليه في البداية بواسطة CGPA السابق لإنشاء مواد تعليمية. قد تحصل على مواد تعليمية مختلفة من أصدقائك وفقًا لأسلوب التعلم ومستوى المعرفة.</p>
	<p align="justify"><strong>الميول</strong>: الرجاء اختيار إجابة واحدة فقط لكل سؤال. إذا بدا لك أن الحرفين "أ" و "ب" ينطبقان عليك ، فاختر الخيار الذي ينطبق بشكل متكرر. عند الانتهاء من تحديد الإجابات على كل سؤال ، يرجى تحديد زر الإرسال في نهاية النموذج.</p>

	</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="3%" height="26">1.</td>
    <td width="97%"> I understand something better after I (أنا أفهم شيئًا أفضل بعد) <?php if(in_array(1, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q1" id="Qs1" value="a" <?php if(isset($_POST['Q1'])&&$_POST['Q1']=='a') echo "checked";?> />
      <strong>(a)</strong> try it out (تجربتها ).<br />
      <input type="radio" name="Q1" id="Qs2" value="b" <?php if(isset($_POST['Q1'])&&$_POST['Q1']=='b') echo "checked";?> />
      <strong>(b)</strong> think it through(فكر بالأمر مليا).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>I would rather be considered (أنا أفضل أن يتم النظر على ) <?php if(in_array(2, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q2" id="Qs3" value="a" <?php if(isset($_POST['Q2'])&&$_POST['Q2']=='a') echo "checked";?> />
      <strong>(a)</strong> realistic (واقعي).
      <br />
      <input type="radio" name="Q2" id="Qs4" value="b" <?php if(isset($_POST['Q2'])&&$_POST['Q2']=='b') echo "checked";?> />
      <strong>(b)</strong> innovative (إبداعي).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>When I think about what I did yesterday, I am most likely to get(عندما أفكر فيما فعلته بالأمس ، فمن المرجح أن أحصل على ) <?php if(in_array(3, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q3" id="Qs5" value="a" <?php if(isset($_POST['Q3'])&&$_POST['Q3']=='a') echo "checked";?> />
      <strong>(a)</strong> a picture(صورة).
      <br />
      <input type="radio" name="Q3" id="Qs6" value="b" <?php if(isset($_POST['Q3'])&&$_POST['Q3']=='b') echo "checked";?> />
      <strong>(b)</strong> words(كلمات).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>I tend to(انا اميل الى ) <?php if(in_array(4, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q4" id="Qs7" value="a" <?php if(isset($_POST['Q4'])&&$_POST['Q4']=='a') echo "checked";?> />
      <strong>(a)</strong> understand details of a subject but may be fuzzy about its overall structure (فهم تفاصيل الموضوع ولكن قد يكون غامض حول هيكلها العام).<br>
      <input type="radio" name="Q4" id="Qs8" value="b" <?php if(isset($_POST['Q4'])&&$_POST['Q4']=='b') echo "checked";?> />
      <strong>(b)</strong> understand the overall structure but may be fuzzy about details (فهم الهيكل العام ولكن قد يكون غامض حول تفاصيل).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>When I am learning something new, it helps me to (عندما أتعلم شيئًا جديدًا ، فهذا يساعدني) <?php if(in_array(5, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q5" id="Qs9" value="a" <?php if(isset($_POST['Q5'])&&$_POST['Q5']=='a') echo "checked";?> />
      <strong>(a)</strong> talk about it( الحديث بشأنه). 
        <br />
        <input type="radio" name="Q5" id="Qs10" value="b" <?php if(isset($_POST['Q5'])&&$_POST['Q5']=='b') echo "checked";?> />
        <strong>(b)</strong> think about it(التفكير بشأنه).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>If I were a teacher, I would rather teach a course (إذا كنت مدرسًا ، كنت أفضل تدريس دورة ) <?php if(in_array(6, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q6" id="Qs11" value="a" <?php if(isset($_POST['Q6'])&&$_POST['Q6']=='a') echo "checked";?> />
      <strong>(a)</strong> that deals with facts and real life situations (التي تتعامل مع الحقائق ومواقف الحياة الحقيقية).<br>
      <input type="radio" name="Q6" id="Qs12" value="b" <?php if(isset($_POST['Q6'])&&$_POST['Q6']=='b') echo "checked";?> />
      <strong>(b)</strong> that deals with ideas and theories (الذي يتعامل مع الأفكار والنظريات).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>I prefer to get new information in (أنا أفضل الحصول على معلومات جديدة في) <?php if(in_array(7, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q7" id="Qs13" value="a" <?php if(isset($_POST['Q7'])&&$_POST['Q7']=='a') echo "checked";?> />
      <strong>(a)</strong> pictures, diagrams, graphs, or maps (الصور والمخططات والرسوم البيانية، أو الخرائط).<br>
      <input type="radio" name="Q7" id="Qs14" value="b" <?php if(isset($_POST['Q7'])&&$_POST['Q7']=='b') echo "checked";?> />
      <strong>(b)</strong> written directions or verbal information (توجيهات مكتوبة أو معلومات شفهية ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>8.</td>
    <td>Once I understand (حالما افهم ) <?php if(in_array(8, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q8" id="Qs15" value="a" <?php if(isset($_POST['Q8'])&&$_POST['Q8']=='a') echo "checked";?> />
      <strong>(a)</strong> all the parts, I understand the whole thing( كل الاجزاء, افهم كل شيء).<br>
      <input type="radio" name="Q8" id="Qs16" value="b" <?php if(isset($_POST['Q8'])&&$_POST['Q8']=='b') echo "checked";?> />
      <strong>(b)</strong> the whole thing, I see how the parts fit(كل شيء,يمكنني رؤية كيف تتطابق بقية الاجزاء ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>9.</td>
    <td>In a study group working on difficult material, I am more likely to (في مجموعة الدراسة التي  تعمل على المواد الصعبة، أنا من المحتمل أن) <?php if(in_array(9, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q9" id="Qs17" value="a" <?php if(isset($_POST['Q9'])&&$_POST['Q9']=='a') echo "checked";?> />
      <strong>(a)</strong> jump in and contribute ideas (القفز والمساهمة بالأفكار).
      <br />
      <input type="radio" name="Q9" id="Qs18" value="b" <?php if(isset($_POST['Q9'])&&$_POST['Q9']=='b') echo "checked";?> />
      <strong>(b)</strong> sit back and listen (اجلس واستمع).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>10.</td>
    <td>I find it easier (انا اجد من السهل ) <?php if(in_array(10, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q10" id="Qs19" value="a" <?php if(isset($_POST['Q10'])&&$_POST['Q10']=='a') echo "checked";?> />
      <strong>(a)</strong> to learn facts (تعلم حقائق).
      <br />
      <input type="radio" name="Q10" id="Qs20" value="b" <?php if(isset($_POST['Q10'])&&$_POST['Q10']=='b') echo "checked";?> />
      <strong>(b)</strong> to learn concepts (تعلم مبادئ ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>11.</td>
    <td>In a book with lots of pictures and charts, I am likely to (في كتاب يحتوي على الكثير من الصور والرسوم البيانية ، من المحتمل أن أفعل ذلك ) <?php if(in_array(11, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q11" id="Qs21" value="a" <?php if(isset($_POST['Q11'])&&$_POST['Q11']=='a') echo "checked";?> />
     	<strong>(a)</strong> look over the pictures and charts carefully (انظر إلى الصور والمخططات بعناية).<br>
        <input type="radio" name="Q11" id="Qs22" value="b" <?php if(isset($_POST['Q11'])&&$_POST['Q11']=='b') echo "checked";?> />
        <strong>(b)</strong> focus on the written text( التركيز على النص المكتوب ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>12.</td>
    <td>When I solve math problems (عندما احل مشكله رياضية ) <?php if(in_array(12, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q12" id="Qs23" value="a" <?php if(isset($_POST['Q12'])&&$_POST['Q12']=='a') echo "checked";?> />
        <strong>(a)</strong> I usually work my way to the solutions one step at a time (عادة ما أشق طريقي إلى الحلول خطوة بخطوة).<br />
        <input type="radio" name="Q12" id="Qs24" value="b" <?php if(isset($_POST['Q12'])&&$_POST['Q12']=='b') echo "checked";?> />
        <strong>(b)</strong> I often just see the solutions but then have to struggle to figure out the steps to get to them (غالبًا ما أرى الحلول فقط ولكن بعد ذلك أجد صعوبة في معرفة الخطوات للوصول إليها).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>13.</td>
    <td>In classes I have taken (في الفصول التي أخذتها) <?php if(in_array(13, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q13" id="Qs25" value="a" <?php if(isset($_POST['Q13'])&&$_POST['Q13']=='a') echo "checked";?> />
        <strong>(a)</strong> I have usually gotten to know many of the students (لقد تعرفت عادةً على العديد من الطلاب).<br />
        <input type="radio" name="Q13" id="Qs26" value="b" <?php if(isset($_POST['Q13'])&&$_POST['Q13']=='b') echo "checked";?> />
        <strong>(b)</strong> I have rarely gotten to know many of the students (نادرًا ما تعرفت على العديد من الطلاب).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>14.</td>
    <td>In reading nonfiction, I prefer (أنا أفضل في قراءة القصص الخيالية) <?php if(in_array(14, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q14" id="Qs27" value="a" <?php if(isset($_POST['Q14'])&&$_POST['Q14']=='a') echo "checked";?> />
        <strong>(a)</strong> something that teaches me new facts or tells me how to do something (شيئًا يعلمني حقائق جديدة أو يخبرني كيف أفعل شيئًا ما).<br />
        <input type="radio" name="Q14" id="Qs28" value="b" <?php if(isset($_POST['Q14'])&&$_POST['Q14']=='b') echo "checked";?> />
        <strong>(b)</strong> something that gives me new ideas to think about (شيء يعطيني أفكارًا جديدة لأفكر فيها).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>15.</td>
    <td>I like teachers (احب المعلمين الذي ) <?php if(in_array(15, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q15" id="Qs29" value="a" <?php if(isset($_POST['Q15'])&&$_POST['Q15']=='a') echo "checked";?> />
        <strong>(a)</strong> who put a lot of diagrams on the board (الذين وضعوا الكثير من المخططات على السبورة).<br />
        <input type="radio" name="Q15" id="Qs30" value="b" <?php if(isset($_POST['Q15'])&&$_POST['Q15']=='b') echo "checked";?> />
        <strong>(b)</strong> who spend a lot of time explaining (الذين يقضون الكثير من الوقت في الشرح).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>16.</td>
    <td>When I’m analyzing a story or a novel (عندما أقوم بتحليل قصة أو رواية) <?php if(in_array(16, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q16" id="Qs31" value="a" <?php if(isset($_POST['Q16'])&&$_POST['Q16']=='a') echo "checked";?> />
        <strong>(a)</strong> I think of the incidents and try to put them together to figure out the themes (أفكر في الأحداث وأحاول تجميعها لمعرفة المواضيع).<br />
        <input type="radio" name="Q16" id="Qs32" value="b" <?php if(isset($_POST['Q16'])&&$_POST['Q16']=='b') echo "checked";?> />
        <strong>(b)</strong> I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them (فقط أعرف ما هي المواضيع عندما أنتهي من القراءة وبعد ذلك يجب أن أعود وأجد الحوادث التي توضحها).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>17.</td>
    <td>When I start a homework problem, I am more likely to (عندما أبدأ مشكلة في الواجب المنزلي ، فمن المرجح أن أفعل ذلك) <?php if(in_array(17, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q17" id="Qs33" value="a" <?php if(isset($_POST['Q17'])&&$_POST['Q17']=='a') echo "checked";?> />
        <strong>(a)</strong> start working on the solution immediately (ابدأ العمل على الحل على الفور).<br />
        <input type="radio" name="Q17" id="Qs34" value="b" <?php if(isset($_POST['Q17'])&&$_POST['Q17']=='b') echo "checked";?> />
        <strong>(b)</strong> try to fully understand the problem first(حاول أن تفهم المشكلة تمامًا أولاً).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>18.</td>
    <td>I prefer the idea of ( انا احب فكرة ال ) <?php if(in_array(18, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q18" id="Qs35" value="a" <?php if(isset($_POST['Q18'])&&$_POST['Q18']=='a') echo "checked";?> />
      <strong>(a)</strong> certainty (يقين).<br />
      <input type="radio" name="Q18" id="Qs36" value="b" <?php if(isset($_POST['Q18'])&&$_POST['Q18']=='b') echo "checked";?> />
      <strong>(b)</strong> theory (الفرضيات).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>19.</td>
    <td>I remember best ( انا اتذكر بشكل افضل ) <?php if(in_array(19, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q19" id="Qs37" value="a" <?php if(isset($_POST['Q19'])&&$_POST['Q19']=='a') echo "checked";?> />
      <strong>(a)</strong> what I see (ما أرى ).<br />
      <input type="radio" name="Q19" id="Qs38" value="b" <?php if(isset($_POST['Q19'])&&$_POST['Q19']=='b') echo "checked";?> />
      <strong>(b)</strong> what I hear (ما استمع اليه ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>20.</td>
    <td>It is more important to me that an instructor (والأهم بالنسبة لي أن يكون مدربًا ) <?php if(in_array(20, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q20" id="Qs39" value="a" <?php if(isset($_POST['Q20'])&&$_POST['Q20']=='a') echo "checked";?> />
      <strong>(a)</strong> lay out the material in clear sequential steps(ضع المادة في خطوات متسلسلة واضحة).<br />
      <input type="radio" name="Q20" id="Qs40" value="b" <?php if(isset($_POST['Q20'])&&$_POST['Q20']=='b') echo "checked";?> />
      <strong>(b)</strong> give me an overall picture and relate the material to other subjects (أعطائي صورة شاملة وربط المواد بموضوعات أخرى).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>21.</td>
    <td>I prefer to study ( انا افضل دراسة ) <?php if(in_array(21, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q21" id="Qs41" value="a" <?php if(isset($_POST['Q21'])&&$_POST['Q21']=='a') echo "checked";?> />
      <strong>(a)</strong> in a study group (بمجموعات دراسية ).<br />
      <input type="radio" name="Q21" id="Qs42" value="b" <?php if(isset($_POST['Q21'])&&$_POST['Q21']=='b') echo "checked";?> />
      <strong>(b)</strong> alone (بمفردي ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>22.</td>
    <td>I am more likely to be considered (انا غالبا اعتبر ) <?php if(in_array(22, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q22" id="Qs43" value="a" <?php if(isset($_POST['Q22'])&&$_POST['Q22']=='a') echo "checked";?> />
        <strong>(a)</strong> careful about the details of my work (حذر حول تفاصيل العمل الخاص بي ).<br />
        <input type="radio" name="Q22" id="Qs44" value="b" <?php if(isset($_POST['Q22'])&&$_POST['Q22']=='b') echo "checked";?> />
        <strong>(b)</strong> creative about how to do my work (مبدع حول كيفية القيام بعملي).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>23.</td>
    <td>When I get directions to a new place, I prefer (عندما أحصل على توجيهات إلى مكان جديد، أنا أفضل ) <?php if(in_array(23, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q23" id="Qs45" value="a" <?php if(isset($_POST['Q23'])&&$_POST['Q23']=='a') echo "checked";?> />
      <strong>(a)</strong> a map ( خريطة).<br />
      <input type="radio" name="Q23" id="Qs46" value="b" <?php if(isset($_POST['Q23'])&&$_POST['Q23']=='b') echo "checked";?> />
      <strong>(b)</strong> written instructions ( تعليمات مكتوبة).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>24.</td>
    <td>I learn ( انا اتعلم ) <?php if(in_array(24, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q24" id="Qs47" value="a" <?php if(isset($_POST['Q24'])&&$_POST['Q24']=='a') echo "checked";?> />
      <strong>(a)</strong> at a fairly regular pace. If I study hard, I’ll “get it (بوتيرة منتظمة إلى حد ما. إذا درست بجد ، فسأفهمها ).”<br />
      <input type="radio" name="Q24" id="Qs48" value="b" <?php if(isset($_POST['Q24'])&&$_POST['Q24']=='b') echo "checked";?> />
      <strong>(b)</strong> in fits and starts. I’ll be totally confused and then suddenly it all “clicks” (مع اندفاعات غير منتظمة من النشاط .. سأكون مرتبكًا تمامًا ثم فجأة "فهمت) .</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>25.</td>
    <td>I would rather first (أفضل أولا) <?php if(in_array(25, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q25" id="Qs49" value="a" <?php if(isset($_POST['Q25'])&&$_POST['Q25']=='a') echo "checked";?> />
        <strong>(a)</strong> try things out (محاولة الامور).<br />
        <input type="radio" name="Q25" id="Qs50" value="b" <?php if(isset($_POST['Q25'])&&$_POST['Q25']=='b') echo "checked";?> />
        <strong>(b)</strong> think about how I’m going to do it (فكر في كيفية القيام بذلك).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>26.</td>
    <td>When I am reading for enjoyment, I like writers to (عندما أقرأ من أجل الاستمتاع ، أحب أن يفعل الكتاب) <?php if(in_array(26, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q26" id="Qs51" value="a" <?php if(isset($_POST['Q26'])&&$_POST['Q26']=='a') echo "checked";?> />
      <strong>(a)</strong> clearly say what they mean (يقولون بوضوح ما يقصدونه).<br />
      <input type="radio" name="Q26" id="Qs52" value="b" <?php if(isset($_POST['Q26'])&&$_POST['Q26']=='b') echo "checked";?> />
      <strong>(b)</strong> say things in creative, interesting ways (يقولون أشياء بطرق مبتكرة ومثيرة للاهتمام).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>27.</td>
    <td>When I see a diagram or sketch in class, I am most likely to remember (عندما أرى رسمًا تخطيطيًا أو رسمًا توضيحيا في الفصل ، فمن المرجح أن اتذكر ) <?php if(in_array(27, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q27" id="Qs53" value="a" <?php if(isset($_POST['Q27'])&&$_POST['Q27']=='a') echo "checked";?> />
      <strong>(a)</strong> the picture ( الصورة ).<br />
        <input type="radio" name="Q27" id="Qs54" value="b" <?php if(isset($_POST['Q27'])&&$_POST['Q27']=='b') echo "checked";?> />
      <strong>(b)</strong> what the instructor said about it (ما قاله المدرس حول هذا الموضوع).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>28.</td>
    <td>When considering a body of information, I am more likely to (عند التفكير في مجموعة من المعلومات ، من المرجح أن أفعل ذلك) <?php if(in_array(28, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q28" id="Qs55" value="a" <?php if(isset($_POST['Q28'])&&$_POST['Q28']=='a') echo "checked";?> />
      <strong>(a)</strong> focus on details and miss the big picture (ركز على التفاصيل وافتقد الصورة الكبيرة).<br />
      <input type="radio" name="Q28" id="Qs56" value="b" <?php if(isset($_POST['Q28'])&&$_POST['Q28']=='b') echo "checked";?> />
      <strong>(b)</strong> try to understand the big picture before getting into the details (حاول أن تفهم الصورة الكبيرة قبل الدخول في التفاصيل).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>29.</td>
    <td>I more easily remember ( من السهولة تذكر ) <?php if(in_array(29, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q29" id="Qs57" value="a" <?php if(isset($_POST['Q29'])&&$_POST['Q29']=='a') echo "checked";?> />
      <strong>(a)</strong> something I have done ( شيء قمت بعمله سابقا ).<br />
      <input type="radio" name="Q29" id="Qs58" value="b" <?php if(isset($_POST['Q29'])&&$_POST['Q29']=='b') echo "checked";?> />
      <strong>(b)</strong> something I have thought a lot about ( شيء قمت بالتفكير به ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>30.</td>
    <td>When I have to perform a task, I prefer to (عندما يتعين علي أداء مهمة ، أفضل ) <?php if(in_array(30, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q30" id="Qs59" value="a" <?php if(isset($_POST['Q30'])&&$_POST['Q30']=='a') echo "checked";?> />
        <strong>(a)</strong> master one way of doing it ( اتقان طريقة واحده لفعله).<br />
        <input type="radio" name="Q30" id="Qs60" value="b" <?php if(isset($_POST['Q30'])&&$_POST['Q30']=='b') echo "checked";?> />
        <strong>(b)</strong> come up with new ways of doing it (ايجاد طرق متنوعة لفعله).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>31.</td>
    <td>When someone is showing me data, I prefer (عندما يعرض لي شخص ما البيانات ، أفضل ) <?php if(in_array(31, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q31" id="Qs61" value="a" <?php if(isset($_POST['Q31'])&&$_POST['Q31']=='a') echo "checked";?> />
      <strong>(a)</strong> charts or graphs (رسوم بيانية او مخططات ).<br />
      <input type="radio" name="Q31" id="Qs62" value="b" <?php if(isset($_POST['Q31'])&&$_POST['Q31']=='b') echo "checked";?> />
      <strong>(b)</strong> text summarizing the results (نص يلخص النتائج).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>32.</td>
    <td>When writing a paper, I am more likely to (عند كتابة ورقة ، من المرجح أن أفعل ذلك) <?php if(in_array(32, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q32" id="Qs63" value="a" <?php if(isset($_POST['Q32'])&&$_POST['Q32']=='a') echo "checked";?> />
        <strong>(a)</strong> work on (think about or write) the beginning of the paper and progress forward (العمل على (التفكير أو الكتابة) بداية من الورق والتقدم إلى الأمام).<br />
        <input type="radio" name="Q32" id="Qs64" value="b" <?php if(isset($_POST['Q32'])&&$_POST['Q32']=='b') echo "checked";?> />
        <strong>(b)</strong> work on (think about or write) different parts of the paper and then order them (اعمل (فكر أو اكتب) على أجزاء مختلفة من الورقة ثم اقم بترتبيهاا).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>33.</td>
    <td>When I have to work on a group project, I first want to (عندما يتعين علي العمل في مشروع جماعي ، فأنا أريد أولاً) <?php if(in_array(33, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q33" id="Qs65" value="a" <?php if(isset($_POST['Q33'])&&$_POST['Q33']=='a') echo "checked";?> />
      <strong>(a)</strong> have “group brainstorming” where everyone contributes ideas (لديك "عصف ذهني جماعي" حيث يساهم الجميع بأفكارهم ).<br />
      <input type="radio" name="Q33" id="Qs66" value="b" <?php if(isset($_POST['Q33'])&&$_POST['Q33']=='b') echo "checked";?> />
      <strong>(b)</strong> brainstorm individually and then come together as a group to compare ideas (تبادل الأفكار بشكل فردي ثم اجتمعوا معًا كمجموعة لمقارنة الأفكار).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>34.</td>
    <td>I consider it higher praise to call someone ( أنا أعتبر أنه أعلى الثناء لدعوة شخص بي) <?php if(in_array(34, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>
      <input type="radio" name="Q34" id="Qs67" value="a" <?php if(isset($_POST['Q34'])&&$_POST['Q34']=='a') echo "checked";?> />
      <strong>(a)</strong> sensible (عاقل ).<br />
      <input type="radio" name="Q34" id="Qs68" value="b" <?php if(isset($_POST['Q34'])&&$_POST['Q34']=='b') echo "checked";?> />
      <strong>(b)</strong> imaginative (واسع الخيال).</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>35.</td>
    <td>When I meet people at a party, I am more likely to remember (عندما أقابل أشخاصًا في حفلة ، فمن المرجح أن أتذكر) <?php if(in_array(35, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q35" id="Qs69" value="a" <?php if(isset($_POST['Q35'])&&$_POST['Q35']=='a') echo "checked";?> />
      <strong>(a)</strong> what they looked like ( كيف يبدو شكلهم).<br />
      <input type="radio" name="Q35" id="Qs70" value="b" <?php if(isset($_POST['Q35'])&&$_POST['Q35']=='b') echo "checked";?> />
      <strong>(b)</strong> what they said about themselves ( ماذا قالو عن نفسهم ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>36.</td>
    <td>When I am learning a new subject, I prefer to ( عندما اقوم بتعلم موضوع جديد , انا افضل) <?php if(in_array(36, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q36" id="Qs71" value="a" <?php if(isset($_POST['Q36'])&&$_POST['Q36']=='a') echo "checked";?> />
      <strong>(a)</strong> stay focused on that subject, learning as much about it as I can ( استمر في التركيز على هذا الموضوع ، وتعلم الكثير عنه قدر المستطاع).<br />
      <input type="radio" name="Q36" id="Qs72" value="b" <?php if(isset($_POST['Q36'])&&$_POST['Q36']=='b') echo "checked";?> />
      <strong>(b)</strong> try to make connections between that subject and related subjects (حاول إقامة روابط بين هذا الموضوع والمواضيع ذات الصلة).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>37.</td>
    <td>I am more likely to be considered ( انا غالبا اعتبر ) <?php if(in_array(37, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q37" id="Qs73" value="a" <?php if(isset($_POST['Q37'])&&$_POST['Q37']=='a') echo "checked";?> />
      <strong>(a)</strong> outgoing (منفتح ).<br />
      <input type="radio" name="Q37" id="Qs74" value="b" <?php if(isset($_POST['Q37'])&&$_POST['Q37']=='b') echo "checked";?> />
      <strong>(b)</strong> reserved ( متحفظ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>38.</td>
    <td>I prefer courses that emphasize ( أنا أفضل الدورات التي تؤكد) <?php if(in_array(38, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q38" id="Qs75" value="a" <?php if(isset($_POST['Q38'])&&$_POST['Q38']=='a') echo "checked";?> />
      <strong>(a)</strong> concrete material (facts, data) (مواد ملموسة (حقائق ، بيانات)).<br />
      <input type="radio" name="Q38" id="Qs76" value="b" <?php if(isset($_POST['Q38'])&&$_POST['Q38']=='b') echo "checked";?> />
      <strong>(b)</strong> abstract material (concepts, theories) (مادة مجردة (مفاهيم ، نظريات)).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>39.</td>
    <td>For entertainment, I would rather (للترفيه ، أفضل) <?php if(in_array(39, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q39" id="Qs77" value="a" <?php if(isset($_POST['Q39'])&&$_POST['Q39']=='a') echo "checked";?> />
      <strong>(a)</strong> watch television ( مشاهدة التلفزيون). <br />
        <input type="radio" name="Q39" id="Qs78" value="b" <?php if(isset($_POST['Q39'])&&$_POST['Q39']=='b') echo "checked";?> />
        <strong>(b)</strong> read a book ( قراءة كتاب ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>40.</td>
    <td>Some teachers start their lectures with an outline of what they will cover. Such outlines are ( يبدأ بعض المعلمين محاضراتهم بإيجاز لما سيغطونه. هذه  الخطوط العريضة ) <?php if(in_array(40, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q40" id="Qs79" value="a" <?php if(isset($_POST['Q40'])&&$_POST['Q40']=='a') echo "checked";?> />
      <strong>(a)</strong> somewhat helpful to me (  إلى حد ما مفيدة بالنسبة لي ).<br />
      <input type="radio" name="Q40" id="Qs80" value="b" <?php if(isset($_POST['Q40'])&&$_POST['Q40']=='b') echo "checked";?> />
      <strong>(b)</strong> very helpful to me (مفيد جدا بالنسبة لي ).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>41.</td>
    <td>The idea of doing homework in groups, with one grade for the entire group, ( فكرة أداء الواجب المنزلي في مجموعات ، بدرجة واحدة للمجموعة بأكملها) <?php if(in_array(41, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q41" id="Qs81" value="a" <?php if(isset($_POST['Q41'])&&$_POST['Q41']=='a') echo "checked";?> />
      <strong>(a)</strong> appeals to me(تناشدني ). <br />
      <input type="radio" name="Q41" id="Qs82" value="b" <?php if(isset($_POST['Q41'])&&$_POST['Q41']=='b') echo "checked";?> />
      <strong>(b)</strong> does not appeal to me ( لا تناشدني).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>42.</td>
    <td>When I am doing long calculations, (عندما أقوم بحسابات طويلة) <?php if(in_array(42, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q42" id="Qs83" value="a" <?php if(isset($_POST['Q42'])&&$_POST['Q42']=='a') echo "checked";?> />
        <strong>(a)</strong> I tend to repeat all my steps and check my work carefully ( أميل إلى تكرار جميع خطواتي والتحقق من عملي بعناية).<br />
        <input type="radio" name="Q42" id="Qs84" value="b" <?php if(isset($_POST['Q42'])&&$_POST['Q42']=='b') echo "checked";?> />
        <strong>(b)</strong> I find checking my work tiresome and have to force myself to do it (أجد فحص عملي متعبًا ويجب أن أجبر نفسي على القيام بذلك).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>43.</td>
    <td>I tend to picture places I have been (أميل إلى تصوير الأماكن التي زرتها) <?php if(in_array(43, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q43" id="Qs85" value="a" <?php if(isset($_POST['Q43'])&&$_POST['Q43']=='a') echo "checked";?> />
      <strong>(a)</strong> easily and fairly accurately (بسهولة وبدقة إلى حد ما).<br />
      <input type="radio" name="Q43" id="Qs86" value="b" <?php if(isset($_POST['Q43'])&&$_POST['Q43']=='b') echo "checked";?> />
      <strong>(b)</strong> with difficulty and without much detail (بصعوبة وبدون تفاصيل كثيرة).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>44.</td>
    <td>When solving problems in a group, I would be more likely to (عند حل المشكلات في مجموعة ، من المرجح أن أفعل ذلك) <?php if(in_array(44, $errorQ)) echo "<img src='image/warning.png' width='15' />";?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" name="Q44" id="Qs87" value="a" <?php if(isset($_POST['Q44'])&&$_POST['Q44']=='a') echo "checked";?> />
      <strong>(a)</strong> think of the steps in the solution process (فكر في خطوات عملية الحل).<br />
      <input type="radio" name="Q44" id="Qs88" value="b" <?php if(isset($_POST['Q44'])&&$_POST['Q44']=='b') echo "checked";?> />
      <strong>(b)</strong> think of possible consequences or applications of the solution in a wide range of areas (التفكير في العواقب أو التطبيقات المحتملة للحل في مجموعة واسعة من المجالات).</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">When you have completed filling out the above form please click on the Submit button below. Your results will be returned to you. عند الانتهاء من ملء النموذج أعلاه ، يرجى النقر فوق الزر "إرسال" أدناه. سيتم إرجاع نتائجك إليك. </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td align="center">
  <?php
	if(isset($_GET['status'])&&$_GET['status']==1){ ?>
        <input type="button" name="back" value="Back" onClick='profile()' />&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" id="submit" value="Submit" />
    <?php 
	}
	else{ ?>
    	<input type="submit" name="submit" id="submit" value="Submit" />
	<?php } ?>
    </td>
  </tr>
</table>
</form>
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>