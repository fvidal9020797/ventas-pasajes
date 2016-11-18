<?php

/**
 * This is the model class for table "boleto".
 *
 * The followings are the available columns in table 'boleto':
 * @property integer $id
 * @property integer $Nro_asiento
 * @property integer $origen
 * @property integer $destino
 * @property string $hora_salida
 * @property string $hora_llegada
 * @property integer $id_admin
 * @property integer $id_cliente
 *
 * The followings are the available model relations:
 * @property Administrador $idAdmin
 * @property Cliente $idCliente
 * @property OrigenDestino $destino0
 * @property OrigenDestino $origen0
 */
class Boleto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boleto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nro_asiento, origen, destino, hora_salida, hora_llegada, id_admin, id_cliente', 'required'),
			array('Nro_asiento, origen, destino, id_admin, id_cliente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Nro_asiento, origen, destino, hora_salida, hora_llegada, id_admin, id_cliente', 'safe', 'on'=>'search'),
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
			'Administrador' => array(self::BELONGS_TO, 'Administrador', 'id_admin'),
			'Cliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'destino0' => array(self::BELONGS_TO, 'OrigenDestino', 'destino'),
			'origen0' => array(self::BELONGS_TO, 'OrigenDestino', 'origen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nro_asiento' => 'Nro Asiento',
			'origen' => 'Origen',
			'destino' => 'Destino',
			'hora_salida' => 'Hora Salida',
			'hora_llegada' => 'Hora Llegada',
			'id_admin' => 'Administrador',
			'id_cliente' => 'Cliente',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Nro_asiento',$this->Nro_asiento);
		$criteria->compare('origen',$this->origen);
		$criteria->compare('destino',$this->destino);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('hora_llegada',$this->hora_llegada,true);
		$criteria->compare('id_admin',$this->id_admin);
		$criteria->compare('id_cliente',$this->id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Boleto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
