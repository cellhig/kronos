<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $identificacion
 * @property string $direccion
 * @property string $telefono
 * @property integer $municipio_id
 * @property integer $tipo_identificacion_id
 *
 * @property Cliente[] $clientes
 * @property Empleado[] $empleados
 * @property Municipio $municipio
 * @property TipoIdentificacion $tipoIdentificacion
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    { // permisos
        return [
            [['municipio_id', 'tipo_identificacion_id', 'identificacion'], 'required'],
            [['municipio_id', 'tipo_identificacion_id'], 'integer'],
            [['nombre', 'apellido'], 'string', 'length' => [3, 30]],
            ['nombre','match', 'pattern' => '/^[\*a-zA-Z” “]*$/i'],
            ['apellido', 'match', 'pattern' => '/^[\*a-zA-Z” “]*$/i'],
            [['direccion'], 'string', 'length' => [8, 255]],
            [['identificacion'], 'string', 'max' => 20],
            ['identificacion', 'unique'],
            ['identificacion','match', 'pattern'=> '/^[0-9]{6,20}$/'],
            [['telefono'], 'string', 'max' => 10],
            ['telefono', 'match', 'pattern'=> '/^[0-9]{7,10}$/'],
       
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'identificacion' => 'Identificación',
            'direccion' => 'Dirección',
            'telefono' => 'Teléfono',
            'municipio_id' => 'Municipio de Residencia',
            'tipo_identificacion_id' => 'Tipo Identificación',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['persona_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['persona_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['id' => 'municipio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoIdentificacion()
    {
        return $this->hasOne(TipoIdentificacion::className(), ['id' => 'tipo_identificacion_id']);
    }
}
