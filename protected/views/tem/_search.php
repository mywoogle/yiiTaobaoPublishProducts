<?php
/* @var $this TemController */
/* @var $model Tem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tem_id'); ?>
		<?php echo $form->textField($model,'tem_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_1'); ?>
		<?php echo $form->textField($model,'int_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_2'); ?>
		<?php echo $form->textField($model,'int_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_3'); ?>
		<?php echo $form->textField($model,'int_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_4'); ?>
		<?php echo $form->textField($model,'int_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_5'); ?>
		<?php echo $form->textField($model,'int_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'varchar_1'); ?>
		<?php echo $form->textField($model,'varchar_1',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'varchar_2'); ?>
		<?php echo $form->textField($model,'varchar_2',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'varchar_3'); ?>
		<?php echo $form->textField($model,'varchar_3',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'varchar_4'); ?>
		<?php echo $form->textField($model,'varchar_4',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'varchar_5'); ?>
		<?php echo $form->textField($model,'varchar_5',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->