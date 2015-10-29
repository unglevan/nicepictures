<?php
/* @var $this Class1Controller */
/* @var $model Class1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'class1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idclass'); ?>
		<?php echo $form->textField($model,'idclass'); ?>
		<?php echo $form->error($model,'idclass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idschool'); ?>
		<?php echo $form->textField($model,'idschool'); ?>
		<?php echo $form->error($model,'idschool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idpic'); ?>
		<?php echo $form->textField($model,'idpic'); ?>
		<?php echo $form->error($model,'idpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameclass'); ?>
		<?php echo $form->textField($model,'nameclass'); ?>
		<?php echo $form->error($model,'nameclass'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->