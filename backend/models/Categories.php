<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $slug
 * @property string $img
 */
class Categories extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'categories';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['name', 'slug', 'img'], 'required'],
			[['description'], 'string'],
			[['name', 'img'], 'string', 'max' => 255],
			[['slug'], 'string', 'max' => 100],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Название категории',
			'description' => 'Описание',
			'slug' => 'Ссылка',
			'img' => 'Изображение',
		];
	}
}
