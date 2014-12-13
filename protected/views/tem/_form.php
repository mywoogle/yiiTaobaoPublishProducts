<?php
/* @var $this TemController */
/* @var $model Tem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'int_1'); ?>
		<?php echo $form->textField($model,'int_1'); ?>
		<?php echo $form->error($model,'int_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_2'); ?>
		<?php echo $form->textField($model,'int_2'); ?>
		<?php echo $form->error($model,'int_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_3'); ?>
		<?php echo $form->textField($model,'int_3'); ?>
		<?php echo $form->error($model,'int_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_4'); ?>
		<?php echo $form->textField($model,'int_4'); ?>
		<?php echo $form->error($model,'int_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_5'); ?>
		<?php echo $form->textField($model,'int_5'); ?>
		<?php echo $form->error($model,'int_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'varchar_1'); ?>
		<?php echo $form->textField($model,'varchar_1',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'varchar_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'varchar_2'); ?>
		<?php echo $form->textField($model,'varchar_2',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'varchar_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'varchar_3'); ?>
		<?php echo $form->textField($model,'varchar_3',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'varchar_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'varchar_4'); ?>
		<?php echo $form->textField($model,'varchar_4',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'varchar_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'varchar_5'); ?>
		<?php echo $form->textField($model,'varchar_5',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'varchar_5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->