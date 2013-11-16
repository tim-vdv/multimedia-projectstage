<?php
/* @var $this GebruikerController */
/* @var $model Gebruiker */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GebruikerID'); ?>
		<?php echo $form->textField($model,'GebruikerID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VoorNaam'); ?>
		<?php echo $form->textField($model,'VoorNaam',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FamNaam'); ?>
		<?php echo $form->textField($model,'FamNaam',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Telefoon'); ?>
		<?php echo $form->textField($model,'Telefoon',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Wachtwoord'); ?>
		<?php echo $form->textField($model,'Wachtwoord'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->