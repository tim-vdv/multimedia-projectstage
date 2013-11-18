<?php
/* @var $this StageaanvraagController */
/* @var $model Stageaanvraag */

$this->breadcrumbs=array(
	'Stageaanvraags'=>array('index'),
	$model->AanvraagID=>array('view','id'=>$model->AanvraagID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stageaanvraag', 'url'=>array('index')),
	array('label'=>'Create Stageaanvraag', 'url'=>array('create')),
	array('label'=>'View Stageaanvraag', 'url'=>array('view', 'id'=>$model->AanvraagID)),
	array('label'=>'Manage Stageaanvraag', 'url'=>array('admin')),
);
?>

<h1>Update Stageaanvraag <?php echo $model->AanvraagID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>