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
							<br>
							<h5 class = "green-text center"> Ещё не с нами? Присоединяйтесь! </h5>
							<form>
								<div class = "row center">
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
										<input class="active" id="login" type="text" class="validate">
										<label for="login">Логин</label>
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
										<input class="active" id="password" type="password" class="validate">
										<label for="password">Пароль</label>
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
										<a href="index.php" class="waves-effect waves-light btn-small center regNow">Зарегистрироваться</a>
										<a class="waves-effect waves-light btn-small right regNow">Зарегистрироваться</a>
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
					url: "backend/reg.php",
					type: "POST",
					data: {

						login: $('#login').val(),
						email: $('#email').val(),
						password: $('#password').val(),
						name: $('#first_name').val(),
						surname: $('#mid_name').val(),
						last_name: $('#last_name').val(),
						number: $('#number').val()

					},
					success: function(result){
						if(result[0] == 'Г'){
							location.href = '/';
						}
						else {
							$('.alert').html(result);
						}

			    	},
					error: function(){

						alert('Ошибка. Повторите попытку позже!');

					}
				});

			});

		</script>
	</body>
</html>
