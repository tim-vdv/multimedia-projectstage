<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Stageplaats'=>array('index'),
	$model->StageID=>array('view','id'=>$model->StageID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
	array('label'=>'View Stageplaats', 'url'=>array('view', 'id'=>$model->StageID)),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>Update Stageplaats <?php echo $model->StageID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>