<?php
/* @var $this BegeleiderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Begeleiders',
);

$this->menu=array(
	array('label'=>'Create Begeleider', 'url'=>array('create')),
	array('label'=>'Manage Begeleider', 'url'=>array('admin')),
);
?>

<h1>Begeleiders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
