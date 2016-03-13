<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "control_existencia".
 *
 * @property integer $id
 * @property string $observaciones
 * @property string $fecha
 * @property integer $sede_id
 *
 * @property Sede $sede
 * @property ControlExistenciaProducto[] $controlExistenciaProductos
 */
class ControlExistencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'control_existencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'sede_id'], 'required'],
            [['fecha'], 'safe'],
            [['sede_id'], 'integer'],
            [['observaciones'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'observaciones' => 'Observaciones',
            'fecha' => 'Fecha',
            'sede_id' => 'Sede',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSede()
    {
        return $this->hasOne(Sede::className(), ['id' => 'sede_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getControlExistenciaProductos()
    {
        return $this->hasMany(ControlExistenciaProducto::className(), ['control_existencia_id' => 'id']);
    }
}
