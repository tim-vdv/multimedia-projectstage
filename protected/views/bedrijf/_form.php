<?php
/* @var $this BedrijfController */
/* @var $model Bedrijf */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bedrijf-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Naam'); ?>
		<?php echo $form->textField($model,'Naam',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Naam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Adres'); ?>
		<?php echo $form->textField($model,'Adres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Adres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Postcode'); ?>
		<?php echo $form->textField($model,'Postcode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'Postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gemeente'); ?>
		<?php echo $form->textField($model,'Gemeente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Gemeente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Land'); ?>
		<?php echo $form->textField($model,'Land',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Land'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->