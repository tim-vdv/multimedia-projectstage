<?php

/**
 * This is the model class for table "stageaanvraag".
 *
 * The followings are the available columns in table 'stageaanvraag':
 * @property integer $AanvraagID
 * @property integer $GebruikerID
 * @property integer $StageID
 *
 * The followings are the available model relations:
 * @property Gebruiker $gebruiker
 * @property Stageplaats $stage
 */
class Stageaanvraag extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stageaanvraag';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GebruikerID, StageID', 'required'),
			array('GebruikerID, StageID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AanvraagID, GebruikerID, StageID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'gebruiker' => array(self::BELONGS_TO, 'Gebruiker', 'GebruikerID'),
			'stage' => array(self::BELONGS_TO, 'Stageplaats', 'StageID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'AanvraagID' => 'Aanvraag',
			'GebruikerID' => 'Gebruiker',
			'StageID' => 'Stage',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('AanvraagID',$this->AanvraagID);
		$criteria->compare('GebruikerID',$this->GebruikerID);
		$criteria->compare('StageID',$this->StageID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stageaanvraag the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
