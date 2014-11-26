<?php
/* @var $this TaobaoSourceController */
/* @var $model TaobaoSource */

$this->breadcrumbs=array(
	'Taobao Sources'=>array('index'),
	$model->taobao_source_id=>array('view','id'=>$model->taobao_source_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaobaoSource', 'url'=>array('index')),
	array('label'=>'Create TaobaoSource', 'url'=>array('create')),
	array('label'=>'View TaobaoSource', 'url'=>array('view', 'id'=>$model->taobao_source_id)),
	array('label'=>'Manage TaobaoSource', 'url'=>array('admin')),
);
?>

<h1>Update TaobaoSource <?php echo $model->taobao_source_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>