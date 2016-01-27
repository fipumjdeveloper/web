<?php
/* @var $this CategoryTranslationController */
/* @var $data CategoryTranslation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category_translation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_category_translation), array('view', 'id'=>$data->id_category_translation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category')); ?>:</b>
	<?php echo CHtml::encode($data->id_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::encode($data->id_language); ?>
	<br />


</div>