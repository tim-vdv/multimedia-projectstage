<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Stageaanvragen'=>array('stageplaats/admin'),
	'Bewerken',
);


?>

<h1>Bewerk stageplaats</h1>

<?php $this->renderPartial('_formupdate', array('model'=>$model)); ?>