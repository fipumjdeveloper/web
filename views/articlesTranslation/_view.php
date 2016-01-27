<?php
/* @var $this ArticlesTranslationController */
/* @var $data ArticlesTranslation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articles_translation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_articles_translation), array('view', 'id'=>$data->id_articles_translation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cover')); ?>:</b>
	<?php echo CHtml::encode($data->cover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caption')); ?>:</b>
	<?php echo CHtml::encode($data->caption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_description')); ?>:</b>
	<?php echo CHtml::encode($data->short_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_viewed')); ?>:</b>
	<?php echo CHtml::encode($data->is_viewed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_shared')); ?>:</b>
	<?php echo CHtml::encode($data->is_shared); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_liked')); ?>:</b>
	<?php echo CHtml::encode($data->is_liked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articles')); ?>:</b>
	<?php echo CHtml::encode($data->id_articles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_language')); ?>:</b>
	<?php echo CHtml::encode($data->id_language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_creator')); ?>:</b>
	<?php echo CHtml::encode($data->id_creator); ?>
	<br />

	*/ ?>

</div>