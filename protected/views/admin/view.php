<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	$model->idad,
);

$this->menu=array(
	array('label'=>'List Admin', 'url'=>array('index')),
	array('label'=>'Create Admin', 'url'=>array('create')),
	array('label'=>'Update Admin', 'url'=>array('update', 'id'=>$model->idad)),
	array('label'=>'Delete Admin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>View Admin #<?php echo $model->idad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idad',
		'username',
		'password',
		'role',
	),
)); ?>
