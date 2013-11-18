<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */

$this->breadcrumbs=array(
	'Begeleiders'=>array('index'),
	$model->BegeleiderID=>array('view','id'=>$model->BegeleiderID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Begeleider', 'url'=>array('index')),
	array('label'=>'Create Begeleider', 'url'=>array('create')),
	array('label'=>'View Begeleider', 'url'=>array('view', 'id'=>$model->BegeleiderID)),
	array('label'=>'Manage Begeleider', 'url'=>array('admin')),
);
?>

<h1>Update Begeleider <?php echo $model->BegeleiderID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>