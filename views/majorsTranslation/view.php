<?php
/* @var $this MajorsTranslationController */
/* @var $model MajorsTranslation */

$this->breadcrumbs=array(
	'Majors Translations'=>array('index'),
	$model->id_major_translation,
);

$this->menu=array(
	array('label'=>'List MajorsTranslation', 'url'=>array('index')),
	array('label'=>'Create MajorsTranslation', 'url'=>array('create')),
	array('label'=>'Update MajorsTranslation', 'url'=>array('update', 'id'=>$model->id_major_translation)),
	array('label'=>'Delete MajorsTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_major_translation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MajorsTranslation', 'url'=>array('admin')),
);
?>

<h1>View MajorsTranslation #<?php echo $model->id_major_translation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_major_translation',
		'majorname',
		'description',
		'id_major',
		'id_language',
	),
)); ?>
