<?
	session_start();
	if(empty($_SESSION['login'])){
		include('notLoggedHeader.php');
	} else {
		include('header.php');
	}
?>

	<div class = "row screen_mode">
		<div class = "col s7 cyan">
			<br>
			<div class="row">
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col s3"><a href="#test1">Отзывы</a></li>
						<li class="tab col s3"><a href="#test2">Написать отзыв</a></li>
						<li class="tab col s3"><a href="#test3">Написать продавцу</a></li>
						<li class="tab col s3"><a href="#test4">Аукцион</a></li>
					</ul>

	<br>
	<div class = "container">
		<div class = "container">
			<div class = "row">
				<div class = "col s6">
					<img src = "media/avatars/egorov_michil@mail.ru.png" class = "responsive-img">
				</div>

				<div id="test1" class="col s12">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "green-text">Рекомендую!</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!</p>
							<font class = "green-text">Рекомендую!</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "yellow-text">Более менее</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "red-text">Точно нет!</font>
							</p>
						</li>
					</ul>
				</div>

				<div id="test2" class="col s12">
					<br>
					<div class = "col s12 white">
						<form>
							<div class = "row center">
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "product_name" placeholder="Название товара">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<select>
									    <option value="1">Рекомендую!</option>
									    <option value="2">Более менее.</option>
									    <option value="3">Точно нет!</option>
									</select>
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "comment" placeholder="Комментарий">
								</div>

								<div class="Button">
									<a href="profile.php" class="waves-effect waves-light btn-small center">Оставить отзыв</a>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div id="test3" class="col s12">
					<br>
					<div class = "col s12 white">
						<form>
							<div class = "row center">
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "product_name" placeholder="Название товара">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "comment" placeholder="Комментарий">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "contact" placeholder="Ваши контакты">
								</div>
								<div class="Button">
									<a href="profile.php" class="waves-effect waves-light btn-small center">Написать продавцу</a>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div id="test4" class="col s12">
					<div class = "col s12 ">
						<div class="slider">
							<ul class="slides">
								<li>
									<img src="media/images/armchair.jpg">
									<div class="caption center-align">
										<h3>Кресло</h3>
										<h5 class="light grey-text text-lighten-3">13600рб.</h5>
									</div>
								</li>
								<li>
									<img src="media/images/bed.jpg">
									<div class="caption center-align">
										<h3>Кровать</h3>
										<h5 class="light grey-text text-lighten-3">4560рб.</h5>
									</div>
								</li>
								<li>
									<img src="media/images/table.jpg">
									<div class="caption center-align">
										<h3>Стол</h3>
										<h5 class="light grey-text text-lighten-3">3000рб.</h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<br>
		</div>

		<div class = "col s5 blue">
			<div class = "row">
				<nav class = "blue" role="navigation">
					<div class="nav-wrapper">
						<ul id="nav-mobile tabs" class="left hide-on-med-and-down">
					    	<li><a class = "white-text tooltipped" href="addorder.php" data-position="left" data-tooltip="Выложить товар на аукцион"><i class = "material-icons">add</i></a></li>
					    	<li><a class = "white-text tooltipped" href="search.php" data-position="bottom" data-tooltip="Список продавцов"><i class = "material-icons">format_list_bulleted</i></a></li>
					    	<li><a class = "white-text tooltipped" href="editprofile.php" data-position="bottom" data-tooltip="Настройки"><i class = "material-icons">settings</i></a></li>
					    	<li><a class = "white-text tooltipped" href="checkorder.php" data-position="right" data-tooltip="Проверить заказы"><i class = "material-icons">playlist_add_check</i></a></li>
					    </ul>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
					    	<li><a class = "white-text  tooltipped right" href="signout.php" data-position="left" data-tooltip="Выйти"><i class = "material-icons">exit_to_app</i></a></li>
					    </ul>
					</div>
				</nav>
			</div>
			<div class = "row" >
				<div class = "col s4 center">
					<a href="profile.php"><img class = "responsive-img circle" src = "media/avatars/egorov_michil@mail.ru.png"></a>
					<h6 style = "line-height: 0.4em;" class = "white-text"> Иванов Иван </h6>
					<p style = "line-height: 1.5em;" class = "white-text"> Продавец самодельной мебели </p>
					<div class = "row">
						<div class = "col s4">
							<i class = "material-icons white-text">textsms</i>
							<p style = "line-height: 0.1em;" class = "white-text">4</p>
						</div>

						<div class = "col s4">
							<i class = "material-icons white-text">group</i>
							<p style = "line-height: 0.1em;;" class = "white-text">4</p>
						</div>

						<div class = "col s4">
							<i class = "material-icons white-text">star</i>
							<p style = "line-height: 0.1em;" class = "white-text">5.0</p>
						</div>

					</div>
				</div>

				<div class = "col s8 ">
					<h4 class=" light-green-text accent-3 center">Подтвержден!</h4>

					<div class = "container">
						<p class = "white-text">Продаю самодельную мебель очень хорошего качества! Со мной можно связяться позвонив по номеру +79999999999 или написав на почту shop@mail.ru</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class = "row handheld_mode">
		<div class = "col s12 cyan">
			<div class="row">

				<div class = "col s12 blue">
					<div class = "row" >
						<div class = "col s4 center">
							<a href="profile.php"><img class = "responsive-img circle" src = "media/avatars/egorov_michil@mail.ru.png"></a>
							<h6 style = "line-height: 1.5em;" class = "white-text"> Иванов Иван </h6>
							<p style = "line-height: 1.5em;" class = "white-text"> Продавец самодельной мебели </p>

						</div>

						<div class = "col s8 ">
							<h4 class=" light-green-text accent-3 center">Подтвержден!</h4>

							<div class = "container">
								<p class = "white-text">Продаю самодельную мебель очень хорошего качества! Со мной можно связяться позвонив по номеру +79999999999 или написав на почту shop@mail.ru</p>
							</div>
							<div class = "row">
								<div class = "col s4">
									<i class = "material-icons white-text">textsms</i>
									<p style = "line-height: 0.1em;" class = "white-text">4</p>
								</div>

								<div class = "col s4">
									<i class = "material-icons white-text">group</i>
									<p style = "line-height: 0.1em;;" class = "white-text">4</p>
								</div>

								<div class = "col s4">
									<i class = "material-icons white-text">star</i>
									<p style = "line-height: 0.1em;" class = "white-text">5.0</p>
								</div>

							</div>
						</div>
					</div>
				</div>


				<h4 class="black-text center"> Отзывы </h4>
				<div id="test1" class="col s12">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "green-text">Рекомендую!</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!</p>
							<font class = "green-text">Рекомендую!</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "yellow-text">Более менее</font>
							</p>
						</li>
					</ul>
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title">Кровать двухярустная</span>
							<p> Очень хороший продавец! Очень достойная кровать!<br>
							<font class = "red-text">Точно нет!</font>
							</p>
						</li>
					</ul>
				</div>
				<br>
				<h4 class="black-text center"> Оставить отзыв </h4>
				<div id="test2" class="col s12">
					<br>
					<div class = "col s12 white">
						<form>
							<div class = "row center">
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "product_name" placeholder="Название товара">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<select>
									    <option value="1">Рекомендую!</option>
									    <option value="2">Более менее.</option>
									    <option value="3">Точно нет!</option>
									</select>
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "comment" placeholder="Комментарий">
								</div>

								<div class="Button">
									<a href="profile.php" class="waves-effect waves-light btn-small center">Оставить отзыв</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br>
				<h4 class="black-text center"> Написать продавцу </h4>
				<div id="test3" class="col s12">
					<br>
					<div class = "col s12 white">
						<form>
							<div class = "row center">
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "product_name" placeholder="Название товара">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "comment" placeholder="Комментарий">
								</div>
								<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
									<input type = "text" id = "contact" placeholder="Ваши контакты">
								</div>
								<div class="Button">
									<a href="profile.php" class="waves-effect waves-light btn-small center">Написать продавцу</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br>
				<h4 class="black-text center"> Выложенные товары на аукцион </h4>
				<div id="test4" class="col s12">
					<div class = "col s12 ">
						<div class="slider">
							<ul class="slides">
								<li>
									<img src="media/images/armchair.jpg">
									<div class="caption center-align">
										<h3>Кресло</h3>
										<h5 class="light grey-text text-lighten-3">13600рб.</h5>
									</div>
								</li>
								<li>
									<img src="media/images/bed.jpg">
									<div class="caption center-align">
										<h3>Кровать</h3>
										<h5 class="light grey-text text-lighten-3">4560рб.</h5>
									</div>
								</li>
								<li>
									<img src="media/images/table.jpg">
									<div class="caption center-align">
										<h3>Стол</h3>
										<h5 class="light grey-text text-lighten-3">3000рб.</h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>

	</div>
	<?
		include('footer.php');
	?>

		<script src="js/jquery.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
			    $('.tooltipped').tooltip();
			 });

			$(document).ready(function(){
			    $('.tabs').tabs();
			});

			$(document).ready(function(){
			    $('select').formSelect();
			});

	        $(document).ready(function(){
			    $('.slider').slider();
			});

			$(document).ready(function(){
			    $('.sidenav').sidenav();
			});

		</script>

	</body>




</html>
