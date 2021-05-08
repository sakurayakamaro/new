<?php
require_once('../config.php');
$PAGE->set_context(context_system::instance());
$pagetitle = get_string('ilsquestionnaire');
$PAGE->set_title($pagetitle);
$PAGE->set_heading($pagetitle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ILS Questionnaire</title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
<style>
div.infoILS{
	padding:0 10px;
}
</style>
</head>
<meta name="robots" content="noindex, nofollow">
<body id="page-adaptive-resultilsq" class="format-site  path-adaptive gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam localhost--SNAEL pagelayout-base course-1 context-1 has-region-content empty-region-content">
<div style="margin-bottom:20px"></div>
<div id="page" class="container-fluid">
<div id="page-content" class="row-fluid">
<section id="region-main" class="span12">
<div role="main">
<?php
if(!isset($_GET['i'])||$_GET['i']=='1'){
?>
<div class="infoILS">
<p style="font-weight:bold;">ACTIVE AND REFLECTIVE LEARNERS</p>
<ul>
<li>Active learners tend to retain and understand information best by doing something active with it-discussing or applying it or explaining it to others. Reflective learners prefer to think about it quietly first.</li>
<li>&quot;Let's try it out and see how it works&quot; is an active learner's phrase; &quot;Let's think it through first&quot; is the reflective learner's response.</li>
<li>Active learners tend to like group work more than reflective learners, who prefer working alone.</li>
<li>Sitting through lectures without getting to do anything physical but take notes is hard for both learning types, but particularly hard for active learners.</li>
</ul>
<p style="text-align: justify;">Everybody is active sometimes and reflective sometimes. Your preference for one category or the other may be strong, moderate, or mild. A balance of the two is desirable. If you always act before reflecting you can jump into things prematurely and get into trouble, while if you spend too much time reflecting you may never get anything done.</p>
<p style="font-weight:bold;">How can active learners help themselves?</p>
<p style="text-align: justify;">If you are an active learner in a class that allows little or no class time for discussion or problem-solving activities, you should try to compensate for these lacks when you study. Study in a group in which the members take turns explaining different topics to each other. Work with others to guess what you will be asked on the next test and figure out how you will answer. You will always retain information better if you find ways to do something with it.</p>
<p style="font-weight:bold;">How can reflective learners help themselves?</p>
<p style="text-align: justify;">If you are a reflective learner in a class that allows little or not class time for thinking about new information, you should try to compensate for this lack when you study. Don't simply read or memorize the material; stop periodically to review what you have read and to think of possible questions or applications. You might find it helpful to write short summaries of readings or class notes in your own words. Doing so may take extra time but will enable you to retain the material more effectively.</p>
</div>
<?php 
}
if(isset($_GET['i'])&&$_GET['i']=='2'){ ?>
<div class="infoILS">
<p style="font-weight:bold;">SENSING AND INTUITIVE LEARNERS</p>
<ul>
<li>Sensing learners tend to like learning facts, intuitive learners often prefer discovering possibilities and relationships.</li>
<li>Sensors often like solving problems by well-established methods and dislike complications and surprises; intuitors like innovation and dislike repetition. Sensors are more likely than intuitors to resent being tested on material that has not been explicitly covered in class.</li>
<li>Sensors tend to be patient with details and good at memorizing facts and doing hands-on (laboratory) work; intuitors may be better at grasping new concepts and are often more comfortable than sensors with abstractions and mathematical formulations.</li>
<li>Sensors tend to be more practical and careful than intuitors; intuitors tend to work faster and to be more innovative than sensors.</li>
<li>Sensors don’t like courses that have no apparent connection to the real world; intuitors don’t like “plug-and-chug” courses that involve a lot of memorization and routine calculations.</li>
</ul>
<p style="text-align: justify;">Everybody is sensing sometimes and intuitive sometimes. Your preference for one or the other may be strong, moderate, or mild. To be effective as a learner and problem solver, you need to be able to function both ways. If you overemphasize intuition, you may miss important details or make careless mistakes in calculations or hands-on work; if you overemphasize sensing, you may rely too much on memorization and familiar methods and not concentrate enough on understanding and innovative thinking.</p>
<p style="font-weight:bold;">How can sensing learners help themselves?</p>
<p style="text-align: justify;">Sensors remember and understand information best if they can see how it connects to the real world. If you are in a class where most of the material is abstract and theoretical, you may
have difficulty. Ask your instructor for specific examples of concepts and procedures, and find out how the concepts apply in practice. If the teacher does not provide enough specifics, try to find some in your course text or other references or by brainstorming with friends or classmates.</p>
<p style="font-weight:bold;">How can intuitive learners help themselves?</p>
<p style="text-align: justify;">Many college lecture classes are aimed at intuitors. However, if you are an intuitor and you happen to be in a class that deals primarily with memorization and rote substitution in formulas, you may have trouble with boredom. Ask your instructor for interpretations or theories that link the facts, or try to find the connections yourself. You may also be prone to careless mistakes on test because you are impatient with details and don’t like repetition (as in checking your completed solutions). Take time to read the entire question before you start answering and be sure to check your results.</p>
</div>
<?php
}
if(isset($_GET['i'])&&$_GET['i']=='3'){ ?>
<div class="infoILS">
<p style="font-weight:bold;">VISUAL AND VERBAL LEARNERS</p>
<p style="text-align: justify;">Visual learners remember best what they see-pictures, diagrams, flow charts, time lines, films, and demonstrations. Verbal learners get more out of words-written and spoken explanations. Everyone learns more when information is presented both visually and verbally.</p>
<p style="text-align: justify;">In most college classes very little visual information is presented: students mainly listen to lectures and read material written on chalkboards and in textbooks and handouts.</p>
<p style="text-align: justify;">Unfortunately, most people are visual learners, which means that most students do not get nearly as much as they would if more visual presentation were used in class. Good learners are capable of processing information presented either visually or verbally.</p>
<p style="font-weight:bold;">How can visual learners help themselves?</p>
<p style="text-align: justify;">If you are a visual learner, try to find diagrams, sketches, schematics, photographs, flow charts, or any other visual representation of course material that is predominantly verbal. Ask your instructor, consult reference books, and see if any videotapes or CD-ROM displays of the course material are available. Prepare a concept map by listing key points, enclosing them in boxes or circles, and drawing lines with arrows between concepts to show connections. Colorcode your notes with a highlighter so that everything relating to one topic is the same color.</p>
<p style="font-weight:bold;">How can verbal learners help themselves?</p>
<p style="text-align: justify;">Write summaries or outlines of course material in your own words. Working in groups can be particularly effective: you gain understanding of material by hearing classmates’ explanations and you learn even more when you do the explaining.</p>
</div>
<?php
}
if(isset($_GET['i'])&&$_GET['i']=='4'){ ?>
<div class="infoILS">
<p style="font-weight:bold;">SEQUENTIAL AND GLOBAL LEARNERS</p>
<ul>
<li>Sequential learners tend to gain understanding in linear steps, with each step following logically from the previous one. Global learners tend to learn in large jumps, absorbing material almost randomly without seeing connections, and then suddenly "getting it."</li>
<li>Sequential learners tend to follow logical stepwise paths in finding solutions; global learners may be able to solve complex problems quickly or put things together in novel ways once they have grasped the big picture, but they may have difficulty explaining how they did it.</li>
</ul>
<p style="text-align: justify;">Many people who read this description may conclude incorrectly that they are global, since everyone has experienced bewilderment followed by a sudden flash of understanding. What makes you global or not is what happens before the light bulb goes on. Sequential learners may not fully understand the material but they can nevertheless do something with it (like solve the homework problems or pass the test) since the pieces they have absorbed are logically connected. Strongly global learners who lack good sequential thinking abilities, on the other hand, may have serious difficulties until they have the big picture. Even after they have it, they may be fuzzy about the details of the subject, while sequential learners may know a lot about specific aspects of a subject but may have trouble relating them to different aspects of the same subject or to different subjects.</p>
<p style="font-weight:bold;">How can sequential learners help themselves?</p>
<p style="text-align: justify;">Most college courses are taught in a sequential manner. However, if you are a sequential learner and you have an instructor who jumps around from topic to topic or skips steps, you may have difficulty following and remembering. Ask the instructor to fill in the skipped steps, or fill them in yourself by consulting references. When you are studying, take the time to outline the lecture material for yourself in logical order. In the long run doing so will save you time. You might also try to strengthen your global thinking skills by relating each new topic you study to things you already know. The more you can do so, the deeper your understanding of the topic is likely to be.</p>
<p style="font-weight:bold;">How can global learners help themselves?</p>
<p style="text-align: justify;">If you are a global learner, just recognizing that you aren’t slow or stupid but simply function differently from most of your classmates can help a great deal. However, there are some steps you can take that may help you get the big picture more quickly. Before you begin to study the first section of a chapter in a text, skim through the entire chapter to get an overview.
Doing so may be time-consuming initially but it may save you from going over and over individual parts later. Instead of spending a short time on every subject every night, you might find it more productive to immerse yourself in individual subjects for large blocks. Try to relate the subject to things you already know, either by asking the instructor to help you see connections or by consulting references. Above all, don’t lose faith in yourself; you will eventually understand the new material, and once you do your understanding of how it connects to other topics and disciplines may enable you to apply it in ways that most sequential thinkers would never dream of.</p>
</div>
<?php
}
if(isset($_GET['i'])&&$_GET['i']=='ref'){ ?>
<div class="infoILS">
<p style="font-weight:bold;">REFERENCES</p>
<p style="text-align: justify;">R.M. Felder and L.K. Silverman, “Learning and Teaching Styles in Engineering Education,” <em>Engr. Education</em>, 78(7), 674- 681 (1988), <em>&lt;http://www.ncsu.edu/felder-public/Papers/LS-1988.pdf&gt;</em></p>
<p style="text-align: justify;">R.M. Felder, “Meet Your Students: 5. Edward and Irving.” <em>Chemical Engineering Education</em>,
Winter 1994, pp. 36–37, <em>&lt;http://www.ncsu.edu/felder-public/Columns/Edirv.html&gt;</em></p>
<p style="text-align: justify;">R.M. Felder, “Meet Your Students: 1. Stan and Nathan,” <em>Chemical Engineering Education</em>, Spring 1989, pp. 68–69, <em>&lt;http://www.ncsu.edu/felder-public/Columns/Stannathan.html&gt;</em></p>
</div>
<?php
}
?>
<div style="text-align:center; margin-top:20px;">
    <input name="ActRef" type="button" value="Active/Reflective" onclick="window.open('<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php','_self')" <?php if(!isset($_GET['i'])) echo "disabled";?> />
    <input name="SenInt" type="button" value="Sensing/Intuitive"  onclick="window.open('<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php?i=2','_self')" <?php if(isset($_GET['i'])&&$_GET['i']=='2') echo "disabled";?> />
    <input name="VisVer" type="button" value="Visual/Verbal"  onclick="window.open('<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php?i=3','_self')" <?php if(isset($_GET['i'])&&$_GET['i']=='3') echo "disabled";?> />
    <input name="SeqGlo" type="button" value="Sequential/Global"  onclick="window.open('<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php?i=4','_self')" <?php if(isset($_GET['i'])&&$_GET['i']=='4') echo "disabled";?> />
    <input name="Ref" type="button" value="References"  onclick="window.open('<?php echo $CFG->wwwroot;?>/adaptive/infoilsq.php?i=ref','_self')" <?php if(isset($_GET['i'])&&$_GET['i']=='ref') echo "disabled";?> />
</div>
</div>
</section>
</div>
</div>
</body>
</html>