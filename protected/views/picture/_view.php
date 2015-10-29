<?php
/* @var $this PictureController */
/* @var $data Picture */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpic')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpic), array('view', 'id'=>$data->idpic)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idphoto')); ?>:</b>
	<?php echo CHtml::encode($data->idphoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iptran')); ?>:</b>
	<?php echo CHtml::encode($data->iptran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclass')); ?>:</b>
	<?php echo CHtml::encode($data->idclass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagelink')); ?>:</b>
	<?php echo CHtml::encode($data->imagelink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view')); ?>:</b>
	<?php echo CHtml::encode($data->view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdat')); ?>:</b>
	<?php echo CHtml::encode($data->createdat); ?>
	<br />

	*/ ?>

</div>