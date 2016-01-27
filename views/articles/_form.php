<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cover'); ?>
		<?php //echo $form->fileField($model,'cover'); ?>
		<?php echo $form->fileField($model,'cover',array('accept'=>'image/*','id'=>'uploadImage')); ?>
		<?php echo $form->error($model,'cover'); ?>
	</div>
	<br />

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<?php echo $form->textField($model,'short_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'short_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); 
		/*$this->widget('ext.tinymce.ETinyMce', array(
				'model'=>$model,
				'attribute'=>'content',
				'editorTemplate'=>'full',
				'options' => array(
					// 'theme_advanced_buttons1' => 'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,|,cut,copy,paste,pastetext,pasteword,|,search,replace,',
					// 'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,',
					// 'theme_advanced_buttons3' => '',
					// 'theme_advanced_buttons4' => '',
					'theme_advanced_toolbar_location' => 'top',
					'theme_advanced_toolbar_align' => 'left',
					'theme_advanced_statusbar_location' => 'none',
					'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
					15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
				),
				'useSwitch'=>false,
				// 'useCompression'=>false,
		))*/
		$this->widget('ext.editMe.widgets.ExtEditMe', array(
			'model'=>$model,
			'attribute'=>'content',
			'id'=>'Articles_content',
			'toolbar'=>Yii::app()->params['toolbar_editor'],
			'filebrowserBrowseUrl'=>Yii::app()->baseUrl.'/kcfinder/browse.php?type=files',
			'filebrowserImageBrowseUrl'=>Yii::app()->baseUrl.'/kcfinder/browse.php?type=images',
			'filebrowserFlashBrowseUrl'=>Yii::app()->baseUrl.'/kcfinder/browse.php?type=flash',
			'filebrowserUploadUrl'=>Yii::app()->baseUrl.'/kcfinder/upload.php?type=files',
			'filebrowserImageUploadUrl'=>Yii::app()->baseUrl.'/kcfinder/upload.php?type=images',
			'filebrowserFlashUploadUrl'=>Yii::app()->baseUrl.'/kcfinder/upload.php?type=flash'
		)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php //echo $form->dropDownList($model,'id_category',$select); ?> <!--<a href="Create Category" target="_blank" />-->
		<?php echo $select ?>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<a href="index.php?r=category/create" target="_blank" class="badge badge-info">Create Category</a>
		</div>
		<?php echo $form->error($model,'id_category'); ?>
	</div>
	<br />

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('Disabled','Enabled')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'date_created'); ?>
		<?php //echo $form->textField($model,'date_created'); ?>
		<?php //echo $form->error($model,'date_created'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_creator'); ?>
		<?php //echo $form->textField($model,'id_creator'); ?>
		<?php //echo $form->error($model,'id_creator'); ?>
	</div>
	-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info')); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->