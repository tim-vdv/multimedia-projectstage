<?php
/* @var $this BegeleiderController */
/* @var $model Begeleider */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BegeleiderID'); ?>
		<?php echo $form->textField($model,'BegeleiderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GebruikerID'); ?>
		<?php echo $form->textField($model,'GebruikerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BedrijfID'); ?>
		<?php echo $form->textField($model,'BedrijfID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->