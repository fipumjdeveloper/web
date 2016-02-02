<?php
/* @var $this ArticlesTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles Translations',
);

$this->menu=array(
	array('label'=>'Manage Articles', 'url'=>array('articles/admin')),
);
?>

<h1>Articles Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
