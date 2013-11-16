<?php
/* @var $this GebruikerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gebruikers',
);

$this->menu=array(
	array('label'=>'Create Gebruiker', 'url'=>array('create')),
	array('label'=>'Manage Gebruiker', 'url'=>array('admin')),
);
?>

<h1>Gebruikers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
