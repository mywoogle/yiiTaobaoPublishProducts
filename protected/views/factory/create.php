<?php
/* @var $this FactoryController */
/* @var $model Factory */

$this->breadcrumbs=array(
	'Factories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Factory', 'url'=>array('index')),
	array('label'=>'Manage Factory', 'url'=>array('admin')),
);
?>

<h1>Create Factory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>