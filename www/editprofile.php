<?
	session_start();
	if(empty($_SESSION['login'])){
		include('notLoggedHeader.php');
	} else {
		include('header.php');
	}
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
										<input class="active" id="mid_name" type="text" class="validate">
										<label for="mid_name">Фамилия</label>
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
										<input class="active" id="number" type="text" class="validate">
										<label for="number">Номер телефона</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="shop" type="text" class="validate">
										<label for="shop">Название магазина</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="about" type="text" class="validate">
										<label for="about">Краткое описание</label>
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
										<div class="input-field col s6">
											<input class="active" id="contacts" type="text" class="validate">
											<label for="password1">Контакты</label>
										</div>

										<div class="input-field col s6">
											<a class = "btn" style="width: 100%"> Добавить </a>
										</div>
											<label for="contacts">Контакты</label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="oldpassword" type="password" class="validate">
										<label for="oldpassword">Старый пароль</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="password" type="password" class="validate">
										<label for="password">Новый пароль</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input class="active" id="password1" type="password" class="validate">
										<label for="password1">Подтверждение пароля</label>
									</div>
								</div>

								<span class="alert">

								</span>

								<br>
								<br>
								<br>

								<div class="row">
									<div class="Button">
										<a class="waves-effect waves-light btn-small right regNow">Сохранить</a>
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

		<script>

			$('.regNow').on('click',function(){

				if($('#password').val() != $('#password1').val()){

					$('.alert').html("Пароли не совпадают!");
					return;

				};

				$.ajax({
					url: "backend/changeData.php",
					type: "POST",
					data: {

						login: $('#login').val(),
						email: $('#email').val(),
						password: $('#oldpassword').val(),
						newPassword: $('#oldpassword').val(),
						name: $('#first_name').val(),
						surname: $('#mid_name').val(),
						last_name: $('#last_name').val(),
						shop: $('#shop').val(),
						contacts: $('#contacts').val(),
						about: $('#about').val(),
						number: $('#number').val()

					},
					success: function(result){

						$('.alert').html(result);

			    	},
					error: function(){

						alert('Ошибка. Повторите попытку позже!');

					}
				});

			});

		</script>

	</body>
</html>
