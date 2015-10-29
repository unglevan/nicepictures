<?php
/* @var $this PhotographerController */
/* @var $model Photographer */

$this->breadcrumbs=array(
	'Photographers'=>array('index'),
	$model->idph=>array('view','id'=>$model->idph),
	'Update',
);

$this->menu=array(
	array('label'=>'List Photographer', 'url'=>array('index')),
	array('label'=>'Create Photographer', 'url'=>array('create')),
	array('label'=>'View Photographer', 'url'=>array('view', 'id'=>$model->idph)),
	array('label'=>'Manage Photographer', 'url'=>array('admin')),
);
?>

<h1>Update Photographer <?php echo $model->idph; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>