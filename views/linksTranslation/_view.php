<?php
/* @var $this LinksTranslationController */
/* @var $data LinksTranslation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_links_translation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_links_translation), array('view', 'id'=>$data->id_links_translation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_to')); ?>:</b>
	<?php echo CHtml::encode($data->link_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_links')); ?>:</b>
	<?php echo CHtml::encode($data->id_links); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::encode($data->id_language); ?>
	<br />


</div>