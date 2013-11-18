<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Bedrijfs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bedrijf', 'url'=>array('index')),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>Create Bedrijf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>