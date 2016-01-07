<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $id
 * @property string $nome_funcionario
 * @property string $login
 * @property string $senha
 * @property integer $id_empresa
 *
 * The followings are the available model relations:
 * @property Empresa $idEmpresa
 */
class Funcionario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_funcionario, login, senha, id_empresa', 'required'),
			array('id_empresa', 'numerical', 'integerOnly'=>true),
			array('nome_funcionario, senha', 'length', 'max'=>100),
			array('login', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome_funcionario, login, senha, id_empresa', 'safe', 'on'=>'search'),
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
			'idEmpresa' => array(self::BELONGS_TO, 'Empresa', 'id_empresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome_funcionario' => 'Nome',
			'login' => 'Login',
			'senha' => 'Senha',
			'id_empresa' => 'Empresa',
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
		$criteria->compare('nome_funcionario',$this->nome_funcionario,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('id_empresa',$this->id_empresa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
