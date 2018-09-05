<?
	include('notLoggedHeader.php');
?>

		<div class = "container">
			<div class = "row">
						<div class = "col s11">
							<h6 class = "right green-text text-lighten-3"> Уже зарегистрированы? </h6>
						</div>

						<div class = "col s1 left">
							<a class = "waves-effect waves-light btn-small " href = "signin.php"> Войти </a>
						</div>
				</div>
			</div>
		</div>

		<div class = "container white">
			<br>
			<h5 class = "green-text center"> Ещё не с нами? Присоединяйтесь! </h5>
			<br>
			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<form>
								<div class = "row center">
									<div class="input-field col s4">
										<input class="active" id="last_name" type="text" class="validate">
										<label for="last_name">Фамилия</label>
									</div>

									<div class="input-field col s4">
										<input class="active" id="first_name" type="text" class="validate">
										<label for="first_name">Имя</label>
									</div>


									<div class="input-field col s4">
										<input class="active" id="last_name" type="text" class="validate">
										<label for="last_name">Отчество</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12 ">
										<input class="active" id="email" type="email" class="validate">
										<label for="email">Эл. почта</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="telephone" type="text" class="validate">
										<label for="telephone">Номер телефона</label>
									</div>
								</div>


								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="password1" type="password" class="validate">
										<label for="password1">Пароль</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="password2" type="password" class="validate">
										<label for="password2">Подтверждение пароля</label>
									</div>
								</div>

								<div class="row">
									<div class="Button">
										<a href="index.php" class="waves-effect waves-light btn-small right regNow">Зарегистрироваться</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
		<br>

		<?
			include('footer.php');
		?>

	</body>
</html>
