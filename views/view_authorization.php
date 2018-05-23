
	
			<div class="contanier">
		<div class="login">
			<form action="authorization" method="POST">
		<h2>Login</h2>
		<div class="forminput">
			<input type="text" placeholder="Your Login" class="inp" name="login"><br>
			<input type="password" placeholder="Your Password"class="inp" name="password"><br>
		</div>
		<div class="sub">
			<input type="submit" value="Sign In" name="submit">
		</div>
		</form>
		<?php 
		if(isset($errorList)){
				foreach ($errorList as $error) {
				
		?>
			<span style="border: 2px solid red"><?=$error; ?></span>
		<?php
				}
			}

		 ?>
		</div>
	</div>

