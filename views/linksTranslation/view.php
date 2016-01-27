<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */

$this->breadcrumbs=array(
	'Links Translations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Links', 'url'=>array('index')),
	array('label'=>'Update This', 'url'=>array('update', 'id'=>$model->id_links)),
	array('label'=>'Delete This', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_links),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Links', 'url'=>array('admin')),
);
?>

<h1>View Links Translation Of <?php echo $model->name; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_links_translation',
		'name',
		'link_to',
		'idLinks.name',
		'idLanguage.name',
	),
)); ?>
