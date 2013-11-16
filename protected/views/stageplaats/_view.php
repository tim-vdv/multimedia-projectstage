<?php
/* @var $this StageplaatsController */
/* @var $data Stageplaats */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('StageID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->StageID), array('view', 'id'=>$data->StageID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BegeleiderID')); ?>:</b>
	<?php echo CHtml::encode($data->BegeleiderID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BedrijfID')); ?>:</b>
	<?php echo CHtml::encode($data->BedrijfID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Titel')); ?>:</b>
	<?php echo CHtml::encode($data->Titel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Omschrijving')); ?>:</b>
	<?php echo CHtml::encode($data->Omschrijving); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aantal')); ?>:</b>
	<?php echo CHtml::encode($data->Aantal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jaar')); ?>:</b>
	<?php echo CHtml::encode($data->Jaar); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Richting')); ?>:</b>
	<?php echo CHtml::encode($data->Richting); ?>
	<br />
        
        <button>Test</button><br/><br/>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Richting')); ?>:</b>
	<?php echo CHtml::encode($data->Richting); ?>
	<br />

	*/?>

</div>