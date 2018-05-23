<?php 
require_once('validation.php');
if (isset($_POST['submit'])) {
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$filter_data=filter_data(array('name'=>$name,'email'=>$email,'message'=>$message));
		$errorList=validateCallback($filter_data);
		if (!$errorList) {
			extract($filter_data);
			$to='TestEdu@gmail.com';
			$subject='callback'.' '.$name;
			$letter =  wordwrap($message, 70, "\r\n"); 
			$headers = "From: $email". "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			$success=mail($to,$subject,$letter,$headers);
		}
	}else{
		if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['message'])){
			$errorList[]='Поля не могут быть пустыми';
		}
	}
}
require_once('views/view_about.php');
?>