<?php
/* @var $this PictureController */
/* @var $model Picture */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpic'); ?>
		<?php echo $form->textField($model,'idpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idphoto'); ?>
		<?php echo $form->textField($model,'idphoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iptran'); ?>
		<?php echo $form->textField($model,'iptran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idclass'); ?>
		<?php echo $form->textField($model,'idclass'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>55,'maxlength'=>55)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagelink'); ?>
		<?php echo $form->textArea($model,'imagelink',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view'); ?>
		<?php echo $form->textField($model,'view'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdat'); ?>
		<?php echo $form->textField($model,'createdat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->