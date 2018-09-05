<?
	include('notLoggedHeader.php');
?>
		<br>

		<div class = "container">
			<div class = "row">
				<p> Фильтры: </p>
				<div class="chip">
				    Иванов Иван Иванович
				    <i class="close material-icons">close</i>
				</div>
				<div class="chip">
				    shop.com
				    <i class="close material-icons">close</i>
				</div>
				<div class="chip">
				    instagram.com/shop
				    <i class="close material-icons">close</i>
				</div>
			</div>

			<div class = "row">
				<ul class="collection">
					<a href = "profile.php">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title black-text">shop.com</span>
							<p class = "black-text"> Занимаюсь продажей рукодельной мебели <br>
								Иванов Иван Иванович
							</p>
						</li>
					</a>
				</ul>
			</div>
		</div>

		<?
			include('footer.php');
		?>

	</body>
</html>
