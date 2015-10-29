<?php

/**
 * This is the model class for table "picture".
 *
 * The followings are the available columns in table 'picture':
 * @property integer $idpic
 * @property integer $idphoto
 * @property integer $iptran
 * @property integer $idclass
 * @property string $name
 * @property string $price
 * @property string $image
 * @property string $imagelink
 * @property integer $view
 * @property string $createdat
 *
 * The followings are the available model relations:
 * @property Photographer $idphoto0
 * @property Transaction $idpic0
 * @property Class $idclass0
 */
class Picture extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'picture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpic, idphoto, iptran, idclass, name, price, image, imagelink, view, createdat', 'required'),
			array('idpic, idphoto, iptran, idclass, view', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>55),
			array('price', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpic, idphoto, iptran, idclass, name, price, image, imagelink, view, createdat', 'safe', 'on'=>'search'),
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
			'idphoto0' => array(self::BELONGS_TO, 'Photographer', 'idphoto'),
			'idpic0' => array(self::BELONGS_TO, 'Transaction', 'idpic'),
			'idclass0' => array(self::BELONGS_TO, 'Class', 'idclass'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpic' => 'Idpic',
			'idphoto' => 'Idphoto',
			'iptran' => 'Iptran',
			'idclass' => 'Idclass',
			'name' => 'Name',
			'price' => 'Price',
			'image' => 'Image',
			'imagelink' => 'Imagelink',
			'view' => 'View',
			'createdat' => 'Createdat',
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

		$criteria->compare('idpic',$this->idpic);
		$criteria->compare('idphoto',$this->idphoto);
		$criteria->compare('iptran',$this->iptran);
		$criteria->compare('idclass',$this->idclass);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('imagelink',$this->imagelink,true);
		$criteria->compare('view',$this->view);
		$criteria->compare('createdat',$this->createdat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Picture the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
