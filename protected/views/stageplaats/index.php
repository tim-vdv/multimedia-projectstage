<?php
/* @var $this StageplaatsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stageplaats',
);

$this->menu=array(
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>Stageplaats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
