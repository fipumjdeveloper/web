<?php
/* @var $this CategoryTranslationController */
/* @var $model CategoryTranslation */

$this->breadcrumbs=array(
	'Category Translations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CategoryTranslation', 'url'=>array('index')),
	array('label'=>'Create CategoryTranslation', 'url'=>array('create')),
	array('label'=>'Update CategoryTranslation', 'url'=>array('update', 'id'=>$model->id_category_translation)),
	array('label'=>'Delete CategoryTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_category_translation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoryTranslation', 'url'=>array('admin')),
);
?>

<h1>View CategoryTranslation #<?php echo $model->id_category_translation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_category_translation',
		'name',
		'id_category',
		'id_language',
	),
)); ?>
