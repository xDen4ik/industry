<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property int $flag_new
 * @property int $sort_id
 */
class Product extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'product';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['name', 'description', 'img', 'category'], 'required'],
			[['description'], 'string'],
			[['flag_new', 'sort_id', 'category'], 'integer'],
			[['name', 'img'], 'string', 'max' => 255],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Название товара',
			'category' => 'Категория товара',
			'description' => 'Описание товара',
			'img' => 'Изображение',
			'flag_new' => 'Новый',
			/* 'sort_id' => 'Sort ID', */
		];
	}
}
