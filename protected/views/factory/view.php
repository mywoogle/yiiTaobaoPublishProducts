<?php
/* @var $this FactoryController */
/* @var $model Factory */

$this->breadcrumbs=array(
	'Factories'=>array('index'),
	$model->factory_id,
);

$this->menu=array(
	array('label'=>'List Factory', 'url'=>array('index')),
	array('label'=>'Create Factory', 'url'=>array('create')),
	array('label'=>'Update Factory', 'url'=>array('update', 'id'=>$model->factory_id)),
	array('label'=>'Delete Factory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->factory_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Factory', 'url'=>array('admin')),
);
?>

<h1>View Factory #<?php echo $model->factory_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'factory_id',
		'factory_name',
		'product_category',
		'factory_num',
		'factory_flag',
	),
)); ?>
