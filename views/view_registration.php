
			<form   method="POST">

		<h2>Registration</h2>
		<div class="forminput">
			<input type="text" placeholder="Login*" class="inp" name="login">
			<input type="password" placeholder="Your Password*"class="inp" name="password"><br>
			<input type="password" placeholder="Confirm password*" class="inp" name="password_conf">
			<input type="text" placeholder=" Surname*" class="inp" name="surname"><br> 
			<input type="text" placeholder=" Name*" class="inp" name="name"> 
			<input type="text" placeholder="FatherName*" class="inp" name="fathername"><br> 
			<select name="city" required>
			<option >Виберіть місто*</option>
			<?php
				if (isset($cities)) {
				
			 foreach ($cities as $city) {
			 ?>
			<option value="<?=$city['id'];?>"><?= $city['name'];?></option>
			<?php 
				}
			}
			?>
			</select>
			<select name="class" required>

			<option >Клас навчання*</option>
			<?php if (isset($classes)) {
					foreach ($classes as $class) {
				 ?>
				<option value=<?=$class['id'];?>><?=$class['number'];?></option>
				<?php 
				}
						}
				?>
			</select><br>
			<select name="school" required>
			<option >Вкажіть школу*</option>
			<?php foreach($schools as $school){?>
			<option  value=<?=$school['id'];?>><?=$school['name'];?></option>
			<?php }?>
			</select><br>
			<span id="lol">Вкажіть дату народження*</span><br>
			<input type="date" id="date" name="date">
		</div>
		<div class="sub">
			<input type="submit" value="Registration" name="submit">
		</div>
		</form>
<?php if (isset($errorList)) {
					foreach ($errorList as $error) {
						
					
				 ?> 
				 <span style="border: 2px solid red;"><?=$error?></span>
<?php 
	}
}
if (isset($success)) {
 	echo $success;
 } 
?>