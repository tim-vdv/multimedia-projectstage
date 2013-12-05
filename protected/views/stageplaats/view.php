<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Stageaanvragen'=>array('stageplaats/admin'),
	'Details',
);

$this->menu=array(
	array('label'=>'List Stageplaats', 'url'=>array('index')),
	array('label'=>'Create Stageplaats', 'url'=>array('create')),
	array('label'=>'Update Stageplaats', 'url'=>array('update', 'id'=>$model->StageID)),
	array('label'=>'Delete Stageplaats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->StageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stageplaats', 'url'=>array('admin')),
);
?>

<h1>Details Stageplaats</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
                   'label'=>'Bedrijf',
                   'value'=>$model->bedrijf->Naam,
                 ),
            	array(
                   'label'=>'Adres',
                   'value'=>$model->bedrijf->Adres. " ". $model->bedrijf->Postcode. " ".$model->bedrijf->Gemeente. " (".$model->bedrijf->Land. ")",
                 ),
                array(
                   'label'=>'Telefoon',
                   'value'=>$model->bedrijf->Tel,
                 ),
                array(
                   'label'=>'Fax',
                   'value'=>$model->bedrijf->Fax,
                 ),
                array(
                   'label'=>'Fax',
                   'value'=>$model->bedrijf->Website,
                 ),
                array(
                   'label'=>'Fax',
                   'value'=>$model->bedrijf->Bereikbaarheid,
                 ),
		'BedrijfID',
		'Titel',
		'Omschrijving',
		'Aantal',
		'Jaar',
		'Richting',
	),
)); ?>
