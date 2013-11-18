<?php
/* @var $this StageaanvraagController */
/* @var $model Stageaanvraag */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stageaanvraag-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'StudentID'); ?>
		<?php echo $form->textField($model,'StudentID'); ?>
		<?php echo $form->error($model,'StudentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StageID'); ?>
		<?php echo $form->textField($model,'StageID'); ?>
		<?php echo $form->error($model,'StageID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->