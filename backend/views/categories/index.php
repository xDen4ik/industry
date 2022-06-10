<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'slug',
			[
				'attribute' => 'img',
				'contentOptions' => ['style' => 'width:15%; white-space: normal;'],
				'filter' => '',
				'format' => ['image', ['width' => '100', 'height' => '100']],
				'value' => function ($model) {
					return Yii::$app->imagemanager->getImagePath($model->img, 100, 100, 'inset');
				},

			],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
