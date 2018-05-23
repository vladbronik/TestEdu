<?php
require_once('validation.php');
if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['password'])) {
	$login=$_POST['login'];
	$password=$_POST['password'];
	$filter_data=filter_data(array('login'=>$login,'password'=>$password));
	if($filter_data){
		$errorList=validateAuth($filter_data);
		if(!$errorList){
			header('Location:home');
		}
	}
}
require_once('views/view_authorization.php');
?>