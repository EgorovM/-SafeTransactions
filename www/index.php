<?
	session_start();
	if(empty($_SESSION['login'])){
		include('notLoggedHeader.php');
	} else {
		include('header.php');
	}
?>

		<div class = "screen_mode" style="background-size: cover;  background-image:  url(media/images/img1.jpg);">
			<div style="background-color: rgba(0,0,0,0.4);" class="about_image">
				<div class = "container">
					<div class = "row center">

						<h2 class="white-text">Пора купить</h2>
						<h5 class="white-text text-lighten-1"> Безопасные покупки с нулевым риском. </h5>

						<br>

						<form>
							<div class="row">
								<div class="col s3 white" style="border: 1px solid black; border-radius: 4px;">
									<input id="fastsearch-site" type="text" class="validate z-depth-1" placeholder="Название сайта">
								</div>

								<div class="col s3 white" style="border: 1px solid black; border-radius: 4px;">
									<input id="fastsearch-contacts" type="text" class="validate z-depth-1" placeholder="Контакты продавца">
								</div>

								<div class="col s3 white oval" style="border: 1px solid black; border-radius: 4px;">
									<input id="fastsearch-site" type="text" class="validate z-depth-1" placeholder="Данные продавца">
								</div>

								<div class="input-field col s3">
									<a href="search.php" class="waves-effect waves-light btn black-text" style = "width:100%;" id="icon_telephone" type="submit" class="validate"> Поиск
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	<div class = "handheld_mode" style="background-size: cover;  background-image:  url(media/images/img1.jpg);">
			<div style="background-color: rgba(0,0,0,0.4);" class="about_image">
				<div class = "container">
					<div class = "row center">

						<h2 class="white-text">Пора купить</h2>
						<h5 class="white-text text-lighten-1"> Безопасные покупки с нулевым риском. </h5>

						<br>

						<form>
							<div class="row">

									<input class = "white-text" id="fastsearch-site" type="text" class="validate z-depth-1" placeholder="Название сайта">
							

						
									<input class = "white-text" id="fastsearch-contacts" type="text" class="validate z-depth-1" placeholder="Контакты продавца">
							

									<input class = "white-text" id="fastsearch-site" type="text" class="validate z-depth-1" placeholder="Данные продавца">
						

								
								<a href="search.php" class="waves-effect waves-light btn white-text" style = "width:100%;" id="icon_telephone" type="submit" class="validate"> Поиск
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class = "screen_mode grey lighten-3">
			<br>
			<br>
			<div class = "container">
					<div class = "row">
						<div class = "col s6">
							<img class = "responsive-img" src = "media/images/men.jpg" >
						</div>

						<div class = "col s6">
							<h5 class = "green-text"> Вы продавец?</h5>
							<p> Раз так, то перейдите в режим продавца и подтвердите свою личность!</p>

							<a class = "waves-effect waves-light btn-small " href = "sohomode.php">  Приступить </a>
						</div>
					</div>
			</div>
			<br>
		</div>

		<div class = "handheld_mode grey lighten-3" >
			<br>
			<br>
			<div class = "container center">
					<div class = "row">
						<img class = "responsive-img " src = "media/images/men.jpg">

						<h5 class = "green-text center"> Вы продавец?</h5>
						<p class=""> Раз так, то перейдите в режим продавца и подтвердите свою личность!</p>

						<a class = "waves-effect waves-light btn-small " href = "sohomode.php">  Приступить </a>
					</div>
			</div>
			<br>
		</div>

		<br>
		<br>

		<div class = "screen_mode container">
			<h6 class = "green-text text-lighten-1 bold"> 3 причины пользоваться нашим сервисом </h6>
			<br>
			<div class = "row">
				<div class = "col s4 m4 center">
					<i class = "green-text large material-icons">group</i>
					<h6 class = "green-text text-lighten-1 "> Сообщество </h6>
					<p>Мы хотим узнать наших пользователей как можно лучше. Наша команда проверяет профили и отзывы. Личность каждого участника подтверждена. Так что вы знаете наверняка, у кого покупаете.</p>
				</div>

				<div class = "col s4 m4 center">
					<i class = "green-text large material-icons">event_seat</i>
					<h6 class = "green-text text-lighten-1">Быстро и удобно</h6>
					<p>Вы можете больше не волноваться насчет потери времени при продажах и гарантии для клиента. Мы делаем это за Вас!</p>
				</div>

				<div class = "col s4 m4 center">
					<i class="green-text large material-icons">https</i>
					<h6 class="green-text text-lighten-1">Защита ваших данных</h6>
					<p>Мы защищаем ваши данные и гарантируем сохранность всех транзакций и покупок от разглашения третьим лицам.</p>
				</div>
			</div>
		</div>

		<div class = "handheld_mode container">
			<h6 class = "green-text text-lighten-1 bold"> 3 причины пользоваться нашим сервисом </h6>
			<br>
				<h6 class = "center green-text text-lighten-1 "> Сообщество </h6>
				<p>Мы хотим узнать наших пользователей как можно лучше. Наша команда проверяет профили и отзывы. Личность каждого участника подтверждена. Так что вы знаете наверняка, у кого покупаете.</p>

			
				<h6 class = "center green-text text-lighten-1">Быстро и удобно</h6>
				<p>Вы можете больше не волноваться насчет потери времени при продажах и гарантии для клиента. Мы делаем это за Вас!</p>
			
				<h6 class="center green-text text-lighten-1">Защита ваших данных</h6>
				<p>Мы защищаем ваши данные и гарантируем сохранность всех транзакций и покупок от разглашения третьим лицам.</p>
		</div>

		<br>

		<?
			include('footer.php');
		?>


		<script src="js/jquery.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.parallax').parallax();
			});
			$(document).ready(function(){
			    $('.sidenav').sidenav();
			  });
		</script>
	</body>


</html>
