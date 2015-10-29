<?php
/* @var $this Class1Controller */
/* @var $model Class1 */

$this->breadcrumbs=array(
	'Class1s'=>array('index'),
	$model->idclass=>array('view','id'=>$model->idclass),
	'Update',
);

$this->menu=array(
	array('label'=>'List Class1', 'url'=>array('index')),
	array('label'=>'Create Class1', 'url'=>array('create')),
	array('label'=>'View Class1', 'url'=>array('view', 'id'=>$model->idclass)),
	array('label'=>'Manage Class1', 'url'=>array('admin')),
);
?>

<h1>Update Class1 <?php echo $model->idclass; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>