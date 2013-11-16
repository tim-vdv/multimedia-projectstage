<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Gebruikers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gebruiker', 'url'=>array('index')),
	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
);
?>

<h1>Create Gebruiker</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>