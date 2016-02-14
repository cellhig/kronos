<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $id
 * @property string $correo_electronico
 * @property string $estado
 * @property integer $persona_id
 *
 * @property Persona $persona
 * @property VentaAsistida[] $ventaAsistidas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correo_electronico', 'persona_id'], 'required'],
            [['estado'], 'string'],
            [['persona_id'], 'integer'],
            [['correo_electronico'], 'string', 'max' => 255],
            [['correo_electronico'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'correo_electronico' => 'Correo Electronico',
            'estado' => 'Estado',
            'persona_id' => 'Persona ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona()
    {
        return $this->hasOne(Persona::className(), ['id' => 'persona_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaAsistidas()
    {
        return $this->hasMany(VentaAsistida::className(), ['cliente_id' => 'id']);
    }
}
