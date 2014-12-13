<?php
/* @var $this FactoryController */
/* @var $model Factory */

$this->breadcrumbs=array(
	'Factories'=>array('index'),
	$model->factory_id=>array('view','id'=>$model->factory_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factory', 'url'=>array('index')),
	array('label'=>'Create Factory', 'url'=>array('create')),
	array('label'=>'View Factory', 'url'=>array('view', 'id'=>$model->factory_id)),
	array('label'=>'Manage Factory', 'url'=>array('admin')),
);
?>

<h1>Update Factory <?php echo $model->factory_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>