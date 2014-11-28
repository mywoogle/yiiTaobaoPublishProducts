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
		<?php echo $form->label($model,'xuetongneilicaizhi'); ?>
		<?php echo $form->textField($model,'xuetongneilicaizhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xuetongcaizhi'); ?>
		<?php echo $form->textField($model,'xuetongcaizhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shangshinianfenjijie'); ?>
		<?php echo $form->textField($model,'shangshinianfenjijie',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fengge'); ?>
		<?php echo $form->textField($model,'fengge',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bangmiancaizhi'); ?>
		<?php echo $form->textField($model,'bangmiancaizhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xuemianneilicaizhi'); ?>
		<?php echo $form->textField($model,'xuemianneilicaizhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pizhitezhi'); ?>
		<?php echo $form->textField($model,'pizhitezhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xiedicaizhi'); ?>
		<?php echo $form->textField($model,'xiedicaizhi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xuekuanpingming'); ?>
		<?php echo $form->textField($model,'xuekuanpingming',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tonggao'); ?>
		<?php echo $form->textField($model,'tonggao',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xietongkuanshi'); ?>
		<?php echo $form->textField($model,'xietongkuanshi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genggao'); ?>
		<?php echo $form->textField($model,'genggao',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xiegengkuanshi'); ?>
		<?php echo $form->textField($model,'xiegengkuanshi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bihefangshi'); ?>
		<?php echo $form->textField($model,'bihefangshi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'liuxingyuansu'); ?>
		<?php echo $form->textField($model,'liuxingyuansu',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zhizhuogongyi'); ?>
		<?php echo $form->textField($model,'zhizhuogongyi',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tuan'); ?>
		<?php echo $form->textField($model,'tuan',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shehejijie'); ?>
		<?php echo $form->textField($model,'shehejijie',array('size'=>32,'maxlength'=>32)); ?>
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