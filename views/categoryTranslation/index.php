<?php
/* @var $this CategoryTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Category Translations',
);

$this->menu=array(
	array('label'=>'Create CategoryTranslation', 'url'=>array('create')),
	array('label'=>'Manage CategoryTranslation', 'url'=>array('admin')),
);
?>

<h1>Category Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
