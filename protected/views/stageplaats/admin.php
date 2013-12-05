<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Stageaanvragen',
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stageplaats-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Beheer stageaanvragen</h1>

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
<div class="CGridViewContainer">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stageplaats-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
            		array(
                        'header'=>'Aanpassen',
			'class'=>'CButtonColumn',
		),
		'Goedgekeurd',
//		'BegeleiderID',
//                'BedrijfID',
		'Titel',
		'Omschrijving',
		'Jaar',
		'Richting',
		'Periode',
                
		'Vrijeplaatsen',
		'Hardware',
		'Beheerssysteem',
		'DBMS',
		'Programmeertaal',
		'Casetool',
		'Ontwikkelingstool',
		'MethodiekAnalyse',
		'MethodiekProgLogica',
		'ConfHardware',
		'Netwerkprotocols',
		'GebruikteGL',
		'OplOnderwerp',
		'OplWanneer',
		'oplHoeLang',
		

	),
)); ?>
</div>
