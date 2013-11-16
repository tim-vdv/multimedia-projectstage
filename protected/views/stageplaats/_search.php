<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'StageID'); ?>
		<?php echo $form->textField($model,'StageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BegeleiderID'); ?>
		<?php echo $form->textField($model,'BegeleiderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BedrijfID'); ?>
		<?php echo $form->textField($model,'BedrijfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Titel'); ?>
		<?php echo $form->textField($model,'Titel',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Omschrijving'); ?>
		<?php echo $form->textField($model,'Omschrijving',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aantal'); ?>
		<?php echo $form->textField($model,'Aantal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jaar'); ?>
		<?php echo $form->textField($model,'Jaar',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Richting'); ?>
		<?php echo $form->textField($model,'Richting',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->