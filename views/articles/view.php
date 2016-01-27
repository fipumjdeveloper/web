<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('index')),
	array('label'=>'Create Articles', 'url'=>array('create')),
	array('label'=>'Update Articles', 'url'=>array('update', 'id'=>$model->id_articles)),
	array('label'=>'Delete Articles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articles),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articles', 'url'=>array('admin')),
);
?>

<h1>View Articles #<?php echo $model->id_articles; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articles',
		'title',
		'cover',
		'caption',
		'short_description',
		'tags',
		// 'content',
		array(
			'label'=>'Content',
			'type'=>'html',
			'value'=>$model->content
		),
		'status',
		'date_created',
		'id_category',
		'id_creator',
	),
)); ?>
