<?
	session_start();
	if(empty($_SESSION['login'])){
		include('notLoggedHeader.php');
	} else {
		include('header.php');
	}
?>

	<div class = "row screen_mode">
		<div class = "col s12 green">
			<br>
			<div class = "row" >
				<div class = "col s4 center">
					<a href="profile.php"><img class = "responsive-img circle" src = "media/avatars/egorov_michil@mail.ru.png"></a>
					<h6 style = "line-height: 0.4em;" class = "white-text"><? echo $row['name'].' '.$row['surname']; ?> </h6>
					<h6 style = "line-height: 0.4em; display: none" class = "white-text loginHolder"> <? echo $row['login']; ?> </h6>
					<p style = "line-height: 1.5em;" class = "white-text"> <? echo $row['shop']; ?> </p>
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
						<p class = "white-text"> <? echo $row['about']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class = "col s12 lime lighten-5">
			<br>
			<div class="row">
				<div class="col s12">
					<ul class="tabs">
						<li class="tab col s3"><a href="#test1">Отзывы</a></li>
						<li class="tab col s3"><a href="#test2">Написать отзыв</a></li>
						<li class="tab col s3"><a href="#test3">Написать продавцу</a></li>
						<li class="tab col s3"><a href="#test4">Аукцион</a></li>
					</ul>
				</div>
			</div>

			<div class = "container">
				<div class = "row">

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
										<input type = "text" id = "product_name2" placeholder="Название товара">
									</div>
									<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
										<input type = "text" id = "comment2" placeholder="Комментарий">
									</div>
									<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
										<input type = "text" id = "contact2" placeholder="Ваши контакты">
									</div>
									<div class="Button">
										<a class="waves-effect waves-light btn-small center regNow">Написать продавцу</a>
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
		</div>
	</div>



	<div class = "row handheld_mode">
				<div class = "col s12 green">
			<br>
			<div class = "row" >
				<div class = "col s12 center">
					<a href="profile.php"><img class = "responsive-img circle" src = "media/avatars/egorov_michil@mail.ru.png"></a>
					<h6 style = "line-height: 0.4em;" class = "white-text"><? echo $row['name'].' '.$row['surname']; ?> </h6>
					<h6 style = "line-height: 0.4em; display: none" class = "white-text loginHolder"> <? echo $row['login']; ?> </h6>
					<p style = "line-height: 1.5em;" class = "white-text"> <? echo $row['shop']; ?> </p>
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

			<div class = "row">
				<div class = "col s12 ">
					<h4 class=" light-green-text accent-3 center">Подтвержден!</h4>

					<div class = "container">
						<p class = "white-text"> <? echo $row['about']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class = "col s12 lime lighten-5">
			<br>
			

			<div class = "container">
				<div class = "row">

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
										<input type = "text" id = "product_name2" placeholder="Название товара">
									</div>
									<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
										<input type = "text" id = "comment2" placeholder="Комментарий">
									</div>
									<div class = "input-field offset-s1 col s10" style="border: 1px solid black; border-radius: 4px;">
										<input type = "text" id = "contact2" placeholder="Ваши контакты">
									</div>
									<div class="Button">
										<a class="waves-effect waves-light btn-small center regNow">Написать продавцу</a>
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

			$('.regNow').on('click', function(){

				$.ajax({
					url: "backend/order.php",
					type: "POST",
					data: {

						prod: $('#product_name2').val()+$('#product_name1').val(),
						text: $('#comment2').val()+$('#comment1').val(),
						contacts: $('#contact2').val()+$('#contact1').val(),
						sUser: $('.loginHolder').html(),
						type: 'do'
					},
					success: function(result){

						console.log(result);

			    	},
					error: function(){

						alert('Ошибка. Повторите попытку позже!');

					}
				});

			});

		</script>

	</body>
</html>
