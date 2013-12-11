<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Begeleiders'=>array('begeleider/admin'),
	'Bewerken',
);

?>

<h1>Bewerk begeleider</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>