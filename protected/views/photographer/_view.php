<?php
/* @var $this PhotographerController */
/* @var $data Photographer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idph')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idph), array('view', 'id'=>$data->idph)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acount')); ?>:</b>
	<?php echo CHtml::encode($data->acount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
	<?php echo CHtml::encode($data->adress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>