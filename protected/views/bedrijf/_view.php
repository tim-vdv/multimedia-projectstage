<?php
/* @var $this BedrijfController */
/* @var $data Bedrijf */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BedrijfID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BedrijfID), array('view', 'id'=>$data->BedrijfID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Naam')); ?>:</b>
	<?php echo CHtml::encode($data->Naam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Adres')); ?>:</b>
	<?php echo CHtml::encode($data->Adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Postcode')); ?>:</b>
	<?php echo CHtml::encode($data->Postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gemeente')); ?>:</b>
	<?php echo CHtml::encode($data->Gemeente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Land')); ?>:</b>
	<?php echo CHtml::encode($data->Land); ?>
	<br />


</div>