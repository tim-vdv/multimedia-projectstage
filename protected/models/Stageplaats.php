<?php

/**
 * This is the model class for table "stageplaats".
 *
 * The followings are the available columns in table 'stageplaats':
 * @property integer $StageID
 * @property integer $BegeleiderID
 * @property integer $BedrijfID
 * @property string $Titel
 * @property string $Omschrijving
 * @property integer $Aantal
 * @property string $Jaar
 * @property string $Richting
 */
class Stageplaats extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stageplaats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BegeleiderID, BedrijfID, Titel, Omschrijving, Aantal, Jaar, Richting', 'required'),
			array('BegeleiderID, BedrijfID, Aantal', 'numerical', 'integerOnly'=>true),
			array('Titel, Richting', 'length', 'max'=>50),
			array('Omschrijving', 'length', 'max'=>100),
			array('Jaar', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('StageID, BegeleiderID, BedrijfID, Titel, Omschrijving, Aantal, Jaar, Richting', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'StageID' => 'Stage',
			'BegeleiderID' => 'Begeleider',
			'BedrijfID' => 'Bedrijf',
			'Titel' => 'Titel',
			'Omschrijving' => 'Omschrijving',
			'Aantal' => 'Aantal',
			'Jaar' => 'Jaar',
			'Richting' => 'Richting',
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

		$criteria->compare('StageID',$this->StageID);
		$criteria->compare('BegeleiderID',$this->BegeleiderID);
		$criteria->compare('BedrijfID',$this->BedrijfID);
		$criteria->compare('Titel',$this->Titel,true);
		$criteria->compare('Omschrijving',$this->Omschrijving,true);
		$criteria->compare('Aantal',$this->Aantal);
		$criteria->compare('Jaar',$this->Jaar,true);
		$criteria->compare('Richting',$this->Richting,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stageplaats the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
