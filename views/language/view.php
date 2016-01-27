<?php
/* @var $this LanguageController */
/* @var $model Language */

$this->breadcrumbs=array(
	'Languages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Language', 'url'=>array('index')),
	array('label'=>'Create Language', 'url'=>array('create')),
	array('label'=>'Update Language', 'url'=>array('update', 'id'=>$model->id_language)),
	array('label'=>'Delete Language', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_language),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Language', 'url'=>array('admin')),
);
?>

<h1>View Language #<?php echo $model->id_language; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_language',
		'name',
		'icon',
		'iso',
	),
)); ?>
