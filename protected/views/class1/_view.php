<?php
/* @var $this Class1Controller */
/* @var $data Class1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclass')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclass), array('view', 'id'=>$data->idclass)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idschool')); ?>:</b>
	<?php echo CHtml::encode($data->idschool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpic')); ?>:</b>
	<?php echo CHtml::encode($data->idpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameclass')); ?>:</b>
	<?php echo CHtml::encode($data->nameclass); ?>
	<br />


</div>