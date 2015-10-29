<?php
/* @var $this TransactionController */
/* @var $data Transaction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtran), array('view', 'id'=>$data->idtran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpic')); ?>:</b>
	<?php echo CHtml::encode($data->idpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment')); ?>:</b>
	<?php echo CHtml::encode($data->payment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createdat')); ?>:</b>
	<?php echo CHtml::encode($data->createdat); ?>
	<br />

	*/ ?>

</div>