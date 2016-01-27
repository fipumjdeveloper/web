<?php
/* @var $this MajorsTranslationController */
/* @var $model MajorsTranslation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_major_translation'); ?>
		<?php echo $form->textField($model,'id_major_translation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'majorname'); ?>
		<?php echo $form->textField($model,'majorname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_major'); ?>
		<?php echo $form->textField($model,'id_major'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_language'); ?>
		<?php echo $form->textField($model,'id_language'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->