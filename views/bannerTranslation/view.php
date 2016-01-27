<?php
/* @var $this BannerTranslationController */
/* @var $model BannerTranslation */

$this->breadcrumbs=array(
	'Banner Translations'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BannerTranslation', 'url'=>array('index')),
	array('label'=>'Create BannerTranslation', 'url'=>array('create')),
	array('label'=>'Update BannerTranslation', 'url'=>array('update', 'id'=>$model->id_banner_translation)),
	array('label'=>'Delete BannerTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_banner_translation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BannerTranslation', 'url'=>array('admin')),
);
?>

<h1>View BannerTranslation #<?php echo $model->id_banner_translation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_banner_translation',
		'title',
		'image',
		'short_description',
		'link_to',
		'id_banner',
		'id_language',
	),
)); ?>
