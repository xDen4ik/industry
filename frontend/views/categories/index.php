<?php
use yii\helpers\Url;
?>

<div class="top-shadow"></div>

<div class="inner-page">
	<div class="slider-item" style="background-image: url('/frontend/web/img/frontend/factory2.jpg');">

		<div class="container">
			<div class="row slider-text align-items-center justify-content-center">
				<div class="col-md-8 text-center col-sm-12 element-animate pt-5">
					<h1 class="pt-5"><span>Каталог</span></h1>
					<!-- <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum nihil voluptas consequuntur temporibus repellat!</p> -->
				</div>
			</div>
		</div>

	</div>
</div>

<section class="section border-t">
	<div class="container">
		<div class="row justify-content-center mb-5 element-animate">
			<div class="col-md-8 text-center">
				<h2 class="heading mb-4">Категории</h2>
				<!-- <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row no-gutters">
			<?php
			foreach ($categories as $category) { ?>
				<div class="col-md-4 element-animate">
					
					<a href="/categories/<?= $category['slug'] ?>" class="link-thumbnail">
						<h3><?= $category['name'] ?></h3>
						<span class="ion-plus icon"></span>
						<img src="<?= \Yii::$app->imagemanager->getImagePath($category['img'], 700, 700, 'outbound') ?>" alt="Image" class="img-fluid">
					</a>
				</div>
			<?php
			}
			?>
		</div>

	</div>
</section>
<!-- END section -->

<section class="section bg-primary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8">
				<h2 class="text-white mb-0">Get Started With Industrial Free Template</h2>
				<p class="text-white lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
			</div>
			<div class="col-lg-4 text-lg-right">
				<a href="#" class="btn btn-outline-white px-4 py-3">Download This Template</a>
			</div>
		</div>
	</div>
</section>