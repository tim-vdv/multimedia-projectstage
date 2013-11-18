<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Aanvraag',
);

//$this->menu=array(
//	array('label'=>'List Stageplaats', 'url'=>array('index')),
//	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
//);
?>

<h1>Vraag stageplaats aan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>