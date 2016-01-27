<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title=>array('view','id'=>$model->id_articles),
	'Update',
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('index')),
	array('label'=>'Create Articles', 'url'=>array('create')),
	array('label'=>'View Articles', 'url'=>array('view', 'id'=>$model->id_articles)),
	array('label'=>'Manage Articles', 'url'=>array('admin')),
);
?>

<h1>Update Articles <?php echo $model->id_articles; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'select'=>$select)); ?>