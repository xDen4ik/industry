<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use backend\models\Categories;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProduct */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); 
	?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'name',
			[
				'attribute' => 'description',
				'value' => function ($model) {
					$text = preg_replace('~(?:<!--\s*|\s*-->|</?[a-z\d]+[^>]*>)~', '', $model->description);
					return StringHelper::truncate($text, 500);
				}
			],
			[
				'attribute' => 'category',
				'format' => ['html'],
				'value' => function ($model) {
					$category = Categories::findOne($model->category);
					return $category->name;
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

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>


</div>