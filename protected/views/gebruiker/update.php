<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Gebruikers'=>array('gebruiker/admin'),
	'Bewerken',
);

$this->menu=array(
	array('label'=>'List Gebruiker', 'url'=>array('index')),
	array('label'=>'Create Gebruiker', 'url'=>array('create')),
	array('label'=>'View Gebruiker', 'url'=>array('view', 'id'=>$model->GebruikerID)),
	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
);
?>

<h1>Bewerk gebruiker</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>