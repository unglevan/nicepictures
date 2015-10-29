<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $idtran
 * @property integer $iduser
 * @property integer $idpic
 * @property integer $status
 * @property integer $name
 * @property integer $amount
 * @property string $payment
 * @property string $createdat
 *
 * The followings are the available model relations:
 * @property Order[] $orders
 * @property Picture $picture
 * @property User $iduser0
 */
class Transaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idtran, iduser, idpic, status, name, amount, payment, createdat', 'required'),
			array('idtran, iduser, idpic, status, name, amount', 'numerical', 'integerOnly'=>true),
			array('payment', 'length', 'max'=>44),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idtran, iduser, idpic, status, name, amount, payment, createdat', 'safe', 'on'=>'search'),
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
			'orders' => array(self::HAS_MANY, 'Order', 'idtran'),
			'picture' => array(self::HAS_ONE, 'Picture', 'idpic'),
			'iduser0' => array(self::BELONGS_TO, 'User', 'iduser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtran' => 'Idtran',
			'iduser' => 'Iduser',
			'idpic' => 'Idpic',
			'status' => 'Status',
			'name' => 'Name',
			'amount' => 'Amount',
			'payment' => 'Payment',
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

		$criteria->compare('idtran',$this->idtran);
		$criteria->compare('iduser',$this->iduser);
		$criteria->compare('idpic',$this->idpic);
		$criteria->compare('status',$this->status);
		$criteria->compare('name',$this->name);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('payment',$this->payment,true);
		$criteria->compare('createdat',$this->createdat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
