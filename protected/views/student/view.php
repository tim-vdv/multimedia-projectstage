<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Studenten'=>array('student/admin'),
	'Details',
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
