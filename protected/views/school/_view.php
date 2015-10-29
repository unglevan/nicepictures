<?php
/* @var $this SchoolController */
/* @var $data School */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idschool')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idschool), array('view', 'id'=>$data->idschool)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idlocal')); ?>:</b>
	<?php echo CHtml::encode($data->idlocal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameschool')); ?>:</b>
	<?php echo CHtml::encode($data->nameschool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />


</div>