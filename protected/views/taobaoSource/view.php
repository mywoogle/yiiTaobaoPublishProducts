<?php
/* @var $this TaobaoSourceController */
/* @var $model TaobaoSource */

$this->breadcrumbs=array(
	'Taobao Sources'=>array('index'),
	$model->taobao_source_id,
);

$this->menu=array(
	array('label'=>'List TaobaoSource', 'url'=>array('index')),
	array('label'=>'Create TaobaoSource', 'url'=>array('create')),
	array('label'=>'Update TaobaoSource', 'url'=>array('update', 'id'=>$model->taobao_source_id)),
	array('label'=>'Delete TaobaoSource', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->taobao_source_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaobaoSource', 'url'=>array('admin')),
);
?>

<h1>View TaobaoSource #<?php echo $model->taobao_source_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'taobao_source_id',
		'taobao_source_taobao_id',
		'taobao_source_taobao_title',
		'xuetongneilicaizhi',
		'xuetongcaizhi',
		'shangshinianfenjijie',
		'fengge',
		'bangmiancaizhi',
		'xuemianneilicaizhi',
		'pizhitezhi',
		'xiedicaizhi',
		'xuekuanpingming',
		'tonggao',
		'xietongkuanshi',
		'genggao',
		'xiegengkuanshi',
		'bihefangshi',
		'liuxingyuansu',
		'zhizhuogongyi',
		'tuan',
		'shehejijie',
	),
)); ?>
