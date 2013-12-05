<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Admin';
$this->breadcrumbs=array(
	'Admin',
);
?>
<h1>Admin</h1>

<p>Klik op onderstaande links voor de gegevens aan te passen.</p>
<details><summary><h7>Gebruikers</h7></summary>
    <lu>
        <a href="index.php?r=gebruiker/admin"><li class="li-style">Alle gebruikers</li></a>
        <a href="index.php?r=student/admin"><li class="li-style">Studenten</li></a>
        <a href="index.php?r=coordinator/admin"><li class="li-style">Coördinators</li></a>
        <a href="index.php?r=begeleider/admin"><li class="li-style">Begeleiders</li></a>
    </lu>
</details>
<details><summary><h7>Stageplaats</h7></summary>
    <lu>
        <a href="index.php?r=stageplaats/admin"><li class="li-style">Stageaanvragen</li></a>
        <a href="index.php?r=bedrijf/admin"><li class="li-style">Bedrijven</li></a>
    </lu>
</details>