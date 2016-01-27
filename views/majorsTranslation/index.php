<?php
/* @var $this MajorsTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Majors Translations',
);

$this->menu=array(
	array('label'=>'Create MajorsTranslation', 'url'=>array('create')),
	array('label'=>'Manage MajorsTranslation', 'url'=>array('admin')),
);
?>

<h1>Majors Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
