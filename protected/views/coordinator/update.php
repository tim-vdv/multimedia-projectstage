<?php
/* @var $this CoordinatorController */
/* @var $model Coordinator */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Coördinators'=>array('coordinator/admin'),
	'Bewerken',
);

?>

<h1>Bewerk coördinator</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>