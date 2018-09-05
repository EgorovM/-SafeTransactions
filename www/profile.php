<?
	include('header.php');
?>
	<br>
	<div class = "container">
		<div class = "container">
			<div class = "row">
				<div class = "col s6">
					<img src = "media/avatars/egorov_michil@mail.ru.png" class = "responsive-img">
				</div>
				<div class = "col s6">
					<h5> Иванов Иван Иванович </h5>
					<p> Владелец магазина "shop"</p>
					<p> Занимаюсь продажой рукодельной мебели </p>
					<br>
					<h5> Контакты: </h5>
					<ul>
						<li>shop.com</li>
						<li>vk.com/shop</li>
						<li>instagram.com/shop</li>
					</ul>
				</div>
			</div>
			<h4 class = "green-text center"> Подтвержден! </h4>
			<br>
			<hr>
			<div class = "row">
				<div class = "col s4 center">
					<h4 > 1 </h4>
					<p> Отзывов </p>
				</div>

				<div class = "col s4 center vline">
					<h4> 4.5 </h4>
					<p> Рейтинг </p>
				</div>
				<div class = "col s4 center vline">
					<h4> 1 </h4>
					<p> Проданных товаров </p>
				</div>

			</div>
			<hr>
		</div>
	</div>

	<br>

	<div class = "container green lighten-4">
		<br>
		<div class = "container">
			<h5 class = "center"> Написать отзыв! </h5>

			<form>
				<div class = "input field">
					<div class = "row">
						<div class = "col s2">
							<p>Ваша оценка:</p>
						</div>
						<div class = "col s10 range-field">
						     <input type="range" id="test5" min="0" max="5" step = "0.5"/>
						</div>
					</div>
					<div class = "row">
						<div class = "col s2">
							<p>Преимущества:</p>
						</div>
						<div class = "col s10">
							<input class = "active" id = "advantages">
						</div>
					</div>

					<div class = "row">
						<div class = "col s2">
							<p>Недостатки:</p>
						</div>
						<div class = "col s10">
							<input class = "active" id = "limitations">
						</div>
					</div>

					<div class = "row">
						<div class = "col s2">
							<p>Комментарий:</p>
						</div>
						<div class = "col s10">
							<input class = "active" id = "limitations">
						</div>
					</div>

					<div class = "row">
						<div class="Button">
							<a href="profile.php" class="waves-effect waves-light btn-small right">Выложить и выбрать товар</a>
						</div>
					</div>

				</div>
			</form>
		</div>
		<br>
	</div>
	<br>

	<div class = "container">
		<h5> Отзывы: </h5>
		<br>
		<hr>
		<div class = "row vline">
			<div class = "col s3">
				<p>Дата: 15.08.2018</p>
				<p>Оценка: 5/5</p>
				<p>Город: Якутск</p>
				<p>Егоров Мичил</p>
			</div>

			<div class = "col s9" style="border-left: 1px solid grey">
				<strong>Преимущества:</strong>
				<p> Продавец очень оперативный, отправил товар в день заказа. Очень быстро дошло! </p>
				<strong>Недостатки:</strong>
				<p> Жаль, но коробка была повреждена, не знаю вина ли это продавца или эксплуатации, но на всякий случай поставил оценку 5! </p>
				<strong>Комментарий:</strong>
				<p> Очень хотел купить стол для новой кухни и заказанный стол как раз вписывается в интерьер, спасибо! </p>
			</div>
		</div>
		<hr>
	</div>

	<br>

<?
	include('footer.php');
?>

	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	<script type="text/javascript">
		$('.dropdown-trigger').dropdown();

		var range = document.getElementById('range');

		noUiSlider.create(range, {

			range: {
				'min': 1300,
				'max': 3250
			},

			step: 150,

			// Handles start at ...
			start: [ 1450, 2050, 2350, 3000 ],

			// ... must be at least 300 apart
			margin: 300,

			// ... but no more than 600
			limit: 600,

			// Display colored bars between handles
			connect: true,

			// Put '0' at the bottom of the slider
			direction: 'rtl',
			orientation: 'vertical',

			// Move handle on tap, bars are draggable
			behaviour: 'tap-drag',
			tooltips: true,
			format: wNumb({
				decimals: 0
			}),

			// Show a scale with the slider
			pips: {
				mode: 'steps',
				stepped: true,
				density: 4
			}
		});
	</script>
</body>




</html>
