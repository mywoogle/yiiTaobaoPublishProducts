<?php
/* @var $this TaobaoSourceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Taobao Sources',
);

$this->menu=array(
	array('label'=>'Create TaobaoSource', 'url'=>array('create')),
	array('label'=>'Manage TaobaoSource', 'url'=>array('admin')),
);
?>

<h1>Taobao Sources</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
