<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticlesTranslation', 'url'=>array('index')),
	array('label'=>'Manage ArticlesTranslation', 'url'=>array('articles/admin')),
);
?>

<h1>Create ArticlesTranslation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>