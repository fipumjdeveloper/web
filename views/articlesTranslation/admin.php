<?php
/* @var $this ArticlesTranslationController */
/* @var $model ArticlesTranslation */

$this->breadcrumbs=array(
	'Articles Translations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('articles/admin')),
	array('label'=>'Create Articles Translation', 'url'=>array('create','id'=>$model->id_articles)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articles-translation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Articles Translations</h1>

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
	'id'=>'articles-translation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		array(
			'type'=>'raw',
			'header'=>'Cover',
			'value'=>'CHtml::image(Yii::app()->baseUrl . "/" . Yii::app()->params["upload_images_gridview"] . $data->cover, "", array("style"=>"width: 50px"))',
		),
		'caption',
		'short_description',
		'tags',
		'is_viewed',
		'is_shared',
		'is_liked',
		'date_created',
		'date_updated',
		'idLanguage.name',
		/*
		'content',
		'id_articles',
		'id_creator',			
		*/
		array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
			'buttons'=>array(
				'view'=>array(
					'label'=>'View ',
					'options'=>array(
						'title' => 'View Translations',
						'visible'=>false
					),
					'url'=>'Yii::app()->createUrl("articlesTranslation/view", array("id"=>$data->id_articles_translation))'
				),
				'update'=>array(
					'label'=>'Edit',
					'options'=>array(
						'title' => 'Change Translations'
					),
					'url'=>'Yii::app()->createUrl("articlesTranslation/update", array("id"=>$data->id_articles_translation))'
				),
			),
		),
	),
)); ?>
