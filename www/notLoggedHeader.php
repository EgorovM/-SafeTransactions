<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>SafeTrans</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/fonts.css" type = "text/css" rel = "stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.alton.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>
	<body class = "grey lighten-5">
		<header>
			<nav class = "white" role="navigation">
				<div class="nav-wrapper">
					<a class = "green-text text-lighten-3" href = "index.php" ><img style = "height: 100%;  padding-left: 50px;" src="media/images/logo.png" alt = "SafeTrans">  </a>
					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
				        <li><a class = "waves-effect waves-light btn-small " href = "sohomode.php">  Режим продавца </a></li>
				        <li style="min-width: 150px; text-align: center;"><a class = "green-text text-lighten-3"  href = "registration.php">  Регистрация </a></li>
				        <li style="min-width: 150px; text-align: center;"><a class = "green-text text-lighten-3" href = "signin.php">  Войти </a></li>		
				    </ul>
				</div>
			</nav>
			<ul id="mobile-demo" class="sidenav">
						<li><div class="user-view">
								<div class="background">
									<img src="media/images/table.jpg">
								</div>
								<a href="#user"><img class="circle" src="media/avatars/egorov_michil@mail.ru.png"></a>
								<a href="#name"><span class="white-text name">Иванов Иван</span></a>
								<a href="#email"><span class="white-text email">shop@mail.ru</span></a>
						</div></li>

						<li><a href="add_order.php"><i class = "material-icons">add</i>Товар на аукцион</a></li>
					    <li><a href="search.php"  ><i class = "material-icons">format_list_bulleted</i>Cписок продавцов</a></li>
					    <li><a href="editprofile.php" ><i class = "material-icons">settings</i>Редактировать профиль</a></li>
					    <li><a href="checkorder.php"><i class = "material-icons">playlist_add_check</i>Проверить заказы</a></li>
					    <li><div class="divider"></div></li>
					    <li><a href="signout.php"><i class = "material-icons">exit_to_app</i> Выйти </a></li>
			</ul>
		</header>
	</body>
	<main>


	<body>
