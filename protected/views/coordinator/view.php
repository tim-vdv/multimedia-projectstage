<?php
/* @var $this CoordinatorController */
/* @var $model Coordinator */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Coördinators'=>array('coordinator/admin'),
	'Details',
);

?>

<h1>Details student</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CoordinatorID',
		'GebruikerID',
	),
)); ?>
