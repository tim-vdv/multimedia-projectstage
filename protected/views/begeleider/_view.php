<?php
/* @var $this BegeleiderController */
/* @var $data Begeleider */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BegeleiderID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BegeleiderID), array('view', 'id'=>$data->BegeleiderID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GebruikerID')); ?>:</b>
	<?php echo CHtml::encode($data->GebruikerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BedrijfID')); ?>:</b>
	<?php echo CHtml::encode($data->BedrijfID); ?>
	<br />


</div>