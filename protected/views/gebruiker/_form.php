<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gebruiker-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Velden met <span class="required">*</span> zijn verplicht.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'VoorNaam'); ?>
		<?php echo $form->textField($model,'VoorNaam',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'VoorNaam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FamNaam'); ?>
		<?php echo $form->textField($model,'FamNaam',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FamNaam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefoon'); ?>
		<?php echo $form->textField($model,'Telefoon',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Telefoon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Wachtwoord'); ?>
		<?php echo $form->passwordField($model,'Wachtwoord',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Wachtwoord'); ?>
	</div>
        
       <div class="row">
		<?php echo $form->labelEx($model,'Account'); ?>
               <?php echo $form->dropDownList($model,'Account',array('Student'=>'Student','Coördinator'=>'Coördinator','Begeleider'=>'Begeleider')); ?>
	</div><br/>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registreer' : 'Save'); ?>
	</div>
        
        

<?php $this->endWidget(); ?>

</div><!-- form -->