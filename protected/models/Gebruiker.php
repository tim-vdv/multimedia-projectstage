<?php

/**
 * This is the model class for table "gebruiker".
 *
 * The followings are the available columns in table 'gebruiker':
 * @property integer $GebruikerID
 * @property string $VoorNaam
 * @property string $FamNaam
 * @property string $Email
 * @property string $Telefoon
 * @property string $Wachtwoord
 *
 * The followings are the available model relations:
 * @property Begeleider[] $begeleiders
 * @property Coordinator[] $coordinators
 * @property Stageaanvraag[] $stageaanvraags
 * @property Student[] $students
 */
class Gebruiker extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gebruiker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VoorNaam, FamNaam, Email, Telefoon, Wachtwoord', 'required'),
			array('VoorNaam, FamNaam, Email', 'length', 'max'=>50),
			array('Telefoon, Wachtwoord', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GebruikerID, VoorNaam, FamNaam, Email, Telefoon, Wachtwoord', 'safe', 'on'=>'search'),
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
			'begeleiders' => array(self::HAS_MANY, 'Begeleider', 'GebruikerID'),
			'coordinators' => array(self::HAS_MANY, 'Coordinator', 'GebruikerID'),
			'stageaanvraags' => array(self::HAS_MANY, 'Stageaanvraag', 'GebruikerID'),
			'students' => array(self::HAS_MANY, 'Student', 'GebruikerID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GebruikerID' => 'Gebruiker',
			'VoorNaam' => 'Voornaam',
			'FamNaam' => 'FamilieNaam',
			'Email' => 'Email',
			'Telefoon' => 'Telefoon',
			'Wachtwoord' => 'Wachtwoord',
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

		$criteria->compare('GebruikerID',$this->GebruikerID);
		$criteria->compare('VoorNaam',$this->VoorNaam,true);
		$criteria->compare('FamNaam',$this->FamNaam,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Telefoon',$this->Telefoon,true);
		$criteria->compare('Wachtwoord',$this->Wachtwoord,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gebruiker the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
