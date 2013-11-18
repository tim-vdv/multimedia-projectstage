<?php

/**
 * This is the model class for table "coordinator".
 *
 * The followings are the available columns in table 'coordinator':
 * @property integer $CoordinatorID
 * @property integer $GebruikerID
 *
 * The followings are the available model relations:
 * @property Gebruiker $gebruiker
 */
class Coordinator extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'coordinator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GebruikerID', 'required'),
			array('GebruikerID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CoordinatorID, GebruikerID', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CoordinatorID' => 'Coordinator',
			'GebruikerID' => 'Gebruiker',
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

		$criteria->compare('CoordinatorID',$this->CoordinatorID);
		$criteria->compare('GebruikerID',$this->GebruikerID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coordinator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
