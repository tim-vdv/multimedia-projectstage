<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Bedrijven'=>array('bedrijf/admin'),
	'Bewerken',
);

$this->menu=array(
	array('label'=>'List Bedrijf', 'url'=>array('index')),
	array('label'=>'Create Bedrijf', 'url'=>array('create')),
	array('label'=>'View Bedrijf', 'url'=>array('view', 'id'=>$model->BedrijfID)),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>Bewerk bedrijf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>