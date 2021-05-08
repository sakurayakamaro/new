<?php
require_once('../config.php');
error_reporting( error_reporting() & ~E_NOTICE );
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('SNAIL');

$stralearning = get_string('adaptivelearning');
$PAGE->navbar->add($stralearning);

$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
$PAGE->blocks->add_region('content');
$PAGE->set_url('/adaptive/intro_adaptive.php');

echo $OUTPUT->header();
?>
<meta name="robots" content="noindex, nofollow">
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
<div id="page" class="container-fluid" style="width:80%;">
<div id="page-content" class="row-fluid">
<div role="main">
    <table width="100%" border="0">
    	<tr>
        	<td><h2><?php echo get_string('adaptivelearning');?></h2></td>
            <td align="right"><a href="<?php echo $CFG->wwwroot;?>"><img src="../pix/h/home.png" width="25"></a></td>
        </tr>
    </table>
    <div style="text-align:justify">
        <p>Smart Navigation Adaptive E-Learning is a learning platform that helps students in selecting appropriate learning materials that suit their needs.</p>
        <p>This platform takes into account the characteristics of the students' learning style and knowledge-level in giving personal materials. Thus, each student will receive learning materials, which varies according to this characteristics.</p>
        <p>Adaptive learning is online education system that has the ability to change the way of the presentation materials where appropriate for the students. Adam Newman, founding partner of Education Growth Advisors (EGA) defined "personalized learning" as a "pedagogical method or process that draws on observation to inform tailored student educational interventions designed to increase the likelihood of learner success". Compared to the traditional learning management system, all students will get the same material and this burden to some student to understand the topics because it does not suite with their needs.</p>
        <p>The ability for students to keep track their own learning progress shows that they can develop valuable self-monitoring skills, and engage in their personal learning progress. Various studies and applications in educational institutions have proven that adaptive learning can improve the students' understanding, performance and achievements of the course.</p>
        <p>
        <h3>How its work?</h3>
        </p>
        <img src="image/framework.jpg" style="max-width: 100%; height: auto; width: auto\9;"/>
    </div>
    <div align="center" style="margin-top:20px">
    	<input name="back" type="button" value="Back" class="Inverse btn-inverse" onClick="window.location.href='<?php echo $CFG->wwwroot;?>'"></div>
</div>
</div>
</div>
<?php
echo $OUTPUT->footer();
?>