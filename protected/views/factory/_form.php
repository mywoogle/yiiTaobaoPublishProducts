<?php
/* @var $this FactoryController */
/* @var $model Factory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factory-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'factory_name'); ?>
		<?php echo $form->textField($model,'factory_name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'factory_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_category'); ?>
		<?php echo $form->textField($model,'product_category',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'product_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factory_num'); ?>
		<?php echo $form->textField($model,'factory_num'); ?>
		<?php echo $form->error($model,'factory_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'factory_flag'); ?>
		<?php echo $form->textField($model,'factory_flag'); ?>
		<?php echo $form->error($model,'factory_flag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->