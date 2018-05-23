	<div class="allcontent">
		<div class="wrapper">
			<div class="content">
				<h1>Ми лучшая команда!</h1>
				<div class="items">
					<div class="item">
						<h3>Снеговой Александр</h3>
						<hr>
						<img src="uploads/comanda/Sanya.jpg" alt="">
						<div>Главный php програмист</div>
				</div>
					<div class="item">
						<h3>Зинченко Юрий</h3>
						<hr>
						<img src="uploads/comanda/Yra.jpg" alt="">
						<div>Верстальщик</div>
					</div>
					<div class="item">
						<h3>Жила Виктор</h3>
						<hr>
						<img src="uploads/comanda/Victor.jpg" alt="">
						<div>Главный менеджер</div>
					</div>
					<div class="item">
						<h3>Бондарь Назар</h3>
						<hr>
						<img src="uploads/comanda/Nazar.jpg" alt="">
						<div>Дизайнер</div>
					</div>
					<div class="item last">
						<h3>Дивеев Ярослав</h3>
						<hr>
						<img src="uploads/comanda/Yrik.jpg" alt="">
						<div>Тестировщик</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="alllcontact">
		<div class="wrapper">
			<div class="contact">
				<div class="cont">CONTACT US</div>
				<div id="trait"></div>
				<form action="about" method="POST">
					<input type="text" placeholder="Name" name="name">
					<input type="email"placeholder="Email" name="email">
					<textarea name="message" id="" cols="50" rows="7" placeholder="Оставьте ваше сообщение здесь!"></textarea>
					<input type="submit" class="button" name="submit" value="Send Message">
				</form>
				<?php
					if (isset($errorList)) {
						foreach ($errorList as  $errors) {
							echo $errors;
						}
					}
					if (isset($success)) {
						echo 'Спасибо за обратную связь!';
					}
				?>
			</div>
		</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="about_us.js"></script>
