<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ArticlesTranslation', 'url'=>array('index')),
	array('label'=>'Create ArticlesTranslation', 'url'=>array('create')),
	array('label'=>'Update ArticlesTranslation', 'url'=>array('update', 'id'=>$model->id_articles_translation)),
	array('label'=>'Delete ArticlesTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articles_translation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticlesTranslation', 'url'=>array('admin')),
);
?>

<h1>View ArticlesTranslation #<?php echo $model->id_articles_translation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articles_translation',
		'title',
		'cover',
		'caption',
		'short_description',
		'tags',
		'content',
		'is_viewed',
		'is_shared',
		'is_liked',
		'date_created',
		'date_updated',
		'id_articles',
		'id_language',
		'id_creator',
	),
)); ?>
