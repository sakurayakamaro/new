<?php
require_once('../config.php');
error_reporting( error_reporting() & ~E_NOTICE );
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('SNAIL');
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
<meta name="robots" content="noindex, nofollow">
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
<div id="page" class="container-fluid" style="width:80%;">
<div id="page-content" class="row-fluid">
<div role="main">
    <table width="100%" border="0">
    	<tr>
        	<td><h2>Login & Password</h2></td>
            <td align="right"><a href="<?php echo $CFG->wwwroot;?>"><img src="../pix/h/home.png" width="25"></a></td>
        </tr>
    </table>    
    <div id="toggle_header">How do I log into my Smart Learning account?<br>
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
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>