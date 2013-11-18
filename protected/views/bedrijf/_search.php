<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BedrijfID'); ?>
		<?php echo $form->textField($model,'BedrijfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Adres'); ?>
		<?php echo $form->textField($model,'Adres',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Postcode'); ?>
		<?php echo $form->textField($model,'Postcode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gemeente'); ?>
		<?php echo $form->textField($model,'Gemeente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Land'); ?>
		<?php echo $form->textField($model,'Land',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->