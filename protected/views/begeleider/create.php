<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */

$this->breadcrumbs=array(
	'Begeleiders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Begeleider', 'url'=>array('index')),
	array('label'=>'Manage Begeleider', 'url'=>array('admin')),
);
?>

<h1>Create Begeleider</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>