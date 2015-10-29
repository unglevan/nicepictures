<?php
/* @var $this SchoolController */
/* @var $model School */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'school-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idschool'); ?>
		<?php echo $form->textField($model,'idschool'); ?>
		<?php echo $form->error($model,'idschool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idlocal'); ?>
		<?php echo $form->textField($model,'idlocal'); ?>
		<?php echo $form->error($model,'idlocal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameschool'); ?>
		<?php echo $form->textField($model,'nameschool',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'nameschool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->