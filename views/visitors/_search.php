<?php
/* @var $this VisitorsController */
/* @var $model Visitors */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_visitor'); ?>
		<?php echo $form->textField($model,'id_visitor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_visitor'); ?>
		<?php echo $form->textField($model,'ip_visitor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'browser_agent'); ?>
		<?php echo $form->textField($model,'browser_agent',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_visited'); ?>
		<?php echo $form->textField($model,'date_visited'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->