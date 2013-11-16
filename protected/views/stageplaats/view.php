<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Stageplaats'=>array('index'),
	$model->StageID,
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
	array('label'=>'Update Stageplaats', 'url'=>array('update', 'id'=>$model->StageID)),
	array('label'=>'Delete Stageplaats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->StageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>View Stageplaats #<?php echo $model->StageID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'StageID',
		'BegeleiderID',
		'BedrijfID',
		'Titel',
		'Omschrijving',
		'Aantal',
		'Jaar',
		'Richting',
	),
)); ?>
