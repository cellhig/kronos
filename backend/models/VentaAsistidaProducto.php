<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "venta_asistida_producto".
 *
 * @property integer $id
 * @property string $observaciones
 * @property integer $cantidad_producto
 * @property integer $venta_asistida_id
 * @property integer $producto_id
 *
 * @property Producto $producto
 * @property VentaAsistida $ventaAsistida
 */
class VentaAsistidaProducto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venta_asistida_producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cantidad_producto', 'venta_asistida_id', 'producto_id'], 'required'],
            [['cantidad_producto', 'venta_asistida_id', 'producto_id'], 'integer'],
            [['observaciones'], 'string', 'max' => 140]
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
            'cantidad_producto' => 'Cantidad Producto',
            'venta_asistida_id' => 'Venta Asistida ID',
            'producto_id' => 'Producto ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id' => 'producto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaAsistida()
    {
        return $this->hasOne(VentaAsistida::className(), ['id' => 'venta_asistida_id']);
    }
}
