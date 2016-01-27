<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_articles_translation'); ?>
		<?php echo $form->textField($model,'id_articles_translation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cover'); ?>
		<?php echo $form->textArea($model,'cover',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'short_description'); ?>
		<?php echo $form->textField($model,'short_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_viewed'); ?>
		<?php echo $form->textField($model,'is_viewed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_shared'); ?>
		<?php echo $form->textField($model,'is_shared'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_liked'); ?>
		<?php echo $form->textField($model,'is_liked'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_created'); ?>
		<?php echo $form->textField($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_updated'); ?>
		<?php echo $form->textField($model,'date_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_articles'); ?>
		<?php echo $form->textField($model,'id_articles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_language'); ?>
		<?php echo $form->textField($model,'id_language'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_creator'); ?>
		<?php echo $form->textField($model,'id_creator'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->