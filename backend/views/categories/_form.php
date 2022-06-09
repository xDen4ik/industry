<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

	<? echo $form->field($model, 'img')->widget(\noam148\imagemanager\components\ImageManagerInputWidget::className(), [
		'aspectRatio' => (16 / 9), //set the aspect ratio
		'cropViewMode' => 1, //crop mode, option info: https://github.com/fengyuanchen/cropper/#viewmode
		'showPreview' => true, //false to hide the preview
		'showDeletePickedImageConfirm' => true, //on true show warning before detach image
	]); 
	?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>