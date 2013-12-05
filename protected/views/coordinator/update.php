<?php
/* @var $this CoordinatorController */
/* @var $model Coordinator */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Coördinators'=>array('coordinator/admin'),
	'Bewerken',
);

$this->menu=array(
	array('label'=>'List Coordinator', 'url'=>array('index')),
	array('label'=>'Create Coordinator', 'url'=>array('create')),
	array('label'=>'View Coordinator', 'url'=>array('view', 'id'=>$model->CoordinatorID)),
	array('label'=>'Manage Coordinator', 'url'=>array('admin')),
);
?>

<h1>Bewerk coördinator</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>