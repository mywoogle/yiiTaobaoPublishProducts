<?php
/* @var $this TargetController */
/* @var $model Target */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'target-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_id'); ?>
		<?php echo $form->textField($model,'target_taobao_id',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'target_taobao_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_attrs'); ?>
		<?php echo $form->textField($model,'target_taobao_attrs',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'target_taobao_attrs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_title1'); ?>
		<?php echo $form->textField($model,'target_taobao_title1',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'target_taobao_title1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_title2'); ?>
		<?php echo $form->textField($model,'target_taobao_title2',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'target_taobao_title2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_title3'); ?>
		<?php echo $form->textField($model,'target_taobao_title3',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'target_taobao_title3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_taobao_sku'); ?>
		<?php echo $form->textField($model,'target_taobao_sku',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'target_taobao_sku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_go2_sku'); ?>
		<?php echo $form->textField($model,'target_go2_sku',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'target_go2_sku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_title_search'); ?>
		<?php echo $form->textField($model,'target_title_search'); ?>
		<?php echo $form->error($model,'target_title_search'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target_title_used'); ?>
		<?php echo $form->textField($model,'target_title_used'); ?>
		<?php echo $form->error($model,'target_title_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_id1'); ?>
		<?php echo $form->textField($model,'source_taobao_id1',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_id1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_id2'); ?>
		<?php echo $form->textField($model,'source_taobao_id2',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_id2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_id3'); ?>
		<?php echo $form->textField($model,'source_taobao_id3',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_id3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_keyword1'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword1',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_keyword1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_keyword2'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword2',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_keyword2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_taobao_keyword3'); ?>
		<?php echo $form->textField($model,'source_taobao_keyword3',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'source_taobao_keyword3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->