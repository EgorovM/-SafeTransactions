	<?
		include('header.php');
	?>

		<br>
		<div class = "container">
			<div class = "row">
				<ul class="collection">
					<a href = "profile.php">
						<li class="collection-item avatar">
							<img src="media/avatars/egorov_michil@mail.ru.png" alt="" class="circle">
							<span class="title black-text">Ivanovv</span>
							<p class = "black-text">Хотел бы самодельный большой стул <br>
								79142639094
							</p>
							<div class="Button yes">
								<a class="waves-effect waves-light btn-small center regNow">Готов делать</a>
							</div>
							<div class="Button no">
								<a class="waves-effect waves-light btn-small center regNow">Готов делать</a>
							</div>
						</li>
					</a>
				</ul>
			</div>
		</div>

		<?
			include('footer.php');
		?>
		<script type="text/javascript">

			$('.yes').on('click', function(){

				$.ajax({
					url: "backend/order.php",
					type: "POST",
					data: {
						sUser: $('.title').html(),
						type: 'yes'
					},
					success: function(result){

						console.log(result);

			    	},
					error: function(){

						alert('Ошибка. Повторите попытку позже!');

					}
				});

			});

			$('.no').on('click', function(){

				$.ajax({
					url: "backend/order.php",
					type: "POST",
					data: {
						sUser: $('.title').html(),
						type: 'no'
					},
					success: function(result){

						console.log(result);

			    	},
					error: function(){

						alert('Ошибка. Повторите попытку позже!');

					}
				});

			});

		</script>

	</body>
</html>
