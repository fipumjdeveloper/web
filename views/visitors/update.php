<?php
/* @var $this VisitorsController */
/* @var $model Visitors */

$this->breadcrumbs=array(
	'Visitors'=>array('index'),
	$model->id_visitor=>array('view','id'=>$model->id_visitor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visitors', 'url'=>array('index')),
	array('label'=>'Create Visitors', 'url'=>array('create')),
	array('label'=>'View Visitors', 'url'=>array('view', 'id'=>$model->id_visitor)),
	array('label'=>'Manage Visitors', 'url'=>array('admin')),
);
?>

<h1>Update Visitors <?php echo $model->id_visitor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>