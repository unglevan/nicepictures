<?php
/* @var $this PictureController */
/* @var $model Picture */

$this->breadcrumbs=array(
	'Pictures'=>array('index'),
	$model->name=>array('view','id'=>$model->idpic),
	'Update',
);

$this->menu=array(
	array('label'=>'List Picture', 'url'=>array('index')),
	array('label'=>'Create Picture', 'url'=>array('create')),
	array('label'=>'View Picture', 'url'=>array('view', 'id'=>$model->idpic)),
	array('label'=>'Manage Picture', 'url'=>array('admin')),
);
?>

<h1>Update Picture <?php echo $model->idpic; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>