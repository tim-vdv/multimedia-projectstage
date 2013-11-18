<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Bedrijfs'=>array('index'),
	$model->BedrijfID,
);

$this->menu=array(
	array('label'=>'List Bedrijf', 'url'=>array('index')),
	array('label'=>'Create Bedrijf', 'url'=>array('create')),
	array('label'=>'Update Bedrijf', 'url'=>array('update', 'id'=>$model->BedrijfID)),
	array('label'=>'Delete Bedrijf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BedrijfID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>View Bedrijf #<?php echo $model->BedrijfID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BedrijfID',
		'Naam',
		'Adres',
		'Postcode',
		'Gemeente',
		'Land',
	),
)); ?>
