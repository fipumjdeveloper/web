<?php
/* @var $this BannerTranslationController */
/* @var $data BannerTranslation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banner_translation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_banner_translation), array('view', 'id'=>$data->id_banner_translation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_description')); ?>:</b>
	<?php echo CHtml::encode($data->short_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_to')); ?>:</b>
	<?php echo CHtml::encode($data->link_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banner')); ?>:</b>
	<?php echo CHtml::encode($data->id_banner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::encode($data->id_language); ?>
	<br />


</div>