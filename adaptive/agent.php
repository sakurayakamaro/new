<?php
/*
- Adaptive Moodle Agent.
- MKA2015 15092015
- Purpose : Agent Function
*/
require_once('../config.php');
// Knowledge Assessment Agent
function knowledgeLevelCGPA($CGPA=''){
	if($CGPA=='')
		return 2; // Default - Intermediate
	if($CGPA<3)
		return 3; // Beginner
	else if($CGPA>=3 && $CGPA<3.5)
		return 2; // Intermediate
	else if($CGPA>=3.5)
		return 1; // Advance
}

// Material Sequencing Agent
// !!!!!!!UPDATE lib/navigationlib.php-1967!!!!
function materialSequencing($mod=false){
	global $USER;
	$show = false;
	if(!$mod) return;
	
	// module covered for adaptive
	$materialAdaptive = array('resource','url','page');
	
	if(in_array($mod->modname, $materialAdaptive)){
		// Advance Visual
		if((substr($USER->visual_verbal,-1)=='a'&&$USER->knowledge_level==1)&&($mod->knvisual==1&&$mod->kladvance==1)){
			$show = true;
		}
		// Intermediate Visual
		else if((substr($USER->visual_verbal,-1)=='a'&&$USER->knowledge_level==2)&&($mod->knvisual==1&&$mod->klintermediate==1)){ 	
			$show = true;
		}
		// Beginner Visual
		else if((substr($USER->visual_verbal,-1)=='a'&&$USER->knowledge_level==3)&&($mod->knvisual==1&&$mod->klbeginner==1)){
			$show = true;
		}
		// Advance Verbal
		if((substr($USER->visual_verbal,-1)=='b'&&$USER->knowledge_level==1)&&($mod->knverbal==1&&$mod->kladvance==1)){ 
			$show = true;
		}		
		// Intermediate Verbal
		else if((substr($USER->visual_verbal,-1)=='b'&&$USER->knowledge_level==2)&&($mod->knverbal==1&&$mod->klintermediate==1)){ 
			$show = true;
		}
		// Beginner Verbal
		else if((substr($USER->visual_verbal,-1)=='b'&&$USER->knowledge_level==3)&&($mod->knverbal==1&&$mod->klbeginner==1)){ 			
			$show = true;
		}
		else if($USER->visual_verbal==NULL&&$USER->knowledge_level==2){
			if($mod->knverbal==1&&$mod->klintermediate==1){
				$show = true;
			}
		}
			/*	
		// If student not answer ILS, materials is based on knowledge level only
		else if($USER->knowledge_level==1&&$mod->kladvance==1){		
			$show = true;
		}
		else if($USER->knowledge_level==2&&$mod->kladvance==2){		
			$show = true;
		}
		else if($USER->knowledge_level==3&&$mod->kladvance==3){		
			$show = true;
		}*/
	}
	else{
		$show = true;
	}
	return $show;
}

function materialIndicator($mod=false){
	global $USER;
	$indicatorLS = '';
	$indicatorKL = '';
	$LSindicator = false;
	$KLindicator = false;
	if(!$mod) return;
	// module covered for adaptive
	$materialAdaptive = array('resource','url','page');
	
	if($mod->knvisual){
		$LSindicator = true;
		$indicatorLS .= '<a data-tooltip="Visual Learner" class="tooltip-top"> <div style="color:#594CD8">&diams;</div> </a>';
	}
	if($mod->knverbal){
		$LSindicator = true;
		$indicatorLS .= '<a data-tooltip="Verbal Learner" class="tooltip-top"> <div style="color:#732C7B">&diams;</div> </a>';
	}
	if($LSindicator){$indicatorLS = ' <sub><a data-tooltip="Knowledge Level" class="tooltip-bottom" style="color:#5ED2B8">LS</a></sub>'.$indicatorLS;}
	
	if($mod->klbeginner){
		$KLindicator = true;
		$indicatorKL .= '<a data-tooltip="Beginner" class="tooltip-top"> <div style="color:#FF6600">&starf;</div> </a>';
	}
	if($mod->klintermediate){
		$KLindicator = true;
		$indicatorKL .= '<a data-tooltip="Intermediate" class="tooltip-top"> <div style="color:#FFBF40">&starf;</div> </a>';
	}
	if($mod->kladvance){
		$KLindicator = true;
		$indicatorKL .= '<a data-tooltip="Advance" class="tooltip-top"> <div style="color:#009933">&starf;</div> </a>';
	}
	if($KLindicator){$indicatorKL = '<sub><a data-tooltip="Knowledge Level" class="tooltip-bottom" style="color:#5ED2B8">KL</a></sub>'.$indicatorKL;}
	
	return " ".$indicatorLS.$indicatorKL;
}
?>