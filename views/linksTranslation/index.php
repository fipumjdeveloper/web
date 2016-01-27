<?php
/* @var $this LinksTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Links Translations',
);

$this->menu=array(
	array('label'=>'Manage Links', 'url'=>array('links/admin')),
);
?>

<h1>Links Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
