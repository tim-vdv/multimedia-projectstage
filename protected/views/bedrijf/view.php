<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Bedrijven'=>array('bedrijf/admin'),
	'Details',
);

$this->menu=array(
	array('label'=>'List Bedrijf', 'url'=>array('index')),
	array('label'=>'Create Bedrijf', 'url'=>array('create')),
	array('label'=>'Update Bedrijf', 'url'=>array('update', 'id'=>$model->BedrijfID)),
	array('label'=>'Delete Bedrijf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BedrijfID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>Details bedrijf</h1>

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
