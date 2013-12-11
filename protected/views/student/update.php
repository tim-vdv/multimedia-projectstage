<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Studenten'=>array('student/admin'),
	'Bewerken',
);


?>

<h1>Bewerk student</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>