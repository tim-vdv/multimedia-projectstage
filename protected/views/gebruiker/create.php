<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Registreer',
);

//$this->menu=array(
//	array('label'=>'List Gebruiker', 'url'=>array('index')),
//	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
//);
?>

<h1>Registreer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>