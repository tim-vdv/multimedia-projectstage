<?php
/* @var $this StageaanvraagController */
/* @var $model Stageaanvraag */

$this->breadcrumbs=array(
	'Stageaanvraags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stageaanvraag', 'url'=>array('index')),
	array('label'=>'Manage Stageaanvraag', 'url'=>array('admin')),
);
?>

<h1>Create Stageaanvraag</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>