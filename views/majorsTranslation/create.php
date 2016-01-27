<?php
/* @var $this MajorsTranslationController */
/* @var $model MajorsTranslation */

$this->breadcrumbs=array(
	'Majors Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MajorsTranslation', 'url'=>array('index')),
	array('label'=>'Manage MajorsTranslation', 'url'=>array('admin')),
);
?>

<h1>Create MajorsTranslation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>