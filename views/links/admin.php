<?php
/* @var $this LinksController */
/* @var $model Links */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Links', 'url'=>array('index')),
	array('label'=>'Create Links', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#links-grid').yiiGridView('update', {
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
// $this->widget('zii.widgets.grid.CGridView', array(
	// 'id'=>'links-grid',
	// 'dataProvider'=>$model->search(),
	// 'filter'=>$model,
	// 'columns'=>array(
		// 'id_links',
		// 'name',
		// 'link_to',
		// 'date_created',
		// 'idCreator.username',
		// array(
			// 'class'=>'CButtonColumn',
		// ),
	// ),
// ));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'links-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'link_to',
		'date_created',
		array(
			'header'=>'Translations',
			'class'=>'CButtonColumn',
			// 'htmlOptions' => array('style' => 'white-space: nowrap'),
			'template'=>'{view}{update}{delete}',
			'deleteConfirmation'=>false,
			'buttons'=>array(
				'view'=>array(
					'label'=>'View ',
					'options'=>array(
						'title' => 'View Translations'
					),
					'url'=>'Yii::app()->createUrl("linksTranslation/admin", array("id"=>$data->id_links))'
				),
				'update'=>array(
					'label'=>'Edit',
					'options'=>array(
						'title' => 'Change Translations'
					),
					'url'=>'Yii::app()->createUrl("linksTranslation/update", array("id"=>$data->id_links))'
				),
				'delete'=>array(
					'label'=>'Delete',
					'options'=>array(
						'title' => 'Delete Translations'
					),
					'url'=>'Yii::app()->createUrl("linksTranslation/deleteTranslation", array("id"=>$data->id_links))',
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
