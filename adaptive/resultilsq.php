<?php
require_once('../config.php');

if(!isset($_GET['status'])&&$_GET['status']!=1){
//---- Update User Info ----
	$user = new stdClass();
	$user->id = $USER->id;
	$user->active_reflective = adaptive_decrypt($_GET['r1']);
	$user->sensing_intuitive = adaptive_decrypt($_GET['r2']);
	$user->visual_verbal = adaptive_decrypt($_GET['r3']);
	$user->sequential_global = adaptive_decrypt($_GET['r4']);
	$user->date_taken_ils = time();
	$user->skip_taken_ils = 'No';
	$DB->update_record('user', $user);
	
	// Reset back $USER data..
	$USER = update_user_record_by_id($user->id);
//---------------------------
	$act_ref = $user->active_reflective;
	$sen_int = $user->sensing_intuitive;
	$vis_ver = $user->visual_verbal;
	$seq_glo = $user->sequential_global;
}
else
if(isset($_GET['status'])&&$_GET['status']==1){
	$act_ref = $USER->active_reflective;
	$sen_int = $USER->sensing_intuitive;
	$vis_ver = $USER->visual_verbal;
	$seq_glo = $USER->sequential_global;	
}
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('ilsquestionnaire');

$PAGE->navbar->add($pagetitle);
$heading = "Your ILS Report Form";
$PAGE->set_title($pagetitle);
$PAGE->set_heading($heading);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/resultilsq.php');

echo $OUTPUT->header();

?>
<script>
function infoILS(url, title, w, h) {
  var left = (screen.width/2)-(w/2);
  var top = (screen.height/2)-(h/2);
  return window.open(url, title, 'scrollbars=yes, resizable=yes, width='+w+', height='+h+', top='+top+', left='+left);
}
function home() {
	window.location.href = "<?php echo $CFG->wwwroot;?>";
}
function profile() {
	window.location.href = "<?php echo $CFG->wwwroot;?>/user/profile.php";
}
</script>
<style>
table.report{text-align:center;}
td.line{border-top:#333 thin solid;}
td.lineDivide{border-top:#333 thin solid;border-right:#333 thin solid;}
td.divide{border-right:#333 thin solid;}
.error {
	background:#ffecec url('image/warning.png') no-repeat 10px 50%;
	border:1px solid #f5aca6;
}
</style>
<div id="page" class="container-fluid" style="width:60%;">
<div id="page-content" class="row-fluid">
<div role="main">
<?php
if($USER->skip_taken_ils!='No'){
?>
<table width="100%" border="0" class="report">
  <tr>
    <td colspan="14">
    	<h3>Your ILS Report Form</h3>
        <p>You have not answered ILS Questionnaire.(<a href='<?php echo $CFG->wwwroot;?>/adaptive/ilsq.php?status=1'>Take</a>)</p>
    </td>
  </tr>
</table>
<?php
}
else{
?>
<table width="100%" border="0" class="report">
  <tr>
    <td colspan="14"><h3>Your ILS Report Form</h3>
<?php
if(isset($_GET['status'])&&$_GET['status']==1){ 
  echo "<p>Last Taken : ".userdate($USER->date_taken_ils)." (<img src='../pix/b/document-edit.png' width='20' height='20' /> <a href='".$CFG->wwwroot."/adaptive/ilsq.php?status=1'>Retake</a>)</p>";
}
?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Active</td>
    <td><?php if($act_ref=='11a'){ echo "X";}?></td>
    <td><?php if($act_ref=='9a'){ echo "X";}?></td>
    <td><?php if($act_ref=='7a'){ echo "X";}?></td>
    <td><?php if($act_ref=='5a'){ echo "X";}?></td>
    <td><?php if($act_ref=='3a'){ echo "X";}?></td>
    <td class="divide"><?php if($act_ref=='1a'){ echo "X";}?></td>
    <td><?php if($act_ref=='1b'){ echo "X";}?></td>
    <td><?php if($act_ref=='3b'){ echo "X";}?></td>
    <td><?php if($act_ref=='5b'){ echo "X";}?></td>
    <td><?php if($act_ref=='7b'){ echo "X";}?></td>
    <td><?php if($act_ref=='9b'){ echo "X";}?></td>
    <td><?php if($act_ref=='11b'){ echo "X";}?></td>
    <td rowspan="2">Reflective</td>
  </tr>
  <tr>
    <td class="line">11a</td>
    <td class="line">9a</td>
    <td class="line">7a</td>
    <td class="line">5a</td>
    <td class="line">3a</td>
    <td class="lineDivide">1a</td>
    <td class="line">1b</td>
    <td class="line">3b</td>
    <td class="line">5b</td>
    <td class="line">7b</td>
    <td class="line">9b</td>
    <td class="line">11b</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Sensing</td>
    <td><?php if($sen_int=='11a'){ echo "X";}?></td>
    <td><?php if($sen_int=='9a'){ echo "X";}?></td>
    <td><?php if($sen_int=='7a'){ echo "X";}?></td>
    <td><?php if($sen_int=='5a'){ echo "X";}?></td>
    <td><?php if($sen_int=='3a'){ echo "X";}?></td>
    <td class="divide"><?php if($sen_int=='1a'){ echo "X";}?></td>
    <td><?php if($sen_int=='1b'){ echo "X";}?></td>
    <td><?php if($sen_int=='3b'){ echo "X";}?></td>
    <td><?php if($sen_int=='5b'){ echo "X";}?></td>
    <td><?php if($sen_int=='7b'){ echo "X";}?></td>
    <td><?php if($sen_int=='9b'){ echo "X";}?></td>
    <td><?php if($sen_int=='11b'){ echo "X";}?></td>
    <td rowspan="2">Intuitive</td>
  </tr>
  <tr>
    <td class="line">11a</td>
    <td class="line">9a</td>
    <td class="line">7a</td>
    <td class="line">5a</td>
    <td class="line">3a</td>
    <td class="lineDivide">1a</td>
    <td class="line">1b</td>
    <td class="line">3b</td>
    <td class="line">5b</td>
    <td class="line">7b</td>
    <td class="line">9b</td>
    <td class="line">11b</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Visual</td>
    <td><?php if($vis_ver=='11a'){ echo "X";}?></td>
    <td><?php if($vis_ver=='9a'){ echo "X";}?></td>
    <td><?php if($vis_ver=='7a'){ echo "X";}?></td>
    <td><?php if($vis_ver=='5a'){ echo "X";}?></td>
    <td><?php if($vis_ver=='3a'){ echo "X";}?></td>
    <td class="divide"><?php if($vis_ver=='1a'){ echo "X";}?></td>
    <td><?php if($vis_ver=='1b'){ echo "X";}?></td>
    <td><?php if($vis_ver=='3b'){ echo "X";}?></td>
    <td><?php if($vis_ver=='5b'){ echo "X";}?></td>
    <td><?php if($vis_ver=='7b'){ echo "X";}?></td>
    <td><?php if($vis_ver=='9b'){ echo "X";}?></td>
    <td><?php if($vis_ver=='11b'){ echo "X";}?></td>
    <td rowspan="2">Verbal</td>
  </tr>
  <tr>
    <td class="line">11a</td>
    <td class="line">9a</td>
    <td class="line">7a</td>
    <td class="line">5a</td>
    <td class="line">3a</td>
    <td class="lineDivide">1a</td>
    <td class="line">1b</td>
    <td class="line">3b</td>
    <td class="line">5b</td>
    <td class="line">7b</td>
    <td class="line">9b</td>
    <td class="line">11b</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan="2">Sequential</td>
    <td><?php if($seq_glo=='11a'){ echo "X";}?></td>
    <td><?php if($seq_glo=='9a'){ echo "X";}?></td>
    <td><?php if($seq_glo=='7a'){ echo "X";}?></td>
    <td><?php if($seq_glo=='5a'){ echo "X";}?></td>
    <td><?php if($seq_glo=='3a'){ echo "X";}?></td>
    <td class="divide"><?php if($seq_glo=='1a'){ echo "X";}?></td>
    <td><?php if($seq_glo=='1b'){ echo "X";}?></td>
    <td><?php if($seq_glo=='3b'){ echo "X";}?></td>
    <td><?php if($seq_glo=='5b'){ echo "X";}?></td>
    <td><?php if($seq_glo=='7b'){ echo "X";}?></td>
    <td><?php if($seq_glo=='9b'){ echo "X";}?></td>
    <td><?php if($seq_glo=='11b'){ echo "X";}?></td>
    <td rowspan="2">Global</td>
  </tr>
  <tr>
    <td class="line">11a</td>
    <td class="line">9a</td>
    <td class="line">7a</td>
    <td class="line">5a</td>
    <td class="line">3a</td>
    <td class="lineDivide">1a</td>
    <td class="line">1b</td>
    <td class="line">3b</td>
    <td class="line">5b</td>
    <td class="line">7b</td>
    <td class="line">9b</td>
    <td class="line">11b</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table><br/>
<p style="text-align: justify;">If your score on a scale is 1-3, you are fairly well balanced on the two dimensions of that scale.</p>
<p style="text-align: justify;">If your score on a scale is 5 or 7, you have a moderate preference for one dimension of the scale and will learn more easily in a teaching  environment which favors that dimension.</p>
<p style="text-align: justify;">If your score on a scale is 9 or 11, you have a very strong preference for one dimension of the scale. You may have real difficulty learning in an environment which does not support that preference.</p>
<p><a href="" onClick='infoILS("<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php", "_blank", 900, 900);'>More info..</a></p>
<br />
<table width="100%" border="0">
  <tr>
  <?php
	if(isset($_GET['status'])&&$_GET['status']==1){ ?>
    <td align="left"><input type="button" name="back" value="Back" onClick='profile()' /></td>
    <?php }
	else{ ?>
    <td align="right"><input type="button" name="continue" value="Continue" onClick='home()' /></td>
	<?php } ?>
  </tr>
</table>
<?php }?>
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>