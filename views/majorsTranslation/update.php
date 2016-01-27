<?php
/* @var $this MajorsTranslationController */
/* @var $model MajorsTranslation */

$this->breadcrumbs=array(
	'Majors Translations'=>array('index'),
	$model->id_major_translation=>array('view','id'=>$model->id_major_translation),
	'Update',
);

$this->menu=array(
	array('label'=>'List MajorsTranslation', 'url'=>array('index')),
	array('label'=>'Create MajorsTranslation', 'url'=>array('create')),
	array('label'=>'View MajorsTranslation', 'url'=>array('view', 'id'=>$model->id_major_translation)),
	array('label'=>'Manage MajorsTranslation', 'url'=>array('admin')),
);
?>

<h1>Update MajorsTranslation <?php echo $model->id_major_translation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>