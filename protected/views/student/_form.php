<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GebruikerID'); ?>
		<?php echo $form->textField($model,'GebruikerID'); ?>
		<?php echo $form->error($model,'GebruikerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AfstudeerRichting'); ?>
		<?php echo $form->textField($model,'AfstudeerRichting',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'AfstudeerRichting'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->