<?php
/* @var $this Class1Controller */
/* @var $model Class1 */

$this->breadcrumbs=array(
	'Class1s'=>array('index'),
	$model->idclass,
);

$this->menu=array(
	array('label'=>'List Class1', 'url'=>array('index')),
	array('label'=>'Create Class1', 'url'=>array('create')),
	array('label'=>'Update Class1', 'url'=>array('update', 'id'=>$model->idclass)),
	array('label'=>'Delete Class1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idclass),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Class1', 'url'=>array('admin')),
);
?>

<h1>View Class1 #<?php echo $model->idclass; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idclass',
		'idschool',
		'idpic',
		'nameclass',
	),
)); ?>
