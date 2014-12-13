<?php
/* @var $this FactoryController */
/* @var $model Factory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'factory_id'); ?>
		<?php echo $form->textField($model,'factory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factory_name'); ?>
		<?php echo $form->textField($model,'factory_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_category'); ?>
		<?php echo $form->textField($model,'product_category',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factory_num'); ?>
		<?php echo $form->textField($model,'factory_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'factory_flag'); ?>
		<?php echo $form->textField($model,'factory_flag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->