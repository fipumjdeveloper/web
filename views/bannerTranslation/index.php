<?php
/* @var $this BannerTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banner Translations',
);

$this->menu=array(
	array('label'=>'Create BannerTranslation', 'url'=>array('create')),
	array('label'=>'Manage BannerTranslation', 'url'=>array('admin')),
);
?>

<h1>Banner Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
