<?php
/* @var $this TemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tems',
);

$this->menu=array(
	array('label'=>'Create Tem', 'url'=>array('create')),
	array('label'=>'Manage Tem', 'url'=>array('admin')),
);
?>

<h1>Tems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
