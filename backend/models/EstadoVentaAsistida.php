<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estado_venta_asistida".
 *
 * @property integer $id
 * @property string $nombre_estado_venta_asistida
 *
 * @property VentaAsistida[] $ventaAsistidas
 */
class EstadoVentaAsistida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_venta_asistida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_estado_venta_asistida'], 'required'],
            [['nombre_estado_venta_asistida'], 'string', 'max' => 25],
            ['nombre_estado_venta_asistida', 'match', 'pattern' => '/^[\*a-zA-Z” “]*$/i'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_estado_venta_asistida' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaAsistidas()
    {
        return $this->hasMany(VentaAsistida::className(), ['estado_venta_asistida_id' => 'id']);
    }
}
