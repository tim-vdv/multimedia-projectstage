<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Studenten'=>array('student/admin'),
	'Bewerken',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'View Student', 'url'=>array('view', 'id'=>$model->StudentID)),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>Bewerk student</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>