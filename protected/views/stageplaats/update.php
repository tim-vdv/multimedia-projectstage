<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Stageaanvragen'=>array('stageplaats/admin'),
	'Bewerken',
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
	array('label'=>'View Stageplaats', 'url'=>array('view', 'id'=>$model->StageID)),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>Bewerk stageplaats</h1>

<?php $this->renderPartial('_formupdate', array('model'=>$model)); ?>