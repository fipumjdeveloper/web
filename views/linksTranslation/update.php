<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */

$this->breadcrumbs=array(
	'Links Translations'=>array('index','id'=>$model->id_links),
	$model->name=>array('view','id'=>$model->id_links_translation),
	'Update',
);

$this->menu=array(
	array('label'=>'List Translations', 'url'=>array('index','id'=>$model->id_links)),
	array('label'=>'Create Translation', 'url'=>array('create','id'=>$model->id_links)),
	array('label'=>'View Translations', 'url'=>array('view', 'id'=>$model->id_links_translation)),
	array('label'=>'Manage Translations', 'url'=>array('admin')),
);
?>

<h1>Update Translation Of <?php echo $model->idLinks->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>