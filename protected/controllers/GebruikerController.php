<?php

class GebruikerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create','index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(''),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
				'expression'=>"Yii::app()->getUser()->getState('account') =='Coördinator'",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Gebruiker;
                $modelStudent = new Student;
                $modelCoordinator = new Coordinator;
                $modelBegeleider = new Begeleider;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gebruiker']))
		{
                        $model->attributes=$_POST['Gebruiker'];
			if($model->save()){
                             if($_POST['Gebruiker']['Account'] === "Student"){
                                $modelStudent->GebruikerID = $model->getPrimaryKey();
                                $modelStudent->AfstudeerRichting = "Programmeren";
                                $modelStudent->save();
                             }
                             if($_POST['Gebruiker']['Account'] === "Coördinator"){
                                $modelCoordinator->GebruikerID = $model->getPrimaryKey();
                                $modelCoordinator->save();
                             }                             
                             if($_POST['Gebruiker']['Account'] === "Begeleider"){
                                $modelBegeleider->GebruikerID = $model->getPrimaryKey();
                                $modelBegeleider->BedrijfID = 1;
                                $modelBegeleider->Functie = " ";
                                $modelBegeleider->NietBeschikbaar = " ";
                                $modelBegeleider->save();
                             }
                             
                            $this->redirect(array('site/login'));
                            }
                        
                 }

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gebruiker']))
		{
			$model->attributes=$_POST['Gebruiker'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->GebruikerID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Gebruiker');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gebruiker('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gebruiker']))
			$model->attributes=$_GET['Gebruiker'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Gebruiker the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Gebruiker::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Gebruiker $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gebruiker-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
