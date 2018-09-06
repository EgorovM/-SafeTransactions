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
			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<br>
							<form>
								<div class = "row center">
									<h5 class = "green-text"> Логин и пароль </h5>
									<div class="row">
										<div class="input-field col s12 ">
											<input class="active" id="login" type="text" class="validate">
											<label for="login">Логин</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
											<input class="active" id="password" type="password" class="validate">
											<label for="password">Пароль</label>
										</div>
									</div>

									<span class="alert">

									</span>

									<br>
									<br>


									<div class="row">
										<div class="Button">
											<a class="waves-effect waves-light btn-small right regNow">Войти</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
		<?
			include('footer.php');
		?>
		<script>

			$('.regNow').on('click',function(){

				$.ajax({
					url: "backend/login.php",
					type: "POST",
					data: {

						login: $('#login').val(),
						password: $('#password').val()

					},
					success: function(result){
						if(result[0] == 'В'){
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
