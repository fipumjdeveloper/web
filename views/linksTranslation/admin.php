<?php
/* @var $this LinksTranslationController */
/* @var $model LinksTranslation */

$this->breadcrumbs=array(
	'Links Translations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LinksTranslation', 'url'=>array('index')),
	array('label'=>'Create Translation', 'url'=>array('create','id'=>$model->id_links)),
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

<h1>Manage Links</h1>

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

<?php
/*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'links-translation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_links_translation',
		'name',
		'link_to',
		'id_links',
		'id_language',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
*/
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'links-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'link_to',
		'idLanguage.name',
		array(
			'header'=>'Translations',
			'class'=>'CButtonColumn',
			// 'htmlOptions' => array('style' => 'white-space: nowrap'),
			'template'=>'{update}{delete}',
			'deleteConfirmation'=>false,
			'buttons'=>array(
				'update'=>array(
					'label'=>'Edit',
					'url'=>'Yii::app()->createUrl("linksTranslation/update", array("id"=>$data->id_links_translation))'
				),
				'delete'=>array(
					'label'=>'Delete',
					'url'=>'Yii::app()->createUrl("linksTranslation/deleteTranslation", array("id"=>$data->id_links_translation))',
					'click'=>'true'
				)
			)
		),
	),
));
?>
