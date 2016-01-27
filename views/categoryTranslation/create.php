<?php
/* @var $this CategoryTranslationController */
/* @var $model CategoryTranslation */

$this->breadcrumbs=array(
	'Category Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoryTranslation', 'url'=>array('index')),
	array('label'=>'Manage CategoryTranslation', 'url'=>array('admin')),
);
?>

<h1>Create CategoryTranslation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>