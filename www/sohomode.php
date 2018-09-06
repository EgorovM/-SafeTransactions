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
						<br>
						<h5 class = "green-text center"> Хотите продавать? Подтвердите свою личность! </h5>
						<div class = "container">
							<form>
								<div class = "row center">
									<div class="input-field col s6">
										<input class="active" id="last_name" type="text" class="validate">
										<label for="last_name">Серия</label>
									</div>

									<div class="input-field col s6">
										<input class="active" id="first_name" type="text" class="validate">
										<label for="first_name">Номер</label>
									</div>
								</div>

								<div class="row">
									<div class="Button">
										<a href="index.php" class="waves-effect waves-light btn-small right regNow">Стать продавцом</a>
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
