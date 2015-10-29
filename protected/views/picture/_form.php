<?php
/* @var $this PictureController */
/* @var $model Picture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'picture-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idpic'); ?>
		<?php echo $form->textField($model,'idpic'); ?>
		<?php echo $form->error($model,'idpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idphoto'); ?>
		<?php echo $form->textField($model,'idphoto'); ?>
		<?php echo $form->error($model,'idphoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iptran'); ?>
		<?php echo $form->textField($model,'iptran'); ?>
		<?php echo $form->error($model,'iptran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idclass'); ?>
		<?php echo $form->textField($model,'idclass'); ?>
		<?php echo $form->error($model,'idclass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>55,'maxlength'=>55)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagelink'); ?>
		<?php echo $form->textArea($model,'imagelink',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'imagelink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view'); ?>
		<?php echo $form->textField($model,'view'); ?>
		<?php echo $form->error($model,'view'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdat'); ?>
		<?php echo $form->textField($model,'createdat'); ?>
		<?php echo $form->error($model,'createdat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->