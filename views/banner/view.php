<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Create Banner', 'url'=>array('create')),
	array('label'=>'Update Banner', 'url'=>array('update', 'id'=>$model->id_banner)),
	array('label'=>'Delete Banner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_banner),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h1>View Banner #<?php echo $model->id_banner; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_banner',
		'title',
		array(
			'name'=>'image',
			'type'=>'html',
			'value'=>$model->imageHtml,
		),
		'short_description',
		'link_to',
		'index_no',
		'status',
		array(
			'name'=>'id_creator',
			'type'=>'raw',
			'value'=>$model->idCreator->username,
		),
		// array(
			// 'name'=>'id_language',
			// 'type'=>'raw',
			// 'value'=>$model->idLanguage->name,
		// ),
	),
)); ?>
