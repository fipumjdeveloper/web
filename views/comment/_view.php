<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_comment), array('view', 'id'=>$data->id_comment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articles')); ?>:</b>
	<?php echo CHtml::encode($data->id_articles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comment_reply')); ?>:</b>
	<?php echo CHtml::encode($data->id_comment_reply); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_users')); ?>:</b>
	<?php echo CHtml::encode($data->id_users); ?>
	<br />


</div>