<?php
/* @var $this Class1Controller */
/* @var $model Class1 */

$this->breadcrumbs=array(
	'Class1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Class1', 'url'=>array('index')),
	array('label'=>'Manage Class1', 'url'=>array('admin')),
);
?>

<h1>Create Class1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>