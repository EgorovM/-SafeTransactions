<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>SafeTrans</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="css/fonts.css" type = "text/css" rel = "stylesheet">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.alton.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>

	<body class = "grey lighten-5">
		<header>
			<nav class = "white" role="navigation">
				<div class = "container">
					<div class = "row">
						<div class = "col s3">
							<a class = "left green-text text-lighten-3" href = "index.php" > SafeTransations </a>
						</div>

						<div class = "col s4 dropdown-trigger right" data-target='dropdown1'>
							<div class = "row right">
								<div class = "col s9">
									<p class = "right blue-text"> Иван </a>
								</div>
								<div class = "col s3">
									<i class = "blue-text material-icons">arrow_drop_down</i>
								</div>
							</div>
						</div>
						<ul id='dropdown1' class='dropdown-content'>
							<li><a href = "profile.php"> Профиль </a></li>
							<li><a href = "editprofile.php"> Управление профилем </a></li>
							<li><a href = "search.php"> Список продавцов </a></li>
							<li><a href = "#!"> Выложить товар на аукцион </a></li>
							<li><a href = "#!"> Прием заказов </a></li>

							<li class="divider" tabindex="-1"></li>

							<li><a href = "signout.php"> Выйти </a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<main>
