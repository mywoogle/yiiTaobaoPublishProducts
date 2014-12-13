<?php
/* @var $this TemController */
/* @var $model Tem */

$this->breadcrumbs=array(
	'Tems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tem', 'url'=>array('index')),
	array('label'=>'Manage Tem', 'url'=>array('admin')),
);
?>

<h1>Create Tem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>