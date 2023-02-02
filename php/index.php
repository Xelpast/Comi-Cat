<!DOCTYPE html>
<html lang="en">

<head>
	<!-- git config user.name "Ilya" -->
	<!-- git config user.email "ilyushavavi"gmail.com" -->
	<!-- https://tproger.ru/translations/how-css-flexbox-works/?ysclid=ld1fy0tw5o32516967 -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/js/index.js">
	<link href="/icon/cat.ico" rel="shortcut icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
	<title>Котики (^◔ᴥ◔^)</title>
</head>

<body>
	<div class="glav">
		<div class="header"><img class="log" src="/icon/telecommuting.ico" alt="нема"> <img class="dz"
				src="/img/comi cat.png" alt=""></div>
		<div class="header"> <img class="kotic" width="375px" src="/img/всё про котиков.png" alt=""></div>
		<div class="header">

			<form	action="login.php" method="post">
			<div class="button">
				<a id="open-pop-up" href=""><img class="vxod" width="120px" src="/img/вход.png" alt=""></a>
			</div>
			<div class="pop-up" id="pop-up">
				<div class="pop-up-container" id="open-pop-up">
					<div class="pop-up-body">
						<p>Войти</p>
						<form onsubmit="" action="">
							<input  type="text" name="uname" class="input--wrapper" placeholder="Электронная почта">
							<div class="input--wrapper">
								<input  type="password" name="password" class="js-password-input passwor-vin" placeholder="Пароль" > 
								<button class="btn--pass js-btn-password" >
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
							</div>
							<button class="button1">Войти</button>
							
							<a href="#" id="open-pop-up1"><button class="button2">Зарегистрироваться</button></a>
							<?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
						</form>
						<div class="pop-up-close" id="pop-up-close">
							&#10006
						</div>
					</div>
				</div>
			</div>
		</form>

		<form action="signup-check.php" method="post">
			<div class="pop-up" id="pop-up1">
				<div class="pop-up-container" id="open-pop-up1">
					<div class="pop-up-body">
						<p>Регистрация</p>
						<form action="">
							<input class="input--wrapper" type="text" name="uname" placeholder="Электронная почта">
							<div class="input--wrapper">
								<input  placeholder="Пароль" name="password" type="password" id="js-first-password"> 
								<button type="button" class="btn--pass js-regbtn-password" data-target="#js-first-password">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
							</div>
							<div class="input--wrapper">
								<input  placeholder="Повторите пароль" name="re_password" type="password" id="js-second-password"> 
								<button type="button" class="btn--pass js-regbtn-password" data-target="#js-second-password">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</button>
							</div>
							<button class="button2">Зарегистрироваться</button>
							<?php if (isset($_GET['error_signup'])) { ?>
                                <p class="error_signup"><?php echo $_GET['error_signup']; ?></p>
                            <?php } ?>
							<?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
						</form>
						<div class="pop-up-close" id="pop-up-close1">
							&#10006
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="center">
		<div width="400px" height="100%">
			pqofqioj
		</div>
	<div class="center">
		<div class="center_img"> 
					<img class="cat" src="/img/family.jpg" alt="">
					<div class="center-text">
						<p> Кошка — домашнее животное, одно из наиболее популярных (наряду с собаками) «животных-компаньонов»
							или
							домашних животных. Кошки — млекопитающие и плотоядные животные. За способность уничтожать грызунов
							люди
							ценят кошек около 10 000 тысяч лет. Являясь одиночным охотником на грызунов и других мелких
							животных,
							кошка — социальное животное, использующее для общения широкий диапазон звуковых сигналов, а также
							феромоны и движения тела. В настоящее время в мире насчитывается около 600 млн домашних кошек,
							выведено
							около 256 пород, от длинношерстных (персидская кошка) до лишённых шерсти (сфинксы), признанных и
							зарегистрированных различными фелинологическими организациями. Самая первая порода кошек появилась
							в
							Египте. Кошки распространены по всему миру. порцией ласки.asd</p>
					</div>
			</div>
	</div>

				<div class="center">
					asdas
				</div>
			</div>
			<div class="porod">
				<h2>Породы кошек</h2>
				<div class="footer">
					<div class="porod1">
						<h3>Мейн-кун</h3>
						<img class="kot-porod" src="/img/мейн-кун.jpg" alt="">
					</div>
					<div class="porod1">
						<h3>Русская голубая</h3>
						<img class="kot-porod" src="/img/русская голубая.jpg" alt="">
					</div>
				</div>
				<div class="footer">
					<div class="porod2">
						<h3>Шотландская вислоухая</h3>
						<img class="kot-porod" src="/img/шотландская вислоухая.jpg" alt="">
					</div>
					<div class="porod2">
						<h3>Британская короткошёрстная</h3>
						<img class="kot-porod" src="/img/британская короткошёрстная.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="magazin">
				<h2>Наши магазины</h2>
				<div class="footer">
					<div class="porod1">
						<a href="/php/index1.php"><img class="kot-porod" src="/img/darvin zoo.png" alt=""></a>
					</div>
					<div class="porod1">
						<img class="kot-porod" src="/img/зоосфера.webp" alt="">
					</div>
					<div class="porod1">
						<img class="kot-porod" src="/img/кот и ко.jpg" alt="">
					</div>
				</div>
				<div class="footer">
					<div class="porod2">
						<img class="kot-porod" src="/img/любимчик.png" alt="">
					</div>
					<div class="porod2">
						<img class="kot-porod" src="/img/zoolandia.png" alt="">
					</div>
					<div>
						<img class="kot-porod" src="/img/зоомир.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="slaider1">
				<div class="sidebar middle">
					<div class="slaider">
						<div class="navigation">
							<label for="r1" class="bar"></label>
							<label for="r2" class="bar"></label>
							<label for="r3" class="bar"></label>
							<label for="r4" class="bar"></label>
						</div>
						<input type="radio" name="r" id="r1" checked>
						<input type="radio" name="r" id="r2">
						<input type="radio" name="r" id="r3">
						<input type="radio" name="r" id="r4">
						<div class="slide s1"><img src="/img/alleva.jpg" alt=""></div>
						<div class="slide"><img src="/img/hils.jpg" alt=""></div>
						<div class="slide"><img src="/img/purina.jpg" alt=""></div>
						<div class="slide"><img src="/img/комплекс.jpg" alt=""></div>
					</div>
				</div>
			</div>
			<div class="podval">
				Информация о нас
				<ul>
					<li>Наш телефон: +7 996 801 18 87</li>
					<li>Мы так же в соцсетях: <a href="#">Vk</a>, <a href="#">Telegram</a></li>
				</ul>
			</div>
		</div>
		</div>
			<script src="/js/index.js"></script>
</body>

</html>