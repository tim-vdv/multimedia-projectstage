<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */

$this->breadcrumbs=array(
	'Gebruikers'=>array('index'),
	$model->GebruikerID=>array('view','id'=>$model->GebruikerID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gebruiker', 'url'=>array('index')),
	array('label'=>'Create Gebruiker', 'url'=>array('create')),
	array('label'=>'View Gebruiker', 'url'=>array('view', 'id'=>$model->GebruikerID)),
	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
);
?>

<h1>Update Gebruiker <?php echo $model->GebruikerID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>