<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Gebruikers'=>array('gebruiker/admin'),
	'Details',
);

$this->menu=array(
	array('label'=>'List Gebruiker', 'url'=>array('index')),
	array('label'=>'Create Gebruiker', 'url'=>array('create')),
	array('label'=>'Update Gebruiker', 'url'=>array('update', 'id'=>$model->GebruikerID)),
	array('label'=>'Delete Gebruiker', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GebruikerID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
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
