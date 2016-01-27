<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		<?php echo $form->fileField($model,'file', array('accept'=>'image/*','id'=>'uploadImage')); ?>
		<?php echo $form->error($model,'file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<?php echo $form->textField($model,'short_description',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'short_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_to'); ?>
		<?php echo $form->textArea($model,'link_to',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'link_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('Disable', 'Enable')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'index'); ?>
		<?php //echo $form->textField($model,'index'); ?>
		<?php //echo $form->error($model,'index'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_creator'); ?>
		<?php //echo $form->dropDownList($model,'id_creator', $model->creatorOps, array('empty'=>'--Select a creator--')); ?>
		<?php //echo $form->error($model,'id_creator'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_language'); ?>
		<?php //echo $form->dropDownList($model,'id_language', $model->langOps, array('empty'=>'--Select a language--')); ?>
		<?php //echo $form->error($model,'id_language'); ?>
	</div>
	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->