<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */

$this->breadcrumbs=array(
	'Links Translations'=>array('links/index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Links', 'url'=>array('links/index')),
	array('label'=>'Manage Links', 'url'=>array('links/admin')),
);
?>

<h1>Create LinksTranslation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>