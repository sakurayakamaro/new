<!----------------------------------------------------------->
<p>Description</p>
<ol type="i">
    <li>XXX</li>
    <li>YYY</li>
</ol>
<ul>
    <li>XXX</li>
    <li>YYY</li>
</ul>
<!----------------------------------------------------------->
<h3>Programming Code</h3>
<div style="width:550px;">
    <div class="code">
    	<span id="datatype">void|int|char|String</span> variable;        
        
        <div data-tooltip="[[--Description--]]" class="tooltip-right" id="code">
          <span id="condition">for|while|if|else</span>(pass=1; pass &lt; listSize; pass++){
        </div>
        
	    <span id="comment">Comment</span>
        
        <span class="red">Highlight</span>
        
		<div class="code">xxxxx</div>        
    </div>
</div>
<!----------------------------------------------------------->
<h3>Toggle</h3>
<div id="toggle_header">Title<br>
	<img src="" alt="" class="img-responsive" height="318" width="500"><br>
</div>
<!----------------------------------------------------------->
<h3>Tooltip</h3>
<a data-tooltip="[[--Description--]]" class="tooltip-[right|left|buttom|top]">value</a>
<!----------------------------------------------------------->
<h3>Popup Balloon - URL|File|Video</h3>
<a class="popup-web" href="url">value</a>
<!----------------------------------------------------------->
<h3>Popup Balloon - Modal</h3>
<a class="popup-modal" href="#test-modal">value</a>
<img src="http://localhost/SNAEL/draftfile.php/34/user/draft/866943359/help.png" alt="" role="presentation" style="vertical-align:text-bottom; margin: 0 .5em;" class="img-responsive" height="16" width="16">
<div id="test-modal" class="white-popup-block mfp-hide">
  <h1>Title</h1>
  <p>Description | Content</p>
	<p><a class="popup-modal-dismiss" href="#">Dismiss</a></p>
</div>
<!----------------------------------------------------------->
<h3>Back Button</h3>
<br />
<a href="#" onclick="history.go(-1);return true;">Back</a>
<br>
<!----------------------------------------------------------->
 <span class="nolink"></span>
 
<!----------------------------------------------------------->
<?php
require_once('../config.php');
error_reporting( error_reporting() & ~E_NOTICE );
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('SNAIL');

// Navigation breadcrumb
$strforgotten = get_string('infologin');
$strlogin     = get_string('login');

$PAGE->navbar->add($strlogin, get_login_url());
$PAGE->navbar->add($strforgotten);

$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/intro_adaptive.php');

echo $OUTPUT->header();
?>
<script>
</script>
<style>
p {
font-size: 1em;
line-height: 1.25em;
margin: 0.625em 0;
padding: 0;
text-align: justify;
}
p:first-line {
font-weight: 800;
font-variant: small-caps;
}
p:first-letter {
font-size: 8em;
line-height: 1em;
font-weight: 400;
float: left;
margin: 0 0 0 -0.1em;
}
p + p:first-letter {
font-size: 1em;
line-height: 1.25em;
float: none;
margin: 0;
}
p + p:first-line {
font-weight: 400;
font-variant: normal;
}
</style>
<div id="page" class="container-fluid" style="width:60%;">
<div id="page-content" class="row-fluid">
<div role="main">
    <table width="100%" border="0">
    	<tr>
        	<td><h2>Adaptive Learning</h2></td>
            <td align="right"><a href="<?php echo $CFG->wwwroot;?>"><img src="../pix/h/home.png" width="25"></a></td>
        </tr>
    </table>
    <div style="text-align:justify">
        
        <input name="back" type="button" value="Back" class="Inverse btn-inverse" onClick="window.location.href='<?php echo $CFG->wwwroot;?>'">
    </div>
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>