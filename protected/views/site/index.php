<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welkom op <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p><?php echo CHtml::encode(Yii::app()->getUser()->getState('account')); ?></p>
<h4>Aanmelden is verplicht voor gebruik te maken van deze website.</h4>
<p>Via deze site kun je alle beschikbare stageplaatsen bekijken en het stageformulier invullen.</p><br/>

<p>Hieronder vind je de drie nieuwste stageplaatsen:</p>
