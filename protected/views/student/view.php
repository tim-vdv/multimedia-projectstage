<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Studenten'=>array('student/admin'),
	'Details',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->StudentID)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->StudentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>Details student</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'StudentID',
		'GebruikerID',
		'AfstudeerRichting',
	),
)); ?>
