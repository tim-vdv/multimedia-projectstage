<?php

/**
 * This is the model class for table "bedrijf".
 *
 * The followings are the available columns in table 'bedrijf':
 * @property integer $BedrijfID
 * @property string $Naam
 * @property string $Adres
 * @property string $Postcode
 * @property string $Gemeente
 * @property string $Land
 * @property integer $Tel
 * @property integer $Fax
 * @property string $Website
 * @property integer $AantalPersoneel
 * @property integer $Bereikbaarheid
 *
 * The followings are the available model relations:
 * @property Begeleider[] $begeleiders
 * @property Stageplaats[] $stageplaats
 */
class Bedrijf extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bedrijf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Naam, Adres, Postcode, Gemeente, Land', 'required'),
			array('', 'numerical', 'integerOnly'=>true),
			array('Naam, Gemeente, Land, Website', 'length', 'max'=>50),
			array('Adres', 'length', 'max'=>100),
			array('Postcode', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BedrijfID, Naam, Adres, Postcode, Gemeente, Land, Tel, Fax, Website, AantalPersoneel, Bereikbaarheid', 'safe', 'on'=>'search'),
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
			'begeleiders' => array(self::HAS_MANY, 'Begeleider', 'BedrijfID'),
			'stageplaats' => array(self::HAS_MANY, 'Stageplaats', 'BedrijfID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BedrijfID' => 'Bedrijf',
			'Naam' => 'Naam',
			'Adres' => 'Adres',
			'Postcode' => 'Postcode',
			'Gemeente' => 'Gemeente',
			'Land' => 'Land',
			'Tel' => 'Telefoon',
			'Fax' => 'Fax',
			'Website' => 'Website',
			'AantalPersoneel' => 'Aantal personeelsleden in het bedrijf',
			'Bereikbaarheid' => 'Bereikbaarheid bedrijf (Trein, Bus, Auto)',
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

		$criteria->compare('BedrijfID',$this->BedrijfID);
		$criteria->compare('Naam',$this->Naam,true);
		$criteria->compare('Adres',$this->Adres,true);
		$criteria->compare('Postcode',$this->Postcode,true);
		$criteria->compare('Gemeente',$this->Gemeente,true);
		$criteria->compare('Land',$this->Land,true);
		$criteria->compare('Tel',$this->Tel);
		$criteria->compare('Fax',$this->Fax);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('AantalPersoneel',$this->AantalPersoneel);
		$criteria->compare('Bereikbaarheid',$this->Bereikbaarheid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bedrijf the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
