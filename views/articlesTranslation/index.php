<?php
/* @var $this ArticlesTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles Translations',
);

$this->menu=array(
	array('label'=>'Create ArticlesTranslation', 'url'=>array('create')),
	array('label'=>'Manage ArticlesTranslation', 'url'=>array('admin')),
);
?>

<h1>Articles Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
