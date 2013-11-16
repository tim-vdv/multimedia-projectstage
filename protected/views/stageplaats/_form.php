<?php
/* @var $this StageplaatsController */
/* @var $model Stageplaats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stageplaats-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'BegeleiderID'); ?>
		<?php echo $form->textField($model,'BegeleiderID'); ?>
		<?php echo $form->error($model,'BegeleiderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BedrijfID'); ?>
		<?php echo $form->textField($model,'BedrijfID'); ?>
		<?php echo $form->error($model,'BedrijfID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Titel'); ?>
		<?php echo $form->textField($model,'Titel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Titel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omschrijving'); ?>
		<?php echo $form->textField($model,'Omschrijving',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Omschrijving'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aantal'); ?>
		<?php echo $form->textField($model,'Aantal'); ?>
		<?php echo $form->error($model,'Aantal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jaar'); ?>
		<?php echo $form->textField($model,'Jaar',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Jaar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Richting'); ?>
		<?php echo $form->textField($model,'Richting',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Richting'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->