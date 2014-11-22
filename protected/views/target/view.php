<?php
/* @var $this TargetController */
/* @var $model Target */

$this->breadcrumbs=array(
	'Targets'=>array('index'),
	$model->target_id,
);

$this->menu=array(
	array('label'=>'List Target', 'url'=>array('index')),
	array('label'=>'Create Target', 'url'=>array('create')),
	array('label'=>'Update Target', 'url'=>array('update', 'id'=>$model->target_id)),
	array('label'=>'Delete Target', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->target_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Target', 'url'=>array('admin')),
);
?>

<h1>View Target #<?php echo $model->target_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'target_id',
		'target_taobao_id',
		'target_taobao_attrs',
		'target_taobao_title1',
		'target_taobao_title2',
		'target_taobao_title3',
		'target_taobao_sku',
		'target_go2_sku',
		'target_title_search',
		'target_title_used',
		'source_taobao_id1',
		'source_taobao_id2',
		'source_taobao_id3',
		'source_taobao_keyword1',
		'source_taobao_keyword2',
		'source_taobao_keyword3',
	),
)); ?>
