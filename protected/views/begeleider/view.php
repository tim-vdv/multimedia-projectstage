<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Begeleiders'=>array('begeleider/admin'),
	'Details',
);

?>

<h1>Details begeleider</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BegeleiderID',
		'GebruikerID',
		'BedrijfID',
	),
)); ?>
