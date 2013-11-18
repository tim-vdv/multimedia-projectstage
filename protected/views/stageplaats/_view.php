<?php
/* @var $this StageplaatsController */
/* @var $data Stageplaats */
?>


<details><summary><h7><?php echo CHtml::encode($data->Titel); ?> (<?php echo CHtml::encode($data->bedrijf->Gemeente); ?>)</h7></summary><br/>

            <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$data,
	'attributes'=>array(
                array(
                   'label'=>'Bedrijf',
                   'value'=>$data->bedrijf->Naam,
                 ),
                array(
                   'label'=>'Regio',
                   'value'=>$data->bedrijf->Gemeente,
                 ),
		'Omschrijving',
            	'Richting',
		'Jaar',
                'Periode',
            	'Aantal',
                'Vrijeplaatsen',
                'Goedgekeurd',

	),
)); ?>

    <button style=" float: right">Download printversie</button><br/><br/></details>