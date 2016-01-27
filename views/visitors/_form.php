<?php
/* @var $this VisitorsController */
/* @var $model Visitors */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitors-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ip_visitor'); ?>
		<?php echo $form->textField($model,'ip_visitor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ip_visitor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'browser_agent'); ?>
		<?php echo $form->textField($model,'browser_agent',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'browser_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_visited'); ?>
		<?php echo $form->textField($model,'date_visited'); ?>
		<?php echo $form->error($model,'date_visited'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->