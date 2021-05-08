<?php
require_once('../config.php');
error_reporting( error_reporting() & ~E_NOTICE );
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('SNAIL');

$infographic = get_string('infographic');
$PAGE->navbar->add($infographic);

$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/intro_learning.php');

echo $OUTPUT->header();
?>
<script>
</script>
<style>
</style>
<div id="page" class="container-fluid" style="width:60%;">
<div id="page-content" class="row-fluid">
<div role="main">
    <table width="100%" border="0">
    	<tr>
        	<td><h2><?php echo $infographic;?></h2></td>
            <td align="right"><a href="<?php echo $CFG->wwwroot;?>"><img src="../pix/h/home.png" width="25"></a></td>
        </tr>
    </table>
    <div style="text-align:justify">
    	<img src="image/SNAELinfographic.png" width="100%" />
    </div>
    <div align="center" style="margin-top:20px">
    	<input name="back" type="button" value="Back" class="Inverse btn-inverse" onClick="window.location.href='<?php echo $CFG->wwwroot;?>'"></div>
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>