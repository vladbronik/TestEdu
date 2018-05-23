<?php 
function filter_data($data){
	foreach ($data as $key => $value) {
		$filter_data[$key]=filter_input(INPUT_POST, $key,FILTER_SANITIZE_STRING);
	}
	return $filter_data;
}
function checkLogin($login){
	$query="SELECT login FROM students 
	WHERE login='$login'";
	return execute_select_query($query);
}
function validateRegData($data){
	extract($data);
$errorList=[];	
	if(!preg_match('#^([a-zA-Z]{3,15})|([a-zA-Z0-9]{3,15})|(.[a-zA-Z0-9_-]{3,15})$/i#', $login)){
		$errorList[]='Логин должен содержать  от 8 до 32  символов';
	}
	if(!preg_match('#^([a-zA-Z]{8,32})|([a-zA-Z0-9]{8,32})|([a-zA-Z0-9_-]{8,32})$/g #',$password)){
		$errorList[]='Пароль должен содержать  от 8 до 32  символов';
	}	
	
		$checkLogin=checkLogin($login);
		if($checkLogin){
		$errorList[]='Такой логин уже существует';
		}
		if($password_conf != $password){
		$errorList[]='Пароли не совпадают';
		}
		if (!preg_match('#^([а-яА-ЯЁё]{3,15})|(^[a-zA-Z]{3,15})$#',$surname)) {
			$errorList[]='Неверный формат фамилии';
		}
		if (!preg_match('#^([а-яА-ЯЁё]{3,15})|([a-zA-Z]{3,15})$#',$name)) {
			$errorList[]='Неверный формат имени';
		}
		if (!preg_match('#^([а-яА-ЯЁё]{3,20})|([a-zA-Z]{3,20})$#',$fathername)) {
			$errorList[]='Неверный формат отчества';
		}
		if(!filter_var($city,FILTER_VALIDATE_INT)){
			$errorList[]='Выберите пожалуйста город';
		}
		if(!filter_var($class,FILTER_VALIDATE_INT)){
			$errorList[]='Выберите пожалуйста класс';
		}
		if(!filter_var($school,FILTER_VALIDATE_INT)){
			$errorList[]='Выберите пожалуйста школу';
		}
		// if(!preg_match('#^([0-9]{4})-([0-9]{2})-([0-9]{2})$/i#',$date)){
		// 	$errorList[]='Некорректный формат даты';
		// }
	
	return $errorList;
}
function validateAuth($data) {
	extract($data);
	$errorList=[];
    if(!preg_match('#^([a-zA-Z]{3,15})|([a-zA-Z0-9]{3,15})|(.[a-zA-Z0-9_-]{3,15})$/i#', $login)){
		$errorList[]='Пароль должен содержать  от 8 до 32  символов';
	}
	if(!preg_match('#^([a-zA-Z]{8,32})|([a-zA-Z0-9]{8,32})|([a-zA-Z0-9_-]{8,32})$/g #',$password)){
		$errorList[]='Пароль должен содержать  от 8 до 32  символов';
	}
	$query="SELECT password FROM students 
	WHERE login='$login'";
	$result=execute_select_query($query);
	if($result){
		foreach ($result as $user_password) {
			if(password_verify($password,$user_password['password'])){
			$_SESSION['login']=$login;
		}else{
			$errorList[]="Неверный пароль";
		}
		}
		
	}	
	return $errorList;
}
function validateCallback($data){
extract($data);
$errorList=[];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL	)){
		$errorList[]='Некоректный email';
	}
	if(check_length($message,10,70)){
		$errorList[]= 'сообщение должно содержать от 10 до 70 символов';
	}
	return $errorList;
}
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
?>