<?php
/* @var $this MajorsTranslationController */
/* @var $model MajorsTranslation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'majors-translation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'majorname'); ?>
		<?php echo $form->textField($model,'majorname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'majorname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_major'); ?>
		<?php echo $form->textField($model,'id_major'); ?>
		<?php echo $form->error($model,'id_major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_language'); ?>
		<?php echo $form->textField($model,'id_language'); ?>
		<?php echo $form->error($model,'id_language'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->