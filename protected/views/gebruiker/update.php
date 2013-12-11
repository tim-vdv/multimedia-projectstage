<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Gebruikers'=>array('gebruiker/admin'),
	'Bewerken',
);
?>

<h1>Bewerk gebruiker</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>