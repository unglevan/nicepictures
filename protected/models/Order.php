<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $idorder
 * @property integer $idtran
 * @property integer $idpic
 * @property integer $qty
 * @property integer $amount
 * @property string $data
 * @property string $status
 * @property string $createdat
 *
 * The followings are the available model relations:
 * @property Transaction $idtran0
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idorder, idtran, idpic, qty, amount, data, status, createdat', 'required'),
			array('idorder, idtran, idpic, qty, amount', 'numerical', 'integerOnly'=>true),
			array('data', 'length', 'max'=>222),
			array('status', 'length', 'max'=>22),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idorder, idtran, idpic, qty, amount, data, status, createdat', 'safe', 'on'=>'search'),
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
			'idtran0' => array(self::BELONGS_TO, 'Transaction', 'idtran'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idorder' => 'Idorder',
			'idtran' => 'Idtran',
			'idpic' => 'Idpic',
			'qty' => 'Qty',
			'amount' => 'Amount',
			'data' => 'Data',
			'status' => 'Status',
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

		$criteria->compare('idorder',$this->idorder);
		$criteria->compare('idtran',$this->idtran);
		$criteria->compare('idpic',$this->idpic);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('createdat',$this->createdat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
