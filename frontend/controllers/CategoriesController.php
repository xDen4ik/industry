<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use backend\models\Categories;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class CategoriesController extends Controller
{
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	public function actionIndex()
	{
		$categories = Categories::find()->asArray()->all();
		return $this->render('index', [
			'categories' => $categories
		]);
	}

	public function actionCategory($action)
	{
		$category = Categories::find()->where('slug = :slug', [':slug' => $action])->asArray()->one();

		if (!$category) {
			return $this->render('error');
		}
		return $this->render('category', [
			'category' => $category
		]);
	}
}
