<?php
/* @var $this FactoryController */
/* @var $data Factory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('factory_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->factory_id), array('view', 'id'=>$data->factory_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factory_name')); ?>:</b>
	<?php echo CHtml::encode($data->factory_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_category')); ?>:</b>
	<?php echo CHtml::encode($data->product_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factory_num')); ?>:</b>
	<?php echo CHtml::encode($data->factory_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('factory_flag')); ?>:</b>
	<?php echo CHtml::encode($data->factory_flag); ?>
	<br />


</div>