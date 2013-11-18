<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('StudentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->StudentID), array('view', 'id'=>$data->StudentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GebruikerID')); ?>:</b>
	<?php echo CHtml::encode($data->GebruikerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AfstudeerRichting')); ?>:</b>
	<?php echo CHtml::encode($data->AfstudeerRichting); ?>
	<br />


</div>