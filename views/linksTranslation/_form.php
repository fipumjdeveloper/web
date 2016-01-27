<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'links-translation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_to'); ?>
		<?php echo $form->textArea($model,'link_to',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'link_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idLinks.name'); ?>
		<?php //echo $form->textField($model,'id_links'); ?>
		<?php echo $form->dropDownList($model,'id_links',CHtml::listData(Links::model()->findAll(),'id_links', 'name'), array('disabled'=>$model->id_links != '' ? 'disabled' : '')); ?>
		<?php echo $form->error($model,'id_links'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idLanguage.name'); ?>
		<?php //echo $form->textField($model,'id_language'); ?>
		<?php echo $form->dropDownList($model,'id_language',CHtml::listData(Language::model()->findAll(), 'id_language', 'name')); ?>
		<?php echo $form->error($model,'id_language'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->