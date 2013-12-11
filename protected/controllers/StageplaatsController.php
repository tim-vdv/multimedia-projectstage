<?php

class StageplaatsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
      
        
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('createpdf'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'create'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete','update'),
                'expression'=>"Yii::app()->getUser()->getState('account') =='Coördinator'",
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Stageplaats;
        $modelGebruiker = new Gebruiker;
        $modelBegeleider = new Begeleider;
        $modelBedrijf = new Bedrijf;
        $modelAanvraag = new Stageaanvraag;
        $modelGebruiker->Account = "Begeleider";
        $model->Goedgekeurd = "Nee";
        $model->Vrijeplaatsen = "0";

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Bedrijf'])) {
            $modelBedrijf->attributes = $_POST['Bedrijf'];
            if ($modelBedrijf->save()) {

                $modelGebruiker->attributes = $_POST['Gebruiker'];
                if ($modelGebruiker->save()) {

                    $modelBegeleider->attributes = $_POST['Begeleider'];
                    $modelBegeleider->GebruikerID = $modelGebruiker->getPrimaryKey();
                    $modelBegeleider->BedrijfID = $modelBedrijf->getPrimaryKey();
                    if ($modelBegeleider->save()) {

                        $model->attributes = $_POST['Stageplaats'];
                        $model->BedrijfID = $modelBedrijf->getPrimaryKey();
                        $model->BegeleiderID = $modelBegeleider->getPrimaryKey();

                        if ($model->save()) {
                            
                            $modelAanvraag->GebruikerID = Yii::app()->user->id;
                            $modelAanvraag->StageID = $model->getPrimaryKey();
                            if ($modelAanvraag->save()) {
                                $this->redirect(array('stageplaats/index&view=stageplaats'));
                            }
                        }
//                $modelAanvraag->attributes = $_POST['Stageaanvraag'];
//                $modelAanvraag->GebruikerID = Yii::app()->user->id;
//                $modelAanvraag->StageID = $model->getPrimaryKey();
//                if ($modelAanvraag->save()) {


                            
                        }
                    }
                }
            }
        
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Stageplaats'])) {
            $model->attributes = $_POST['Stageplaats'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->StageID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Stageplaats');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Stageplaats('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Stageplaats']))
            $model->attributes = $_GET['Stageplaats'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Stageplaats the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Stageplaats::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Stageplaats $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'stageplaats-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    
    public function actionCreatepdf($id) {
    Yii::import('application.vendor.*');
    require_once('tcpdf/tcpdf.php');
    $model = $this->loadModel($id);
    $GebruikerID = Yii::app()->user->id;
    $gebruikerModel = Gebruiker::model()->findByPk($GebruikerID);
    
    $BegeleiderID = $model->begeleider->GebruikerID;
    $begeleiderModel = Gebruiker::model()->findByPk($BegeleiderID);
    $begeleiderVoorNaam = $begeleiderModel['VoorNaam'];
    $begeleiderFamNaam = $begeleiderModel['FamNaam'];
    $begeleiderTel = $begeleiderModel['Telefoon'];
    $begeleiderEmail = $begeleiderModel['Email'];
    $begeleiderFunctie = $model->begeleider->Functie;
    $begeleiderNietBeschikbaar = $model->begeleider->NietBeschikbaar;
    
    $bedrijfNaam = $model->bedrijf->Naam;
    $bedrijfAdres = $model->bedrijf->Adres;
    $bedrijfGemeente = $model->bedrijf->Gemeente;
    $bedrijfLand = $model->bedrijf->Land;
    $bedrijfPostcode = $model->bedrijf->Postcode;
    $bedrijfFax = $model->bedrijf->Fax;
    $bedrijfWebsite = $model->bedrijf->Website;
    $bedrijfTel = $model->bedrijf->Tel;
    
    $gebruikerVoorNaam = $gebruikerModel['VoorNaam'];
    $gebruikerFamNaam = $gebruikerModel['FamNaam'];
    $gebruikerEmail = $gebruikerModel['Email'];
    $gebruikerTelefoon = $gebruikerModel['Telefoon'];
    
    $stageplaatsOmschrijving = $model['Omschrijving'];
    $stageplaatsPeriode = $model['Periode'];
    $stageplaatsTitel = $model['Titel'];
    $stageplaatsJaar = $model['Jaar'];
    $stageplaatsAantal = $model['Aantal'];
    $stageplaatsHardware = $model['Hardware'];
    $stageplaatsVrijeplaatsen = $model['Vrijeplaatsen'];
    $stageplaatsBeheerssysteem = $model['Beheerssysteem'];
    $stageplaatsDBMS = $model['DBMS'];
    $stageplaatsProgrammeertaal = $model['Programmeertaal'];
    $stageplaatsCasetool = $model['Casetool'];
    $stageplaatsOntwikkelingstool = $model['Ontwikkelingstool'];
    $stageplaatsMethodiekAnalyse = $model['MethodiekAnalyse'];
    $stageplaatsMethodiekProgLogica = $model['MethodiekProgLogica'];
    $stageplaatsConfHardware = $model['ConfHardware'];
    $stageplaatsNetwerkprotocols = $model['Netwerkprotocols'];
    $stageplaatsGebruikteGL = $model['GebruikteGL'];
    $stageplaatsOplOnderwerp = $model['OplOnderwerp'];
    $stageplaatsOplWanneer = $model['OplWanneer'];
    $stageplaatsoplHoeLang = $model['oplHoeLang'];
    
    
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, guide');
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "STAGEDOSSIER - Bachelor Toegepaste Informatica", "Academiejaar $stageplaatsJaar $stageplaatsPeriode", $stageplaatsTitel , '');
    $pdf->setHeaderFont(Array('helvetica', '', 8));
    $pdf->setFooterFont(Array('helvetica', '', 6));
    $pdf->SetMargins(15, 18, 15);
    $pdf->SetHeaderMargin(5);
    $pdf->SetFooterMargin(10);
    $pdf->SetAutoPageBreak(TRUE, 0);
    $pdf->SetFont('dejavusans', '', 7);
    $pdf->AddPage();
    $pdf->writeHTML("</br><h4>Persoonlijke gegevens van de student:</h4></br>", true, false, true, false, '');
    $tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Voornaam</b></td>
        <td>$gebruikerVoorNaam</td>  
    </tr>
    <tr>
        <td><b>Familienaam</b></td>
        <td>$gebruikerFamNaam</td>  
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>$gebruikerEmail</td>  
    </tr>
    <tr>
        <td><b>Telefoon</b></td>
        <td>$gebruikerTelefoon</td>  
    </tr>       
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->writeHTML("</br><h4>Gekozen stagebedrijf:</h4><br/>", true, false, true, false, '');

 $tbl2 = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Naam</b></td>
        <td>$bedrijfNaam</td>  
    </tr>
    <tr>
        <td><b>Adres</b></td>
        <td>$bedrijfAdres, $bedrijfPostcode $bedrijfGemeente ($bedrijfLand)</td>  
    </tr>
    <tr>
        <td><b>Gemeente</b></td>
        <td>$bedrijfGemeente</td>  
    </tr>
    <tr>
        <td><b>Telefoon</b></td>
        <td>$bedrijfTel</td>  
    </tr>
    <tr>
        <td><b>Fax</b></td>
        <td>$bedrijfFax</td>  
    </tr>
    <tr>
        <td><b>Website</b></td>
        <td>$bedrijfWebsite</td>  
    </tr>       
</table>
EOD;
$pdf->writeHTML($tbl2, true, false, false, false, '');
    $tbl6 = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Voornaam</b></td>
        <td>$begeleiderVoorNaam</td>  
    </tr>
    <tr>
        <td><b>Familienaam</b></td>
        <td>$begeleiderFamNaam</td>  
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>$begeleiderEmail</td>  
    </tr>
    <tr>
        <td><b>Telefoon</b></td>
        <td>$begeleiderTel</td>  
    </tr>
    <tr>
        <td><b>Functie</b></td>
        <td>$begeleiderFunctie</td>  
    </tr>     
        <tr>
        <td><b>Begeleider is niet beschikbaar</b></td>
        <td>$begeleiderNietBeschikbaar</td>  
    </tr>    
</table>
EOD;
    
    $pdf->writeHTML("</br><h4>Persoonlijke gegevens van de begeleider:</h4><br/></p>", true, false, true, false, '');
    $pdf->writeHTML($tbl6, true, false, false, false, '');
    $tbl3 = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Hardware</b></td>
        <td>$stageplaatsHardware</td>  
    </tr>
    <tr>
        <td><b>Beheerssysteem</b></td>
        <td>$stageplaatsBeheerssysteem</td>  
    </tr>
    <tr>
        <td><b>DBMS</b></td>
        <td>$stageplaatsDBMS</td>  
    </tr>
    <tr>
        <td><b>Programmeertaal</b></td>
        <td>$stageplaatsProgrammeertaal</td>  
    </tr>
    <tr>
        <td><b>Casetool</b></td>
        <td>$stageplaatsCasetool</td>  
    </tr>
    <tr>
        <td><b>Ontwikkelingstool</b></td>
        <td>$stageplaatsOntwikkelingstool</td>  
    </tr>       
</table>
EOD;
    
    $pdf->writeHTML("</br><h4>Tijdens de stage mogelijks door de student te gebruiken:</h4><br/></p>", true, false, true, false, '');
    $pdf->writeHTML($tbl3, true, false, false, false, '');
    $tbl4 = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Methodiek analyse</b></td>
        <td>$stageplaatsMethodiekAnalyse</td>  
    </tr>
    <tr>
        <td><b>Methodiek programmeerlogica</b></td>
        <td>$stageplaatsMethodiekProgLogica</td>  
    </tr>
    <tr>
        <td><b>Configuratie hardware</b></td>
        <td>$stageplaatsConfHardware</td>  
    </tr>
    <tr>
        <td><b>Type netwerkprotocols</b></td>
        <td>$stageplaatsNetwerkprotocols</td>  
    </tr>
    <tr>
        <td><b>Gebruikte GL's</b></td>
        <td>$stageplaatsGebruikteGL</td>  
    </tr>   
</table>
EOD;
    
    $pdf->writeHTML("</br><h4>Binnen het bedrijf algemeen gebruikte methodes:</h4><br/></p>", true, false, true, false, '');
    $pdf->writeHTML($tbl4, true, false, false, false, '');
        $tbl5 = <<<EOD
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="150px"><b>Onderwerp</b></td>
        <td>$stageplaatsOplOnderwerp</td>  
    </tr>
    <tr>
        <td><b>Wanneer</b></td>
        <td>$stageplaatsOplWanneer</td>  
    </tr>
    <tr>
        <td><b>Hoelang</b></td>
        <td>$stageplaatsoplHoeLang</td>  
    </tr>
</table>
EOD;
    
    $pdf->writeHTML("</br><h4>Door het bedrijf verzorgde opleiding aan de student:</h4><br/></p>", true, false, true, false, '');
    $pdf->writeHTML($tbl5, true, false, false, false, '');  
    $pdf->LastPage();
    $pdf->AddPage();
    $pdf->writeHTML("</br><h4>Verloop van de sollicitaties</h4><br/><p>Maak een sollicitatiebrief (motivatiebrief) en CV vooraleer je start met solliciteren.<br/><br/> Maak hier een lijst van alle stagebedrijven die je gecontacteerd hebt en waar je voor een sollicitatiegesprek bent uitgenodigd. Noteer steeds het resultaat.
<br/><br/></p>", true, false, true, false, ''); 
    

        $tbl1 = <<<EOD
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td align="center"><b>Naam bedrijf + Stagenr</b></td>
        <td align="center"><b>Opdracht voor 1 of 2 studenten</b></td>
        <td align="center"><b>Datum sollicitatie</b></td>
        <td align="center"><b>Sollicitatie: alleen/partner + naam</b></td>
        <td align="center"><b>Resultaat sollicitatie OK/NOK</b></td>
        <td align="center"><b>Opmerking</b></td>
    </tr>
    <tr>
        <td height="50px">Vb. Firma x</td>
        <td>2</td>
        <td>18/10/13</td>
        <td>Partner: Luk De Buk</td>  
        <td>NOK</td>
        <td>Te weinig voorkennis van programmeertaal</td>  
    </tr>
    <tr>
        <td height="50px"></td>
        <td></td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>  
    </tr>
    <tr>
        <td height="50px"></td>
        <td></td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>  
    </tr>
    <tr>
        <td height="50px"></td>
        <td></td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>  
    </tr>
    <tr>
        <td height="50px"></td>
        <td></td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>  
    </tr>
    <tr>
        <td height="50px"></td>
        <td></td>
        <td></td>
        <td></td>  
        <td></td>
        <td></td>  
    </tr>        
</table>
EOD;
        $pdf->writeHTML($tbl1, true, false, false, false, '');
        
    $pdf->AddPage();
    
     
    $pdf->writeHTML("</br><h4>Stageopdracht: $stageplaatsTitel</h4><br/><p>Door de stagementor of de contactpersoon in het stagebedrijf te ondertekenen.<br/><br/>Globale beschrijving van de stageopdracht die de stagiair zal moeten uitvoeren:
<br/><br/>$stageplaatsOmschrijving<br/><br/><br/><br/><br/><br/>Het bedrijf gaat akkoord dat bovenstaande stageopdracht wordt uitgevoerd door student <b>$gebruikerVoorNaam $gebruikerFamNaam</b><br/><br/>Voor akkoord, &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Voor akkoord, <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>Bedrijf&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<b> $gebruikerVoorNaam $gebruikerFamNaam</b></p>", true, false, true, false, '');  
    $pdf->Output("stagedossier$gebruikerVoorNaam$gebruikerFamNaam", "I");
}


}
