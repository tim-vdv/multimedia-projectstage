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

	<p class="note">Velden met <span class="required">*</span> zijn verplicht.</p>

	<?php echo $form->errorSummary($model); ?>
        	<div class="row">
		<?php echo $form->labelEx($model,'Titel'); ?>
		<?php echo $form->textField($model,'Titel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Titel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Omschrijving'); ?>
		<?php echo $form->textArea($model,'Omschrijving',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Omschrijving'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Aantal'); ?>
		<?php echo $form->dropDownList($model,'Aantal',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'Aantal'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Jaar'); ?>
		<?php echo $form->dropDownList($model,'Jaar',array('2013-2014'=>'2013-2014','2014-2015'=>'2014-2015','2015-2016'=>'2015-2016','2016-2017'=>'2016-2017')); ?>
		<?php echo $form->error($model,'Jaar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Richting'); ?>
		<?php echo $form->dropDownList($model,'Richting',array('Programmeren'=>'Programmeren','Multimedia'=>'Multimedia','Netwerken'=>'Netwerken','Mainframe'=>'Mainframe')); ?>
		<?php echo $form->error($model,'Richting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Periode'); ?>
		<?php echo $form->dropDownList($model,'Periode',array('Semester 1'=>'Semester 1','Semester 2'=>'Semester 2')); ?>
		<?php echo $form->error($model,'Periode'); ?>
	</div><br/>
        
        <h8>Algemene Firmagegevens:</h8>
	<div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Naam'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Naam'); ?>
		<?php echo $form->error(Bedrijf::model(),'Naam'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Adres'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Adres'); ?>
		<?php echo $form->error(Bedrijf::model(),'Adres'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Postcode'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Postcode'); ?>
		<?php echo $form->error(Bedrijf::model(),'Postcode'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Gemeente'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Gemeente'); ?>
		<?php echo $form->error(Bedrijf::model(),'Gemeente'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Land'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Land'); ?>
		<?php echo $form->error(Bedrijf::model(),'Land'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Tel'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Tel'); ?>
		<?php echo $form->error(Bedrijf::model(),'Tel'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Fax'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Fax'); ?>
		<?php echo $form->error(Bedrijf::model(),'Fax'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Website'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Website'); ?>
		<?php echo $form->error(Bedrijf::model(),'Website'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'AantalPersoneel'); ?>
		<?php echo $form->textField(Bedrijf::model(),'AantalPersoneel'); ?>
		<?php echo $form->error(Bedrijf::model(),'AantalPersoneel'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx(Bedrijf::model(),'Bereikbaarheid'); ?>
		<?php echo $form->textField(Bedrijf::model(),'Bereikbaarheid'); ?>
		<?php echo $form->error(Bedrijf::model(),'Bereikbaarheid'); ?>
	</div><br/>
       <h8>Stagementor:</h8>
         <div class="row">
		<?php echo $form->labelEx(Gebruiker::model(),'VoorNaam'); ?>
		<?php echo $form->textField(Gebruiker::model(),'VoorNaam'); ?>
		<?php echo $form->error(Gebruiker::model(),'VoorNaam'); ?>
	</div>
       
        <div class="row">
		<?php echo $form->labelEx(Gebruiker::model(),'FamNaam'); ?>
		<?php echo $form->textField(Gebruiker::model(),'FamNaam'); ?>
		<?php echo $form->error(Gebruiker::model(),'FamNaam'); ?>
	</div>

                <div class="row">
		<?php echo $form->labelEx(Gebruiker::model(),'Email'); ?>
		<?php echo $form->textField(Gebruiker::model(),'Email'); ?>
		<?php echo $form->error(Gebruiker::model(),'Email'); ?>
	</div>
       
        <div class="row">
		<?php echo $form->labelEx(Gebruiker::model(),'Telefoon'); ?>
		<?php echo $form->textField(Gebruiker::model(),'Telefoon'); ?>
		<?php echo $form->error(Gebruiker::model(),'Telefoon'); ?>
	</div>
       
         <div class="row">
		<?php echo $form->labelEx(Gebruiker::model(),'Wachtwoord'); ?>
		<?php echo $form->passwordField(Gebruiker::model(),'Wachtwoord'); ?>
		<?php echo $form->error(Gebruiker::model(),'Wachtwoord'); ?>
	</div>
       
        <div class="row">
		<?php echo $form->labelEx(Begeleider::model(),'Functie'); ?>
		<?php echo $form->textField(Begeleider::model(),'Functie'); ?>
		<?php echo $form->error(Begeleider::model(),'Functie'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx(Begeleider::model(),'NietBeschikbaar'); ?>
		<?php echo $form->textField(Begeleider::model(),'NietBeschikbaar'); ?>
		<?php echo $form->error(Begeleider::model(),'NietBeschikbaar'); ?>
	</div><br/>

        <h8>Tijdens de stage mogelijks door de student te gebruiken:</h8>
	<div class="row">
		<?php echo $form->labelEx($model,'Hardware'); ?>
		<?php echo $form->textField($model,'Hardware',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Hardware'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Beheerssysteem'); ?>
		<?php echo $form->textField($model,'Beheerssysteem',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Beheerssysteem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DBMS'); ?>
		<?php echo $form->textField($model,'DBMS',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DBMS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Programmeertaal'); ?>
		<?php echo $form->textField($model,'Programmeertaal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Programmeertaal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Casetool'); ?>
		<?php echo $form->textField($model,'Casetool',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Casetool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ontwikkelingstool'); ?>
		<?php echo $form->textField($model,'Ontwikkelingstool',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Ontwikkelingstool'); ?>
	</div><br/>
       <h8>Binnen het bedrijf algemeen gebruikte methodes/talen/SW/HW:</h8>
	<div class="row">
		<?php echo $form->labelEx($model,'MethodiekAnalyse'); ?>
		<?php echo $form->textField($model,'MethodiekAnalyse',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MethodiekAnalyse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MethodiekProgLogica'); ?>
		<?php echo $form->textField($model,'MethodiekProgLogica',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MethodiekProgLogica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ConfHardware'); ?>
		<?php echo $form->textField($model,'ConfHardware',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ConfHardware'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Netwerkprotocols'); ?>
		<?php echo $form->textField($model,'Netwerkprotocols',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Netwerkprotocols'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GebruikteGL'); ?>
		<?php echo $form->textField($model,'GebruikteGL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'GebruikteGL'); ?>
	</div><br/>
        <h8>Door het bedrijf verzorgde opleiding aan de student:</h8>
	<div class="row">
		<?php echo $form->labelEx($model,'OplOnderwerp'); ?>
		<?php echo $form->textField($model,'OplOnderwerp',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'OplOnderwerp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OplWanneer'); ?>
		<?php echo $form->textField($model,'OplWanneer',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'OplWanneer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oplHoeLang'); ?>
		<?php echo $form->textField($model,'oplHoeLang',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'oplHoeLang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Bevestig' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->