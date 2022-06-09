<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Denis Pacha">
	<meta name="keywords" content="Denis Pacha">
	<meta name="author" content="Denis Pacha">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

	<?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>
	<header role="banner">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand " href="/">ООО ИНДУСТРИЯ</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample05">
					<ul class="navbar-nav pl-md-5 ml-auto">
						<li class="nav-item">
							<a class="nav-link active" href="/">Главная</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">О нас</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/categories">Каталог</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="services.html">Выпить с нами</a>
								<a class="dropdown-item" href="services.html">Ремонт пылесоса</a>
								<a class="dropdown-item" href="services.html">Ремонт комбайна</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contact">Контакты</a>
						</li>
					</ul>

					<div class="navbar-nav ml-auto">
						<form method="post" class="search-form">
							<span class="icon ion ion-search"></span>
							<input type="text" class="form-control" placeholder="Поиск...">
						</form>
					</div>

				</div>
			</div>
		</nav>
	</header>
	<?= $content ?>
	<?php $this->endBody() ?>
</body>
<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 mb-5">
				<h3>ООО ИНДУСТРИЯ</h3>
				<p class="mb-5">Общество с ограниченной ответственностью</p>
				<!-- <ul class="list-unstyled footer-link d-flex footer-social">
					<li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
					<li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
				</ul> -->

			</div>
			<div class="col-md-3 mb-5 pl-md-5">
				<h3>Контакты</h3>
				<ul class="list-unstyled footer-link">
					<li class="d-block"><span class="d-block">Телефон:</span><span>+7(949)-330-25-22</span></li>
					<!-- <li class="d-block"><span class="d-block">Email:</span><span>pt.da@yandex.ru</span></li> -->
				</ul>
			</div>
			<div class="col-md-3 mb-5 pl-md-5">
				<h3> </h3>
				<ul class="list-unstyled footer-link">
					<!-- <li class="d-block"><span class="d-block">Телефон:</span><span>+7(949)-330-25-22</span></li> -->
					<li class="d-block"><span class="d-block">Email:</span><span>pt.da@yandex.ru</span></li>
				</ul>
			</div>
			<!-- <div class="col-md-2 mb-5">
				<h3>Ссылки</h3>
				<ul class="list-unstyled footer-link">
					<li><a href="#">О нас</a></li>
					<li><a href="#">Правила</a></li>
					<li><a href="#">Просто</a></li>
					<li><a href="/contact">Контакты</a></li>
				</ul>
			</div> -->
			<div class="col-md-3">

			</div>
		</div>
		<div class="row">
			<div class="col-12 text-md-center text-left">
				<p class="copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | Этот сайт сделал Дэнчик кул поц <i class="fa fa-heart text-danger" aria-hidden="true"></i>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>
<!-- END footer -->

<!-- loader -->
<!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
	</svg>
</div> -->

</html>
<?php $this->endPage() ?>