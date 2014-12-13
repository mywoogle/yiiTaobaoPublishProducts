<?php
/* @var $this TemController */
/* @var $model Tem */

$this->breadcrumbs=array(
	'Tems'=>array('index'),
	$model->tem_id,
);

$this->menu=array(
	array('label'=>'List Tem', 'url'=>array('index')),
	array('label'=>'Create Tem', 'url'=>array('create')),
	array('label'=>'Update Tem', 'url'=>array('update', 'id'=>$model->tem_id)),
	array('label'=>'Delete Tem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tem_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tem', 'url'=>array('admin')),
);
?>

<h1>View Tem #<?php echo $model->tem_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tem_id',
		'int_1',
		'int_2',
		'int_3',
		'int_4',
		'int_5',
		'varchar_1',
		'varchar_2',
		'varchar_3',
		'varchar_4',
		'varchar_5',
	),
)); ?>
