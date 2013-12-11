<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Gebruikers'=>array('gebruiker/admin'),
	'Details',
);

?>

<h1>Details gebruiker</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GebruikerID',
		'VoorNaam',
		'FamNaam',
		'Email',
		'Telefoon',
		'Wachtwoord',
	),
)); ?>
