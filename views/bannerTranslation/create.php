<?php
/* @var $this BannerTranslationController */
/* @var $model BannerTranslation */

$this->breadcrumbs=array(
	'Banner Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BannerTranslation', 'url'=>array('index')),
	array('label'=>'Manage BannerTranslation', 'url'=>array('admin')),
);
?>

<h1>Create BannerTranslation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>