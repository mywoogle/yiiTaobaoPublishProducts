<?php
/* @var $this TemController */
/* @var $model Tem */

$this->breadcrumbs=array(
	'Tems'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tem', 'url'=>array('index')),
	array('label'=>'Create Tem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tem-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tems</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tem-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tem_id',
		'int_1',
		'int_2',
		'int_3',
		'int_4',
		'int_5',
		/*
		'varchar_1',
		'varchar_2',
		'varchar_3',
		'varchar_4',
		'varchar_5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
