<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestEdu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/allmainstyle.css">
	
</head>
<body >
	<div class="header">
		<div class="wrapper">
			<div class="nav">
				<div class="logo">
					<img src="images/1.png" alt="">
					<span>TestEdu</span>
				</div>
				<div class="menu">
					<ul>
						<li><a href="home" id="active">Головна</a></li>
						<li><a href="about" id="active">Про нас</a></li>
						 <?php if (isset($_SESSION['login'])) {?>
			  			<li><a href="Testu"id="active">Тести</a></li>
			 			<?php } ?>
						<li><a href="authorization" id="active">Вхід</a></li>
						<li><a href="registration" id="active">Реєстрація</a></li>
						<?php if(isset($_SESSION['login'])){ ?>
						<li><a href="" id="active"><img src="img/ano.png" alt="" id="kek" id="active"> <span><?=$_SESSION['login']?></span></a></li>
						<?php 
							}else{
						?>
						<li><a href="" id="active"><img src="img/ano.png" alt="" id="kek" id="active"> <span>Особистий кабінет</span></a></li>
						<?php
							}
						?>

					</ul>
				</div>
			</div>
			<div class="agency">
				<?php 
				if($controller){
						include 'controllers/'.$controller; 
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>