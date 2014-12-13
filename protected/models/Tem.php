<?php

/**
 * This is the model class for table "tem".
 *
 * The followings are the available columns in table 'tem':
 * @property integer $tem_id
 * @property integer $int_1
 * @property integer $int_2
 * @property integer $int_3
 * @property integer $int_4
 * @property integer $int_5
 * @property string $varchar_1
 * @property string $varchar_2
 * @property string $varchar_3
 * @property string $varchar_4
 * @property string $varchar_5
 */
class Tem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('int_1, int_2, int_3, int_4, int_5', 'numerical', 'integerOnly'=>true),
			array('varchar_1, varchar_2, varchar_3, varchar_4, varchar_5', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tem_id, int_1, int_2, int_3, int_4, int_5, varchar_1, varchar_2, varchar_3, varchar_4, varchar_5', 'safe', 'on'=>'search'),
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
			'tem_id' => 'Tem',
			'int_1' => 'Int 1',
			'int_2' => 'Int 2',
			'int_3' => 'Int 3',
			'int_4' => 'Int 4',
			'int_5' => 'Int 5',
			'varchar_1' => 'Varchar 1',
			'varchar_2' => 'Varchar 2',
			'varchar_3' => 'Varchar 3',
			'varchar_4' => 'Varchar 4',
			'varchar_5' => 'Varchar 5',
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

		$criteria->compare('tem_id',$this->tem_id);
		$criteria->compare('int_1',$this->int_1);
		$criteria->compare('int_2',$this->int_2);
		$criteria->compare('int_3',$this->int_3);
		$criteria->compare('int_4',$this->int_4);
		$criteria->compare('int_5',$this->int_5);
		$criteria->compare('varchar_1',$this->varchar_1,true);
		$criteria->compare('varchar_2',$this->varchar_2,true);
		$criteria->compare('varchar_3',$this->varchar_3,true);
		$criteria->compare('varchar_4',$this->varchar_4,true);
		$criteria->compare('varchar_5',$this->varchar_5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
