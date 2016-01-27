<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	$model->title=>array('view','id'=>$model->id_articles_translation),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticlesTranslation', 'url'=>array('index')),
	array('label'=>'Create ArticlesTranslation', 'url'=>array('create')),
	array('label'=>'View ArticlesTranslation', 'url'=>array('view', 'id'=>$model->id_articles_translation)),
	array('label'=>'Manage ArticlesTranslation', 'url'=>array('admin')),
);
?>

<h1>Update ArticlesTranslation <?php echo $model->id_articles_translation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>