<?php
/* @var $this CoordinatorController */
/* @var $model Coordinator */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Coördinators',
);

$this->menu=array(
	array('label'=>'List Coordinator', 'url'=>array('index')),
	array('label'=>'Create Coordinator', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#coordinator-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Beheer coördinators</h1>

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
	'id'=>'coordinator-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
            	array(
                        'header'=>'Aanpassen',
			'class'=>'CButtonColumn',
		),
		array(            
                'name'=>'gebruiker.FamNaam',
                 ),
                 array(            
                'name'=>'gebruiker.VoorNaam',
                 ),
	),
)); ?>
