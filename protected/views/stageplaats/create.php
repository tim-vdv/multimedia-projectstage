<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Stageplaats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>Create Stageplaats</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>