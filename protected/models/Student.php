<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $StudentID
 * @property integer $GebruikerID
 * @property string $AfstudeerRichting
 *
 * The followings are the available model relations:
 * @property Stageaanvraag[] $stageaanvraags
 * @property Gebruiker $gebruiker
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GebruikerID, AfstudeerRichting', 'required'),
			array('GebruikerID', 'numerical', 'integerOnly'=>true),
			array('AfstudeerRichting', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('StudentID, GebruikerID, AfstudeerRichting', 'safe', 'on'=>'search'),
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
			'stageaanvraags' => array(self::HAS_MANY, 'Stageaanvraag', 'StudentID'),
			'gebruiker' => array(self::BELONGS_TO, 'Gebruiker', 'GebruikerID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'StudentID' => 'Student',
			'GebruikerID' => 'Gebruiker',
			'AfstudeerRichting' => 'Afstudeer Richting',
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

		$criteria->compare('StudentID',$this->StudentID);
		$criteria->compare('GebruikerID',$this->GebruikerID);
		$criteria->compare('AfstudeerRichting',$this->AfstudeerRichting,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
