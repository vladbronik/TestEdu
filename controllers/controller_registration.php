<?php
require_once('validation.php');
require_once('models/model_registration.php');
$cities=get_cities('cities');
$classes=get_classes('classes');
$schools=get_school('schools');
if (isset($_POST['submit']) && !empty($_POST['login'])
 && !empty($_POST['password']) && !empty($_POST['password_conf']) 
 && !empty($_POST['surname'])&& !empty($_POST['name'])&& !empty($_POST['fathername'])
 && !empty($_POST['city'])&& !empty($_POST['class']) && !empty($_POST['school']) 
 && !empty($_POST['date'])) {
		$login=$_POST['login'];
		$password=$_POST['password'];
		$password_conf=$_POST['password_conf'];
		$surname=$_POST['surname'];
		$name=$_POST['name'];
		$fathername=$_POST['fathername'];
		$city=$_POST['city'];
		$class=['class'];
		$school=['school'];
		$date=$_POST['date'];
	$filter_data=filter_data(array('login'=>$login,'password'=>$password,
		'password_conf'=>$password_conf,'surname'=>$surname,'name'=>$name,
		'fathername'=>$fathername,'city'=>$city,'class'=>$class,'school'=>$school,
		'date'=>$date));
	if ($filter_data) {
		$errorList=validateRegData($filter_data);
		if(!$errorList){
			$success=insert_data($filter_data);
		}
	}
}
require_once('views/view_registration.php');
?>