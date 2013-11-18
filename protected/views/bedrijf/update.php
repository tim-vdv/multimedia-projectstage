<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */

$this->breadcrumbs=array(
	'Bedrijfs'=>array('index'),
	$model->BedrijfID=>array('view','id'=>$model->BedrijfID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bedrijf', 'url'=>array('index')),
	array('label'=>'Create Bedrijf', 'url'=>array('create')),
	array('label'=>'View Bedrijf', 'url'=>array('view', 'id'=>$model->BedrijfID)),
	array('label'=>'Manage Bedrijf', 'url'=>array('admin')),
);
?>

<h1>Update Bedrijf <?php echo $model->BedrijfID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>