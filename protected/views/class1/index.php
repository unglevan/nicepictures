<?php
/* @var $this Class1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Class1s',
);

$this->menu=array(
	array('label'=>'Create Class1', 'url'=>array('create')),
	array('label'=>'Manage Class1', 'url'=>array('admin')),
);
?>

<h1>Class1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
