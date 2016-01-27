<?php
/* @var $this LanguageController */
/* @var $data Language */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_language), array('view', 'id'=>$data->id_language)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon')); ?>:</b>
	<?php echo CHtml::encode($data->icon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso')); ?>:</b>
	<?php echo CHtml::encode($data->iso); ?>
	<br />


</div>