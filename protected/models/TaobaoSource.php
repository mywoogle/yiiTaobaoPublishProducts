<?php

/**
 * This is the model class for table "taobao_source".
 *
 * The followings are the available columns in table 'taobao_source':
 * @property integer $taobao_source_id
 * @property string $taobao_source_taobao_id
 * @property string $taobao_source_taobao_title
 * @property string $xuetongneilicaizhi
 * @property string $xuetongcaizhi
 * @property string $shangshinianfenjijie
 * @property string $fengge
 * @property string $bangmiancaizhi
 * @property string $xuemianneilicaizhi
 * @property string $pizhitezhi
 * @property string $xiedicaizhi
 * @property string $xuekuanpingming
 * @property string $tonggao
 * @property string $xietongkuanshi
 * @property string $genggao
 * @property string $xiegengkuanshi
 * @property string $bihefangshi
 * @property string $liuxingyuansu
 * @property string $zhizhuogongyi
 * @property string $tuan
 * @property string $shehejijie
 */
class TaobaoSource extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'taobao_source';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taobao_source_taobao_id, taobao_source_taobao_title, xuetongneilicaizhi, xuetongcaizhi, shangshinianfenjijie, fengge, bangmiancaizhi, xuemianneilicaizhi, pizhitezhi, xiedicaizhi, xuekuanpingming, tonggao, xietongkuanshi, genggao, xiegengkuanshi, bihefangshi, liuxingyuansu, zhizhuogongyi, tuan, shehejijie', 'required'),
			array('taobao_source_taobao_id, xuetongneilicaizhi, xuetongcaizhi, shangshinianfenjijie, fengge, bangmiancaizhi, xuemianneilicaizhi, pizhitezhi, xiedicaizhi, xuekuanpingming, tonggao, xietongkuanshi, genggao, xiegengkuanshi, bihefangshi, liuxingyuansu, zhizhuogongyi, tuan, shehejijie', 'length', 'max'=>32),
			array('taobao_source_taobao_title', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('taobao_source_id, taobao_source_taobao_id, taobao_source_taobao_title, xuetongneilicaizhi, xuetongcaizhi, shangshinianfenjijie, fengge, bangmiancaizhi, xuemianneilicaizhi, pizhitezhi, xiedicaizhi, xuekuanpingming, tonggao, xietongkuanshi, genggao, xiegengkuanshi, bihefangshi, liuxingyuansu, zhizhuogongyi, tuan, shehejijie', 'safe', 'on'=>'search'),
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
			'taobao_source_id' => 'Taobao Source',
			'taobao_source_taobao_id' => 'Taobao Source Taobao',
			'taobao_source_taobao_title' => 'Taobao Source Taobao Title',
			'xuetongneilicaizhi' => 'Xuetongneilicaizhi',
			'xuetongcaizhi' => 'Xuetongcaizhi',
			'shangshinianfenjijie' => 'Shangshinianfenjijie',
			'fengge' => 'Fengge',
			'bangmiancaizhi' => 'Bangmiancaizhi',
			'xuemianneilicaizhi' => 'Xuemianneilicaizhi',
			'pizhitezhi' => 'Pizhitezhi',
			'xiedicaizhi' => 'Xiedicaizhi',
			'xuekuanpingming' => 'Xuekuanpingming',
			'tonggao' => 'Tonggao',
			'xietongkuanshi' => 'Xietongkuanshi',
			'genggao' => 'Genggao',
			'xiegengkuanshi' => 'Xiegengkuanshi',
			'bihefangshi' => 'Bihefangshi',
			'liuxingyuansu' => 'Liuxingyuansu',
			'zhizhuogongyi' => 'Zhizhuogongyi',
			'tuan' => 'Tuan',
			'shehejijie' => 'Shehejijie',
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

		$criteria->compare('taobao_source_id',$this->taobao_source_id);
		$criteria->compare('taobao_source_taobao_id',$this->taobao_source_taobao_id,true);
		$criteria->compare('taobao_source_taobao_title',$this->taobao_source_taobao_title,true);
		$criteria->compare('xuetongneilicaizhi',$this->xuetongneilicaizhi,true);
		$criteria->compare('xuetongcaizhi',$this->xuetongcaizhi,true);
		$criteria->compare('shangshinianfenjijie',$this->shangshinianfenjijie,true);
		$criteria->compare('fengge',$this->fengge,true);
		$criteria->compare('bangmiancaizhi',$this->bangmiancaizhi,true);
		$criteria->compare('xuemianneilicaizhi',$this->xuemianneilicaizhi,true);
		$criteria->compare('pizhitezhi',$this->pizhitezhi,true);
		$criteria->compare('xiedicaizhi',$this->xiedicaizhi,true);
		$criteria->compare('xuekuanpingming',$this->xuekuanpingming,true);
		$criteria->compare('tonggao',$this->tonggao,true);
		$criteria->compare('xietongkuanshi',$this->xietongkuanshi,true);
		$criteria->compare('genggao',$this->genggao,true);
		$criteria->compare('xiegengkuanshi',$this->xiegengkuanshi,true);
		$criteria->compare('bihefangshi',$this->bihefangshi,true);
		$criteria->compare('liuxingyuansu',$this->liuxingyuansu,true);
		$criteria->compare('zhizhuogongyi',$this->zhizhuogongyi,true);
		$criteria->compare('tuan',$this->tuan,true);
		$criteria->compare('shehejijie',$this->shehejijie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TaobaoSource the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
