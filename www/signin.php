<?
	include('notLoggedHeader.php');
?>


		<div class = "container white screen_mode">
			<br>
			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<br>
							<form>
								<div class = "row center">
									<h5 class = "green-text"> Эл.почта и пароль? </h5>
									<div class="row">
										<div class="input-field col s12 ">
											<input class="active" id="email" type="email" class="validate">
											<label for="email">Эл. почта</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
											<input class="active" id="password1" type="password" class="validate">
											<label for="password1">Пароль</label>
										</div>
									</div>


									<div class="row">
										<div class="Button">
											<a href="index.php" class="waves-effect waves-light btn-small right regNow">Войти</a>
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

		<div class = "container white handheld_mode">
			<br>
			<div class = "row">
				<div class = "col offset-s1 s10 grey lighten-5 z-depth-1">
					<div class = "row center">
						<div class = "container">
							<br>
							<form>
								<div class = "row center">
									<h5 class = "green-text"> Эл.почта и пароль? </h5>
									<div class="row">
										<div class="input-field col s12 ">
											<input class="active" id="email" type="email" class="validate">
											<label for="email">Эл. почта</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
											<input class="active" id="password1" type="password" class="validate">
											<label for="password1">Пароль</label>
										</div>
									</div>


									<div class="row">
										<div class="Button">
											<a href="index.php" class="waves-effect waves-light btn-small center regNow">Войти</a>
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
	</body>
</html>
