<?php
/* @var $this StageaanvraagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stageaanvraags',
);

$this->menu=array(
	array('label'=>'Create Stageaanvraag', 'url'=>array('create')),
	array('label'=>'Manage Stageaanvraag', 'url'=>array('admin')),
);
?>

<h1>Stageaanvraags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
