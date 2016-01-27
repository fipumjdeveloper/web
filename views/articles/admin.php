<?php
/* @var $this ArticlesController */
/* @var $model Articles */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Articles', 'url'=>array('index')),
	array('label'=>'Create Articles', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Articles</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be donee.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id_articles',
		// 'cover',
		'title',
		array(
			'type'=>'raw',
			'header'=>'Cover',
			'value'=>'CHtml::image(Yii::app()->baseUrl . "/" . Yii::app()->params["upload_images_gridview"] . $data->cover, "", array("style"=>"width: 50px"))',
		),
		'caption',
		'short_description',
		'tags',
		/*
		'content',
		'status',
		'date_created',
		'id_category',
		'id_creator',
		*/
		array(
			'header'=>'Translation',
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
			'buttons'=>array(
				'view'=>array(
					'label'=>'View ',
					'options'=>array(
						'title' => 'View Translations'
					),
					'url'=>'Yii::app()->createUrl("articlesTranslation/admin", array("id"=>$data->id_articles))'
				),
				'update'=>array(
					'label'=>'Edit',
					'options'=>array(
						'title' => 'Change Translations'
					),
					'url'=>'Yii::app()->createUrl("articlesTranslation/update", array("id"=>$data->id_articles))'
				),
				'delete'=>array(
					'label'=>'Delete',
					'options'=>array(
						'title' => 'Delete Translations'
					),
					'url'=>'Yii::app()->createUrl("articlesTranslation/deleteTranslation", array("id"=>$data->id_articles))',
					'click'=>'true'
				)
			)
		),
		array(
			'header'=>'Operation',
			'class'=>'CButtonColumn',
		)
	),
)); ?>
