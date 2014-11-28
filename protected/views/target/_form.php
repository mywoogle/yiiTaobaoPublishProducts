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
		<?php echo $form->labelEx($model,'xuetongneilicaizhi'); ?>
		<?php echo $form->textField($model,'xuetongneilicaizhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xuetongneilicaizhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xuetongcaizhi'); ?>
		<?php echo $form->textField($model,'xuetongcaizhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xuetongcaizhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shangshinianfenjijie'); ?>
		<?php echo $form->textField($model,'shangshinianfenjijie',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'shangshinianfenjijie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fengge'); ?>
		<?php echo $form->textField($model,'fengge',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fengge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bangmiancaizhi'); ?>
		<?php echo $form->textField($model,'bangmiancaizhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'bangmiancaizhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xuemianneilicaizhi'); ?>
		<?php echo $form->textField($model,'xuemianneilicaizhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xuemianneilicaizhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pizhitezhi'); ?>
		<?php echo $form->textField($model,'pizhitezhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'pizhitezhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xiedicaizhi'); ?>
		<?php echo $form->textField($model,'xiedicaizhi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xiedicaizhi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xuekuanpingming'); ?>
		<?php echo $form->textField($model,'xuekuanpingming',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xuekuanpingming'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tonggao'); ?>
		<?php echo $form->textField($model,'tonggao',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'tonggao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xietongkuanshi'); ?>
		<?php echo $form->textField($model,'xietongkuanshi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xietongkuanshi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genggao'); ?>
		<?php echo $form->textField($model,'genggao',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'genggao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xiegengkuanshi'); ?>
		<?php echo $form->textField($model,'xiegengkuanshi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'xiegengkuanshi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bihefangshi'); ?>
		<?php echo $form->textField($model,'bihefangshi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'bihefangshi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'liuxingyuansu'); ?>
		<?php echo $form->textField($model,'liuxingyuansu',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'liuxingyuansu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zhizhuogongyi'); ?>
		<?php echo $form->textField($model,'zhizhuogongyi',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'zhizhuogongyi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tuan'); ?>
		<?php echo $form->textField($model,'tuan',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'tuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shehejijie'); ?>
		<?php echo $form->textField($model,'shehejijie',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'shehejijie'); ?>
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