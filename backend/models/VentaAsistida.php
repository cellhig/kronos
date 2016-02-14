<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "venta_asistida".
 *
 * @property integer $id
 * @property string $fecha_solicitud
 * @property integer $estado_venta_asistida_id
 * @property integer $cliente_id
 *
 * @property Cliente $cliente
 * @property EstadoVentaAsistida $estadoVentaAsistida
 * @property VentaAsistidaProducto[] $ventaAsistidaProductos
 */
class VentaAsistida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venta_asistida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_solicitud', 'estado_venta_asistida_id', 'cliente_id'], 'required'],
            [['fecha_solicitud'], 'safe'],
            [['estado_venta_asistida_id', 'cliente_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_solicitud' => 'Fecha Solicitud',
            'estado_venta_asistida_id' => 'Estado Venta Asistida ID',
            'cliente_id' => 'Cliente ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'cliente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoVentaAsistida()
    {
        return $this->hasOne(EstadoVentaAsistida::className(), ['id' => 'estado_venta_asistida_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaAsistidaProductos()
    {
        return $this->hasMany(VentaAsistidaProducto::className(), ['venta_asistida_id' => 'id']);
    }
}
