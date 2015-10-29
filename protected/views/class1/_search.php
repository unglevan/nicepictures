<?php
/* @var $this Class1Controller */
/* @var $model Class1 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idclass'); ?>
		<?php echo $form->textField($model,'idclass'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idschool'); ?>
		<?php echo $form->textField($model,'idschool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpic'); ?>
		<?php echo $form->textField($model,'idpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameclass'); ?>
		<?php echo $form->textField($model,'nameclass'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->