<?php
/* @var $this TargetController */
/* @var $data Target */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->target_id), array('view', 'id'=>$data->target_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_id')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_attrs')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_attrs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_title1')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_title1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_title2')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_title2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_title3')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_title3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_taobao_sku')); ?>:</b>
	<?php echo CHtml::encode($data->target_taobao_sku); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('target_go2_sku')); ?>:</b>
	<?php echo CHtml::encode($data->target_go2_sku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_title_search')); ?>:</b>
	<?php echo CHtml::encode($data->target_title_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target_title_used')); ?>:</b>
	<?php echo CHtml::encode($data->target_title_used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_id1')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_id1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_id2')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_id2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_id3')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_id3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_keyword1')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_keyword1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_keyword2')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_keyword2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_taobao_keyword3')); ?>:</b>
	<?php echo CHtml::encode($data->source_taobao_keyword3); ?>
	<br />

	*/ ?>

</div>