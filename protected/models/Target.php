<?php

/**
 * This is the model class for table "target".
 *
 * The followings are the available columns in table 'target':
 * @property integer $target_id
 * @property string $target_taobao_id
 * @property string $target_taobao_attrs
 * @property string $target_taobao_title1
 * @property string $target_taobao_title2
 * @property string $target_taobao_title3
 * @property string $target_taobao_sku
 * @property string $target_go2_sku
 * @property integer $target_title_search
 * @property integer $target_title_used
 * @property string $source_taobao_id1
 * @property string $source_taobao_id2
 * @property string $source_taobao_id3
 * @property string $source_taobao_keyword1
 * @property string $source_taobao_keyword2
 * @property string $source_taobao_keyword3
 */
class Target extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'target';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('target_taobao_id, target_taobao_attrs, target_taobao_title1, target_taobao_title2, target_taobao_title3, target_taobao_sku, target_go2_sku, target_title_search, target_title_used, source_taobao_id1, source_taobao_id2, source_taobao_id3, source_taobao_keyword1, source_taobao_keyword2, source_taobao_keyword3', 'required'),
			array('target_title_search, target_title_used', 'numerical', 'integerOnly'=>true),
			array('target_taobao_id, target_taobao_sku, target_go2_sku, source_taobao_id1, source_taobao_id2, source_taobao_id3, source_taobao_keyword1, source_taobao_keyword2, source_taobao_keyword3', 'length', 'max'=>32),
			array('target_taobao_attrs', 'length', 'max'=>256),
			array('target_taobao_title1, target_taobao_title2, target_taobao_title3', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('target_id, target_taobao_id, target_taobao_attrs, target_taobao_title1, target_taobao_title2, target_taobao_title3, target_taobao_sku, target_go2_sku, target_title_search, target_title_used, source_taobao_id1, source_taobao_id2, source_taobao_id3, source_taobao_keyword1, source_taobao_keyword2, source_taobao_keyword3', 'safe', 'on'=>'search'),
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
			'target_id' => 'Target',
			'target_taobao_id' => 'Target Taobao',
			'target_taobao_attrs' => 'Target Taobao Attrs',
			'target_taobao_title1' => 'Target Taobao Title1',
			'target_taobao_title2' => 'Target Taobao Title2',
			'target_taobao_title3' => 'Target Taobao Title3',
			'target_taobao_sku' => 'Target Taobao Sku',
			'target_go2_sku' => 'Target Go2 Sku',
			'target_title_search' => 'Target Title Search',
			'target_title_used' => 'Target Title Used',
			'source_taobao_id1' => 'Source Taobao Id1',
			'source_taobao_id2' => 'Source Taobao Id2',
			'source_taobao_id3' => 'Source Taobao Id3',
			'source_taobao_keyword1' => 'Source Taobao Keyword1',
			'source_taobao_keyword2' => 'Source Taobao Keyword2',
			'source_taobao_keyword3' => 'Source Taobao Keyword3',
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

		$criteria->compare('target_id',$this->target_id);
		$criteria->compare('target_taobao_id',$this->target_taobao_id,true);
		$criteria->compare('target_taobao_attrs',$this->target_taobao_attrs,true);
		$criteria->compare('target_taobao_title1',$this->target_taobao_title1,true);
		$criteria->compare('target_taobao_title2',$this->target_taobao_title2,true);
		$criteria->compare('target_taobao_title3',$this->target_taobao_title3,true);
		$criteria->compare('target_taobao_sku',$this->target_taobao_sku,true);
		$criteria->compare('target_go2_sku',$this->target_go2_sku,true);
		$criteria->compare('target_title_search',$this->target_title_search);
		$criteria->compare('target_title_used',$this->target_title_used);
		$criteria->compare('source_taobao_id1',$this->source_taobao_id1,true);
		$criteria->compare('source_taobao_id2',$this->source_taobao_id2,true);
		$criteria->compare('source_taobao_id3',$this->source_taobao_id3,true);
		$criteria->compare('source_taobao_keyword1',$this->source_taobao_keyword1,true);
		$criteria->compare('source_taobao_keyword2',$this->source_taobao_keyword2,true);
		$criteria->compare('source_taobao_keyword3',$this->source_taobao_keyword3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Target the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
