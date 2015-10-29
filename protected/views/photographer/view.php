<?php
/* @var $this PhotographerController */
/* @var $model Photographer */

$this->breadcrumbs=array(
	'Photographers'=>array('index'),
	$model->idph,
);

$this->menu=array(
	array('label'=>'List Photographer', 'url'=>array('index')),
	array('label'=>'Create Photographer', 'url'=>array('create')),
	array('label'=>'Update Photographer', 'url'=>array('update', 'id'=>$model->idph)),
	array('label'=>'Delete Photographer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idph),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Photographer', 'url'=>array('admin')),
);
?>

<h1>View Photographer #<?php echo $model->idph; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idph',
		'acount',
		'password',
		'phone',
		'adress',
		'email',
	),
)); ?>
