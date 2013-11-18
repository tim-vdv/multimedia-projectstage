<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Aanmelden';
$this->breadcrumbs=array(
	'Aanmelden',
);
?>

<h1>Aanmelden</h1>

<p>Vul de volgende gegevens in:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Velden met een <span class="required">*</span> zijn verplicht.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Gebruikersnaam*'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Wachtwoord*'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div><br/>
        
        <div class="row">
            <a href="index.php?r=gebruiker/create">
		<?php echo $form->labelEx($model,'Registreren'); ?>
            </a>
            <a href="contact.php">
		<?php echo $form->labelEx($model,'Wachtwoord vergeten?'); ?>
            </a>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
