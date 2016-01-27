<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_banner'); ?>
		<?php echo $form->textField($model,'id_banner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textArea($model,'image',array('rows'=>6, 'cols'=>50)); ?>
	</div> -->

	<div class="row">
		<?php echo $form->label($model,'short_description'); ?>
		<?php echo $form->textField($model,'short_description',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_to'); ?>
		<?php echo $form->textArea($model,'link_to',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('Disabled', 'Enabled')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_creator'); ?>
		<?php echo $form->dropDownList($model,'id_creator', CHtml::listData(Users::model()->findAll('status=1'), 'id_users', 'username'), array('empty'=>'--Select a creator--')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->