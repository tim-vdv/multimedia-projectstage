<?php
/* @var $this CoordinatorController */
/* @var $data Coordinator */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CoordinatorID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CoordinatorID), array('view', 'id'=>$data->CoordinatorID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GebruikerID')); ?>:</b>
	<?php echo CHtml::encode($data->GebruikerID); ?>
	<br />


</div>