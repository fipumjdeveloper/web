<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ArticlesTranslation', 'url'=>array('articles/admin')),
	array('label'=>'Create ArticlesTranslation', 'url'=>array('create','id'=>$model->id_articles)),
	array('label'=>'Update ArticlesTranslation', 'url'=>array('update', 'id'=>$model->id_articles_translation)),
	array('label'=>'Delete ArticlesTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articles_translation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticlesTranslation', 'url'=>array('admin','id'=>$model->id_articles)),
);
?>

<h1>View Articles Translation : <?php echo $model->idArticles->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'caption',
		'short_description',
		'tags',
		array(
			'name'=>'cover',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->baseUrl . "/" . Yii::app()->params["upload_images_gridview"] . $model->cover,'alt',array('width'=>100,'height'=>100))
			),
		array(
			'name'=>'content',
			'type'=>'raw',
			'value'=>$model->content
			),
		'is_viewed',
		'is_shared',
		'is_liked',
		'date_created',
		'date_updated',
		'idLanguage.name',
		'idCreator.firstname',
	),
)); ?>
