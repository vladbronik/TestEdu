<?php 
require_once('models/model_test.php');
if (isset($_SESSION['login'])) {
	$login=$_SESSION['login'];
	$class_id=get_class_id($login);
	$testsList=get_tests($class_id,'Математика');
	foreach ($testsList as  $tests) {
		if (isset($tests['answer']) && isset($tests['correct'])) {
			if($tests['correct']=='true'){
			$right_answers[]=$tests['answer'];
			
				}
		}
		
	}
 if (count($_POST)>0 && isset($_POST['sub'])) {
 	$counter=0;
 	foreach ($_POST as  $user_answers) {
 		if($user_answers!=$_POST['sub']){
 		if (!array_diff($user_answers, $right_answers) && array_intersect($user_answers, $right_answers)) {
 			$counter++;
 		}
 		}
 	}
 	}
 }



require_once('views/view_Mathematic.php');
?>