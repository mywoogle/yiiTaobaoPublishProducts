<?php
/* @var $this TemController */
/* @var $model Tem */

$this->breadcrumbs=array(
	'Tems'=>array('index'),
	$model->tem_id=>array('view','id'=>$model->tem_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tem', 'url'=>array('index')),
	array('label'=>'Create Tem', 'url'=>array('create')),
	array('label'=>'View Tem', 'url'=>array('view', 'id'=>$model->tem_id)),
	array('label'=>'Manage Tem', 'url'=>array('admin')),
);
?>

<h1>Update Tem <?php echo $model->tem_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>