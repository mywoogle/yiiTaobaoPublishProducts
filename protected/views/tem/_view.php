<?php
/* @var $this TemController */
/* @var $data Tem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tem_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tem_id), array('view', 'id'=>$data->tem_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_1')); ?>:</b>
	<?php echo CHtml::encode($data->int_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_2')); ?>:</b>
	<?php echo CHtml::encode($data->int_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_3')); ?>:</b>
	<?php echo CHtml::encode($data->int_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_4')); ?>:</b>
	<?php echo CHtml::encode($data->int_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_5')); ?>:</b>
	<?php echo CHtml::encode($data->int_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('varchar_1')); ?>:</b>
	<?php echo CHtml::encode($data->varchar_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('varchar_2')); ?>:</b>
	<?php echo CHtml::encode($data->varchar_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('varchar_3')); ?>:</b>
	<?php echo CHtml::encode($data->varchar_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('varchar_4')); ?>:</b>
	<?php echo CHtml::encode($data->varchar_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('varchar_5')); ?>:</b>
	<?php echo CHtml::encode($data->varchar_5); ?>
	<br />

	*/ ?>

</div>