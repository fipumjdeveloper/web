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
		'title',
		array(
			'name'=>'cover',
			'type'=>'raw',
			'value'=>CHtml::image(Yii::app()->baseUrl . "/" . Yii::app()->params["upload_images_gridview"] . $model->cover,'alt',array('width'=>100,'height'=>100))
				),
		'caption',
		'short_description',
		'tags',
		// 'content',
		array(
			'label'=>'Content',
			'type'=>'html',
			'value'=>$model->content
		),
		array(
			'label'=> 'status',
			'type'=>'raw',
			'value'=> $model->status ? CHtml::link('Active','',array('class'=>'badge btn-success')) : CHtml::link('Inactive',array('#'),array('class'=>'badge btn-danger')),	
			),
		'date_created',
		'idCategory.name',
		'idCreator.firstname',
	),
)); ?>
