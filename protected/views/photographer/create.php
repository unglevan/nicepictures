<?php
/* @var $this PhotographerController */
/* @var $model Photographer */

$this->breadcrumbs=array(
	'Photographers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Photographer', 'url'=>array('index')),
	array('label'=>'Manage Photographer', 'url'=>array('admin')),
);
?>

<h1>Create Photographer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>