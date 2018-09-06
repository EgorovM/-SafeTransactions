<?
	include('notLoggedHeader.php');
?>

		<div class = "container white">
			<br>

			<br>

			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<form>
								<div class = "row">
									<br>
									<h5 class = "green-text center"> Редактирование профиля </h5>
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
										<input class="active" id="shopname" type="text" class="validate">
										<label for="shopname">Название магазина</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="description" type="text" class="validate">
										<label for="description">Краткое описание</label>
									</div>
								</div>

								<div class = "row">
									<div class="file-field input-field">
										<div class="btn">
											<span>Аватарка</span>
											<input type="file" multiple>
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Upload one or more files">
										</div>
									</div>
								</div>


								<div class="row">
									<div class = "col s7">
										<div class="input-field col s9">
											<input class="active" id="contacts" type="text" class="validate">
											<label for="password1">Контакты</label>
										</div>

										<div class="input-field col s3">
											<a class = "btn"> Добавить </a>
										</div>
									</div>

									<div class = "col s5">
										<div class = "row">
											<p> shop.com <i class="close material-icons right">close</i></p>

											<p> instagram.com/shop <i class="close material-icons right">close</i></p>

											<p> vk.com/shop <i class="close material-icons right">close</i></p>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="password1" type="password" class="validate">
										<label for="password1">Новый пароль</label>
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
										<a href="profile.php" class="waves-effect waves-light btn-small right regNow">Сохранить</a>
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
