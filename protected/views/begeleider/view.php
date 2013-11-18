<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */

$this->breadcrumbs=array(
	'Begeleiders'=>array('index'),
	$model->BegeleiderID,
);

$this->menu=array(
	array('label'=>'List Begeleider', 'url'=>array('index')),
	array('label'=>'Create Begeleider', 'url'=>array('create')),
	array('label'=>'Update Begeleider', 'url'=>array('update', 'id'=>$model->BegeleiderID)),
	array('label'=>'Delete Begeleider', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BegeleiderID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Begeleider', 'url'=>array('admin')),
);
?>

<h1>View Begeleider #<?php echo $model->BegeleiderID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BegeleiderID',
		'GebruikerID',
		'BedrijfID',
	),
)); ?>
