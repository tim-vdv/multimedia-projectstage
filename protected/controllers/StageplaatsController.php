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
                'actions' => array(''),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
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
                                $this->redirect(array('view', 'id' => $model->StageID));
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

}
