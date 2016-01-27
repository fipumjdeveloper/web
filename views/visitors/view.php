<?php
/* @var $this VisitorsController */
/* @var $model Visitors */

$this->breadcrumbs=array(
	'Visitors'=>array('index'),
	$model->id_visitor,
);

$this->menu=array(
	array('label'=>'List Visitors', 'url'=>array('index')),
	array('label'=>'Create Visitors', 'url'=>array('create')),
	array('label'=>'Update Visitors', 'url'=>array('update', 'id'=>$model->id_visitor)),
	array('label'=>'Delete Visitors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_visitor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitors', 'url'=>array('admin')),
);
?>

<h1>View Visitors #<?php echo $model->id_visitor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_visitor',
		'ip_visitor',
		'browser_agent',
		'date_visited',
	),
)); ?>
