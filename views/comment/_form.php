<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_articles'); ?>
		<?php echo $form->textField($model,'id_articles'); ?>
		<?php echo $form->error($model,'id_articles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_comment_reply'); ?>
		<?php echo $form->textField($model,'id_comment_reply'); ?>
		<?php echo $form->error($model,'id_comment_reply'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_users'); ?>
		<?php echo $form->textField($model,'id_users'); ?>
		<?php echo $form->error($model,'id_users'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->