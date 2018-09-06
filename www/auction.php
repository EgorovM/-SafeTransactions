<?
	session_start();
	if(empty($_SESSION['login'])){
		include('notLoggedHeader.php');
	} else {
		include('header.php');
	}
?>

		<div class = "container">
			<div class = "row center">
				<h4 class = "green-text"> Добро пожаловать в аукцион! </h4>
				<h6 class = "green-text text-lighten-2"> Вы можете попытаться поторговаться с другими пользователями за определенный товар! </h6>
			</div>

			<div class = "row">
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/cake.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Торт медовый<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Торт медовый<i class="material-icons right">close</i></span>
							<p>Очень вкусный, стандартный, медовый торт!</p>
							<hr>
							<p>Своя стоимость: 300 рб</p>
							<p>Начальная цена: 200 рб</p>
						</div>
					</div>
				</div>
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/banana.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Смузи<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Смузи<i class="material-icons right">close</i></span>
							<p>Есть разные вкусы, например: банановое, клубничное, яблочное</p>
							<hr>
							<p>Своя стоимость: 150 рб</p>
							<p>Начальная цена: 100 рб</p>

						</div>
					</div>
				</div>
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/pizza.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">close</i></span>
							<p>В состав входит: колбаса, сыр, ветчина, хз билбэтим</p>
							<hr>
							<p>Своя стоимость: 425 рб</p>
							<p>Начальная цена: 350 рб</p>
						</div>
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/pizza.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">close</i></span>
							<p>В состав входит: колбаса, сыр, ветчина, хз билбэтим</p>
							<hr>
							<p>Своя стоимость: 425 рб</p>
							<p>Начальная цена: 350 рб</p>
						</div>
					</div>
				</div>

				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/cake.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Торт медовый<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Торт медовый<i class="material-icons right">close</i></span>
							<p>Очень вкусный, стандартный, медовый торт!</p>
							<hr>
							<p>Своя стоимость: 300 рб</p>
							<p>Начальная цена: 200 рб</p>
						</div>
					</div>
				</div>
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/banana.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Смузи<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Смузи<i class="material-icons right">close</i></span>
							<p>Есть разные вкусы, например: банановое, клубничное, яблочное</p>
							<hr>
							<p>Своя стоимость: 150 рб</p>
							<p>Начальная цена: 100 рб</p>

						</div>
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/cake.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Торт медовый<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Торт медовый<i class="material-icons right">close</i></span>
							<p>Очень вкусный, стандартный, медовый торт!</p>
							<hr>
							<p>Своя стоимость: 300 рб</p>
							<p>Начальная цена: 200 рб</p>
						</div>
					</div>
				</div>
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/pizza.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Пицца Неопалитано<i class="material-icons right">close</i></span>
							<p>В состав входит: колбаса, сыр, ветчина, хз билбэтим</p>
							<hr>
							<p>Своя стоимость: 425 рб</p>
							<p>Начальная цена: 350 рб</p>
						</div>
					</div>
				</div>
				<div class = "col s4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator responsive-img" src="media/images/banana.jpg">
						</div>

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Смузи<i class="material-icons right">more_vert</i></span>
							<p><a href="pizza.php">Подробнее</a></p>
						</div>

						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Смузи<i class="material-icons right">close</i></span>
							<p>Есть разные вкусы, например: банановое, клубничное, яблочное</p>
							<hr>
							<p>Своя стоимость: 150 рб</p>
							<p>Начальная цена: 100 рб</p>

						</div>
					</div>
				</div>

			</div>
		</div>

		<?
			include('footer.php');
		?>

		<script type="text/javascript">
			$('.dropdown-trigger').dropdown();
		</script>
	</body>
</html>
