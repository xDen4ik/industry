<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Categories;
/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<style>
	table.detail-view th {
		width: 25%;
	}

	table.detail-view td {
		width: 75%;
	}
</style>

<div class="product-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Удалить', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Точно удалить товар?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'name',
			[
				'attribute' => 'category',
				'format' => ['html'],
				'value' => function ($model) {
					$category = Categories::findOne($model->category);
					return $category->name;
				}
			],
			[
				'attribute' => 'description',
				'format' => ['html'],
				'value' => function ($model) {
					return	htmlspecialchars_decode($model->description);
				}
			],
			[
				'attribute' => 'flag_new',
				'value' => function ($model) {
					return $model->flag_new == 0 ? "Нет" : "Да";
				},
			],
			[
				'attribute' => 'img',
				'contentOptions' => ['style' => 'width:15%; white-space: normal;'],
				'filter' => '',
				'format' => ['image', ['width' => '100', 'height' => '100']],
				'value' => function ($model) {
					return Yii::$app->imagemanager->getImagePath($model->img, 100, 100, 'inset');
				},

			],
			//'sort_id',
		],
	]) ?>

</div>