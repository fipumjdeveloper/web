<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */

$this->breadcrumbs=array(
	'Links Translations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Links', 'url'=>array('links/index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#links-translation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Links Translations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'links-translation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id_links_translation',
		'name',
		'link_to',
		'idLanguage.name',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}'
		),
	),
));
?>
