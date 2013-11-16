<?php
/* @var $this GebruikerController */
/* @var $data Gebruiker */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GebruikerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GebruikerID), array('view', 'id'=>$data->GebruikerID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VoorNaam')); ?>:</b>
	<?php echo CHtml::encode($data->VoorNaam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FamNaam')); ?>:</b>
	<?php echo CHtml::encode($data->FamNaam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefoon')); ?>:</b>
	<?php echo CHtml::encode($data->Telefoon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Wachtwoord')); ?>:</b>
	<?php echo CHtml::encode($data->Wachtwoord); ?>
	<br />


</div>