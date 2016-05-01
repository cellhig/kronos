<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cargo".
 *
 * @property integer $id
 * @property string $nombre_cargo
 *
 * @property Empleado[] $empleados
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cargo'], 'string', 'length' => [5, 30]],
            [['nombre_cargo'], 'match', 'pattern' => '/^[\*a-zA-Z” “]{5,30}$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_cargo' => 'Nombre Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['cargo_id' => 'id']);
    }
}
