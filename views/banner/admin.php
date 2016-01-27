<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Create Banner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Banners</h1>

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
	'id'=>'banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        /*
		array(
            'name'=>'index',
            'filter'=>false,
            'type'=>'html',
            //'value' => '<span class="sort"></span>',
            'value'=>function($data){
                return '<span class="sort-up"><img src="'.Yii::app()->request->baseUrl.'/images/up.png" alt="" title=""></span>
                <span class="sort-down"><img src="'.Yii::app()->request->baseUrl.'/images/down.png" alt="" title=""></span>';
            },
        ),
		*/
		// 'id_banner',
		'title',
		'index_no',
		//'image',
        array(
            'name'=>'image',
            'filter'=>false,
            'type'=>'html',
            'value'=>'$data->imageHtml',
        ),
		'short_description',
		'link_to',
        array(
            'name'=>'status',
            'type'=>'raw',
        ),
        // array(
            // 'name'=>'id_creator',
            // 'type'=>'raw',
            // 'value'=>'CHtml::encode($data->idCreator->username)',
        // ),
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
					'url'=>'Yii::app()->createUrl("bannerTranslation/admin", array("id"=>$data->id_banner))'
				),
				'update'=>array(
					'label'=>'Edit',
					'options'=>array(
						'title' => 'Change Translations'
					),
					'url'=>'Yii::app()->createUrl("bannerTranslation/update", array("id"=>$data->id_banner))'
				),
				'delete'=>array(
					'label'=>'Delete',
					'options'=>array(
						'title' => 'Delete Translations'
					),
					'url'=>'Yii::app()->createUrl("bannerTranslation/deleteTranslation", array("id"=>$data->id_banner))',
					'click'=>'true'
				)
			)
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
