<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Categories;
use dosamigos\ckeditor\CKEditor;

?>

<div class="product-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(Categories::find()->asArray()->all(), 'id', 'name')) ?>

	<?php echo $form->field($model, 'description')->widget(CKEditor::className(), [
		'preset' => 'advanced'
	]); ?>

	<? echo $form->field($model, 'img')->widget(\noam148\imagemanager\components\ImageManagerInputWidget::className(), [
		'aspectRatio' => (16 / 9), //set the aspect ratio
		'cropViewMode' => 1, //crop mode, option info: https://github.com/fengyuanchen/cropper/#viewmode
		'showPreview' => true, //false to hide the preview
		'showDeletePickedImageConfirm' => true, //on true show warning before detach image
	]);
	?>

	<?= $form->field($model, 'flag_new')->checkbox(['uncheck' => 0, 'value' => 1]) ?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>