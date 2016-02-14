<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sede".
 *
 * @property integer $id
 * @property string $nombre_sede
 * @property string $direccion
 * @property string $telefono
 * @property integer $municipio_id
 *
 * @property ControlExistencia[] $controlExistencias
 * @property Empleado[] $empleados
 * @property Municipio $municipio
 */
class Sede extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sede';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['municipio_id'], 'required'],
            [['municipio_id'], 'integer'],
            [['nombre_sede'], 'string', 'max' => 45],
            [['direccion'], 'string', 'max' => 255],
            [['telefono'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_sede' => 'Nombre Sede',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'municipio_id' => 'Municipio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getControlExistencias()
    {
        return $this->hasMany(ControlExistencia::className(), ['sede_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['sede_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::className(), ['id' => 'municipio_id']);
    }
}
