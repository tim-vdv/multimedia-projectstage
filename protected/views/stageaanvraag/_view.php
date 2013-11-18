<?php
/* @var $this StageaanvraagController */
/* @var $data Stageaanvraag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AanvraagID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AanvraagID), array('view', 'id'=>$data->AanvraagID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StudentID')); ?>:</b>
	<?php echo CHtml::encode($data->StudentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StageID')); ?>:</b>
	<?php echo CHtml::encode($data->StageID); ?>
	<br />


</div>