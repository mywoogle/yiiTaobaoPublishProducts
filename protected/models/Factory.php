<?php

/**
 * This is the model class for table "factory".
 *
 * The followings are the available columns in table 'factory':
 * @property integer $factory_id
 * @property string $factory_name
 * @property string $product_category
 * @property integer $factory_num
 * @property integer $factory_flag
 */
class Factory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'factory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('factory_name, product_category', 'required'),
			array('factory_num, factory_flag', 'numerical', 'integerOnly'=>true),
			array('factory_name, product_category', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('factory_id, factory_name, product_category, factory_num, factory_flag', 'safe', 'on'=>'search'),
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
			'factory_id' => 'Factory',
			'factory_name' => 'Factory Name',
			'product_category' => 'Product Category',
			'factory_num' => 'Factory Num',
			'factory_flag' => 'Factory Flag',
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

		$criteria->compare('factory_id',$this->factory_id);
		$criteria->compare('factory_name',$this->factory_name,true);
		$criteria->compare('product_category',$this->product_category,true);
		$criteria->compare('factory_num',$this->factory_num);
		$criteria->compare('factory_flag',$this->factory_flag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Factory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
