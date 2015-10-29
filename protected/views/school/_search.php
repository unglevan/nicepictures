<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idschool'); ?>
		<?php echo $form->textField($model,'idschool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idlocal'); ?>
		<?php echo $form->textField($model,'idlocal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameschool'); ?>
		<?php echo $form->textField($model,'nameschool',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->