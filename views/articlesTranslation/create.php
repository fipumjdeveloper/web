<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('articles/admin')),
	array('label'=>'Manage Articles Translation', 'url'=>array('admin','id'=>$model->id_articles)),
);
?>

<h1>Create Articles Translation : <?php echo $model->idArticles->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>