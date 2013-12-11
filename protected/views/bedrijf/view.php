<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Bedrijven'=>array('bedrijf/admin'),
	'Details',
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
