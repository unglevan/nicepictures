<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorder')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorder), array('view', 'id'=>$data->idorder)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtran')); ?>:</b>
	<?php echo CHtml::encode($data->idtran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpic')); ?>:</b>
	<?php echo CHtml::encode($data->idpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createdat')); ?>:</b>
	<?php echo CHtml::encode($data->createdat); ?>
	<br />

	*/ ?>

</div>