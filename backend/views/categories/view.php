<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
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
<div class="categories-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Удалить', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Вы точно ходите удалить категорию?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'name',
			'description:ntext',
			'slug',
			[
				'attribute' => 'img',
				'contentOptions' => ['style' => 'width:15%; white-space: normal;'],
				'filter' => '',
				'format' => ['image', ['width' => '300', 'height' => '300']],
				'value' => function ($model) {
					return Yii::$app->imagemanager->getImagePath($model->img, 300, 300, 'inset');
				},

			],
		],
	]) ?>

</div>