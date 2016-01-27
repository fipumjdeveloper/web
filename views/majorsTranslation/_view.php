<?php
/* @var $this MajorsTranslationController */
/* @var $data MajorsTranslation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_major_translation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_major_translation), array('view', 'id'=>$data->id_major_translation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('majorname')); ?>:</b>
	<?php echo CHtml::encode($data->majorname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_major')); ?>:</b>
	<?php echo CHtml::encode($data->id_major); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::encode($data->id_language); ?>
	<br />


</div>