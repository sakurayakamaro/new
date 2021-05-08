<?php
require_once('../config.php');
error_reporting( error_reporting() & ~E_NOTICE );
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('SNAIL');
$strhelp = get_string('help');

$PAGE->navbar->add($strhelp);

$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/help.php');

echo $OUTPUT->header();
?>
<meta name="robots" content="noindex, nofollow">
<script src="<?php echo $CFG->wwwroot;?>/js/menu.js"></script> 
<link rel="stylesheet" href="<?php echo $CFG->wwwroot;?>/css/menu.css">
<script>
$(function(){
	$('div#toggle_header').children().hide();
});
</script>
<style>
div#toggle_content{
	font-size:13px;
	font-weight:normal;
}
</style>
<div id="page" class="container-fluid">
<div class="row-fluid">
  <div class="span12">
    <table width="100%" border="0">
    	<tr>
            <td align="right"><a href="<?php echo $CFG->wwwroot;?>"><img src="../pix/h/home.png" width="25"></a></td>
        </tr>
    </table>    
  </div>
</div>
<div id="page-content" class="row-fluid">
  <div class="span3" style="border:#CCC thin solid;">
      <div id='cssmenu'>
        <ul>
           <li class='active'><a href='#'><span>Login & Password</span></a></li>
           <li><a href='#'><span>Adaptive</span></a>
           </li>
           <!--<li class='has-sub'><a href='#'><span>Products</span></a>
              <ul>
                 <li><a href='#'><span>Product 1</span></a></li>
                 <li><a href='#'><span>Product 2</span></a></li>
                 <li class='last'><a href='#'><span>Product 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>About</span></a>
              <ul>
                 <li><a href='#'><span>Company</span></a></li>
                 <li class='last'><a href='#'><span>Contact</span></a></li>
              </ul>
           </li>
           <li class='last'><a href='#'><span>Contact</span></a></li>-->
        </ul>
    </div>
  </div>
  <div class="span9" style="border:#CCC thin solid; padding-left:10px;">
  <!-- START CONTENT -->
  	<h3>Login & Password</h3>
  	<div id="toggle_header">How do I log into my utmmartlearn.com account?<br>
    <div id="toggle_content">
    <p>To log into your Facebook account:</p>
    <ol>
    	<li>Go to the right of <a href="<?php echo $CFG->wwwroot;?>">utmsmartlearn.com</a> and enter one of the following:<br/><br/>
        	<ul>
            <li><strong>Username</strong>: You can log in with your username that is currently listed on your Facebook account.<br/>
            
            Your username is based on your UTM LIVE email.<br/><br/>
            
            UTM LIVE email address = <u>mohdimanhafidz7</u>@live.utm.my<br/><br/>
            
            your username = mohdimanhafidz7
            </li><br/>
            <li><strong>Password</strong><br/>
            
            The default password consist of your username and last two characters on your UTM Matrix Card Number<br/><br/>
            
            UTM LIVE email address = <u>mohdimanhafidz7</u>@live.utm.my<br/>
			UTM Matrix Card Number = A14CS22<u>07</u><br/><br/>
            
            your password = mohdimanhafidz707<br/><br/>
            
            <p>You can change your password after your successfully log in.</p>
            </li>
            </ul>
        </li>
    	<li>Click <strong>Log in</strong><br /><br />
		  <img src="image/login page.jpg" width="80%"/></li>
    </ol>
    </div>
    </div>
    <!-- End of Login & Password-->
    
    <div id="toggle_header">How do I change my password?<br>
    <div id="toggle_content">
    <p>If you're logged into your <a href="<?php echo $CFG->wwwroot;?>">utmsmartlearn.com</a> account, you can change your password from your dashboard menu. To do so, </p>
    <ol>
    	<li>Go to your user menu and click <img src="../pix/y/tm.png" /> at the top right of your dashboard and select <img src="../pix/t/edit.png" /> Preferences.
		<br>
        <img src="image/dashboard menu.jpg" width="15%"/>
        </li>
		<br>
    	<li>Under User account, select Change password.<br />
        <img src="image/preference.jpg" width="22%" style="border:#CCC thin solid"/>
		</li>
		<br>
    	<li>On Change password page, type your current and new password.</li>
    	<li>Click Save Changes.</li>
    </ol>
    </div>
    </div>
    <!-- End of Change Password-->
    
  	<h3>Adaptive</h3>
    <div id="toggle_header">How to takes Index Learning Style (ILS) questionnaire?<br>
    <div id="toggle_content">
    <p>First time student will be ask by utmsmartlearn.com to answer ILS Questionnaire. Results from this questionnaire will be used for adaptation  and personalized materials for student.</p>
    <p>If you want to retake again, refer to Retake ILS Questionnaire.</p>
    </div>
    </div>
    <!-- End of takes Index Learning Style (ILS) Questionnaire-->
    
    <div id="toggle_header">How to check ILS result?<br>
    <div id="toggle_content">
    <p>You can check ILS Result once you complete answer ILS Questionnaire.</p>
    <p>To check your result:</p>
    <ol>
    <li>Go to your user menu and click <img src="../pix/y/tm.png" /> at the top right of your dashboard and select <img src="../pix/t/groupn.png" /> Profile.</li>
    <li>Under User details, select Learning Style<br />
    <img src="image/user details.jpg" width="15%" style="border:#CCC thin solid"/>
    </li>
    </ol><br />
    <p>Note: Result that utmsmartlearn.com generate is based on learning style model formulated by Richard M. Felder and Linda K. Silverman (1988).</p>
    </div>
    </div>
    <!-- End of check ILS result-->
    
    <div id="toggle_header">How to retake ILS questionnaire?<br>
    <div id="toggle_content">
    <p>You can retake this questionnaire anytime you want.</p>
    <p>To retake this questionnaire:</p>
    <ol>
    <li>Go to your user menu and click <img src="../pix/y/tm.png" /> at the top right of your dashboard and select <img src="../pix/t/groupn.png" /> Profile.</li>
    <li>Under User details, select Learning Style<br />
    <img src="image/user details.jpg" width="15%" style="border:#CCC thin solid"/>
    </li><br />
    <li>At the top of the result shows date and time your last taken this questionnaire and select <img src='../pix/b/document-edit.png' width='20' height='20' />  Retake.</li>
    <li>Answer all the questions and select Submit button.</li>
    </ol>
    <p>Note: This questionnaire is adopting from learning style model formulated by Richard M. Felder and Linda K. Silverman (1988).</p>
    </div>
    </div>
    <br />

    <!-- End of check ILS result-->
  </div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>