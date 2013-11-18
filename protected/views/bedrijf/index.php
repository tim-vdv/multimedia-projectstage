<?php
/* @var $this BedrijfController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bedrijfs',
);

$this->menu=array(
	array('label'=>'Create Bedrijf', 'url'=>array('create')),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>Bedrijfs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
