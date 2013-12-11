<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Bedrijven'=>array('bedrijf/admin'),
	'Bewerken',
);

?>

<h1>Bewerk bedrijf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>