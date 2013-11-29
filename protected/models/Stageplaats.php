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
 * @property string $Periode
 * @property integer $Vrijeplaatsen
 * @property string $Goedgekeurd
 * @property string $Hardware
 * @property string $Beheerssysteem
 * @property string $DBMS
 * @property string $Programmeertaal
 * @property string $Casetool
 * @property string $Ontwikkelingstool
 * @property string $MethodiekAnalyse
 * @property string $MethodiekProgLogica
 * @property string $ConfHardware
 * @property string $Netwerkprotocols
 * @property string $GebruikteGL
 * @property string $OplOnderwerp
 * @property string $OplWanneer
 * @property string $oplHoeLang
 *
 * The followings are the available model relations:
 * @property Stageaanvraag[] $stageaanvraags
 * @property Begeleider $begeleider
 * @property Bedrijf $bedrijf
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
			array('BegeleiderID, BedrijfID, Titel, Omschrijving, Aantal, Jaar, Richting, Periode, Vrijeplaatsen, Goedgekeurd', 'required'),
			array('BegeleiderID, BedrijfID, Aantal, Vrijeplaatsen', 'numerical', 'integerOnly'=>true),
			array('Titel, Richting, Hardware, Beheerssysteem, DBMS, Programmeertaal, Casetool, Ontwikkelingstool, MethodiekAnalyse, MethodiekProgLogica, ConfHardware, Netwerkprotocols, GebruikteGL, OplOnderwerp, OplWanneer, oplHoeLang', 'length', 'max'=>50),
			array('Omschrijving', 'length', 'max'=>100),
			array('Jaar', 'length', 'max'=>15),
			array('Periode', 'length', 'max'=>20),
			array('Goedgekeurd', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('StageID, BegeleiderID, BedrijfID, Titel, Omschrijving, Aantal, Jaar, Richting, Periode, Vrijeplaatsen, Goedgekeurd, Hardware, Beheerssysteem, DBMS, Programmeertaal, Casetool, Ontwikkelingstool, MethodiekAnalyse, MethodiekProgLogica, ConfHardware, Netwerkprotocols, GebruikteGL, OplOnderwerp, OplWanneer, oplHoeLang', 'safe', 'on'=>'search'),
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
			'stageaanvraags' => array(self::HAS_MANY, 'Stageaanvraag', 'StageID'),
			'begeleider' => array(self::BELONGS_TO, 'Begeleider', 'BegeleiderID'),
			'bedrijf' => array(self::BELONGS_TO, 'Bedrijf', 'BedrijfID'),
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
			'Omschrijving' => 'Omschrijving project of soort toepassing',
			'Aantal' => 'Aantal studenten',
			'Jaar' => 'Academiejaar',
			'Richting' => 'Speciallisatie richting',
			'Periode' => 'Stageperiode',
			'Vrijeplaatsen' => 'Aantal vrijeplaatsen',
			'Goedgekeurd' => 'Goedgekeurd',
			'Hardware' => 'Hardware',
			'Beheerssysteem' => 'Beheerssysteem',
			'DBMS' => 'DBMS',
			'Programmeertaal' => 'Programmeertaal',
			'Casetool' => 'Casetool',
			'Ontwikkelingstool' => 'Ontwikkelingstool',
			'MethodiekAnalyse' => 'Methodiek voor de analyse',
			'MethodiekProgLogica' => 'Methodiek voor de programmeerlogica',
			'ConfHardware' => 'Configuratie hardware',
			'Netwerkprotocols' => 'Type netwerkprotocols (netware, lanmanager, TCP/IP, Banyan)',
			'GebruikteGL' => 'Gebruikte 3GL & 4GL’s',
			'OplOnderwerp' => 'Onderwerp',
			'OplWanneer' => 'Wanneer',
			'oplHoeLang' => 'Hoe lang',
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
		$criteria->compare('Periode',$this->Periode,true);
		$criteria->compare('Vrijeplaatsen',$this->Vrijeplaatsen);
		$criteria->compare('Goedgekeurd',$this->Goedgekeurd,true);
		$criteria->compare('Hardware',$this->Hardware,true);
		$criteria->compare('Beheerssysteem',$this->Beheerssysteem,true);
		$criteria->compare('DBMS',$this->DBMS,true);
		$criteria->compare('Programmeertaal',$this->Programmeertaal,true);
		$criteria->compare('Casetool',$this->Casetool,true);
		$criteria->compare('Ontwikkelingstool',$this->Ontwikkelingstool,true);
		$criteria->compare('MethodiekAnalyse',$this->MethodiekAnalyse,true);
		$criteria->compare('MethodiekProgLogica',$this->MethodiekProgLogica,true);
		$criteria->compare('ConfHardware',$this->ConfHardware,true);
		$criteria->compare('Netwerkprotocols',$this->Netwerkprotocols,true);
		$criteria->compare('GebruikteGL',$this->GebruikteGL,true);
		$criteria->compare('OplOnderwerp',$this->OplOnderwerp,true);
		$criteria->compare('OplWanneer',$this->OplWanneer,true);
		$criteria->compare('oplHoeLang',$this->oplHoeLang,true);

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
