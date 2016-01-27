<?php
/* @var $this BannerTranslationController */
/* @var $model BannerTranslation */

$this->breadcrumbs=array(
	'Banner Translations'=>array('index'),
	$model->title=>array('view','id'=>$model->id_banner_translation),
	'Update',
);

$this->menu=array(
	array('label'=>'List BannerTranslation', 'url'=>array('index')),
	array('label'=>'Create BannerTranslation', 'url'=>array('create')),
	array('label'=>'View BannerTranslation', 'url'=>array('view', 'id'=>$model->id_banner_translation)),
	array('label'=>'Manage BannerTranslation', 'url'=>array('admin')),
);
?>

<h1>Update BannerTranslation <?php echo $model->id_banner_translation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>