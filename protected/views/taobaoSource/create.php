<?php
/* @var $this TaobaoSourceController */
/* @var $model TaobaoSource */

$this->breadcrumbs=array(
	'Taobao Sources'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaobaoSource', 'url'=>array('index')),
	array('label'=>'Manage TaobaoSource', 'url'=>array('admin')),
);
?>

<h1>Create TaobaoSource</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>