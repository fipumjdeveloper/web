<?php
/* @var $this LinksController */
/* @var $data Links */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_links')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_links), array('view', 'id'=>$data->id_links)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_to')); ?>:</b>
	<?php echo CHtml::encode($data->link_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_creator')); ?>:</b>
	<?php echo CHtml::encode($data->id_creator); ?>
	<br />


</div>