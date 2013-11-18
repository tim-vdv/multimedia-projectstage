<?php
/* @var $this StageaanvraagController */
/* @var $model Stageaanvraag */

$this->breadcrumbs=array(
	'Stageaanvraags'=>array('index'),
	$model->AanvraagID,
);

$this->menu=array(
	array('label'=>'List Stageaanvraag', 'url'=>array('index')),
	array('label'=>'Create Stageaanvraag', 'url'=>array('create')),
	array('label'=>'Update Stageaanvraag', 'url'=>array('update', 'id'=>$model->AanvraagID)),
	array('label'=>'Delete Stageaanvraag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AanvraagID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stageaanvraag', 'url'=>array('admin')),
);
?>

<h1>View Stageaanvraag #<?php echo $model->AanvraagID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AanvraagID',
		'StudentID',
		'StageID',
	),
)); ?>
