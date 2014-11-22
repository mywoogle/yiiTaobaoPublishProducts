<?php
/* @var $this TargetController */
/* @var $model Target */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'target_id'); ?>
		<?php echo $form->textField($model,'target_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_id'); ?>
		<?php echo $form->textField($model,'target_taobao_id',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_attrs'); ?>
		<?php echo $form->textField($model,'target_taobao_attrs',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_title1'); ?>
		<?php echo $form->textField($model,'target_taobao_title1',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_title2'); ?>
		<?php echo $form->textField($model,'target_taobao_title2',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_title3'); ?>
		<?php echo $form->textField($model,'target_taobao_title3',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_taobao_sku'); ?>
		<?php echo $form->textField($model,'target_taobao_sku',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_go2_sku'); ?>
		<?php echo $form->textField($model,'target_go2_sku',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_title_search'); ?>
		<?php echo $form->textField($model,'target_title_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'target_title_used'); ?>
		<?php echo $form->textField($model,'target_title_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_id1'); ?>
		<?php echo $form->textField($model,'source_taobao_id1',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_id2'); ?>
		<?php echo $form->textField($model,'source_taobao_id2',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_id3'); ?>
		<?php echo $form->textField($model,'source_taobao_id3',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_keyword1'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword1',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_keyword2'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword2',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_taobao_keyword3'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword3',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->