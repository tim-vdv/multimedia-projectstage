<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */

$this->breadcrumbs=array(
	'Admin'=>array('site/page&view=adminpage'),
	'Stageaanvragen'=>array('stageplaats/admin'),
	'Details',
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

