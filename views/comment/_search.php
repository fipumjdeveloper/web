<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_comment'); ?>
		<?php echo $form->textField($model,'id_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_articles'); ?>
		<?php echo $form->textField($model,'id_articles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_comment_reply'); ?>
		<?php echo $form->textField($model,'id_comment_reply'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_users'); ?>
		<?php echo $form->textField($model,'id_users'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->