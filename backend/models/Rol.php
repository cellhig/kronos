<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "rol".
 *
 * @property integer $id
 * @property string $rol_nombre
 * @property integer $rol_valor
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol_nombre', 'rol_valor'], 'required'],
            [['rol_valor'], 'integer'],
            [['rol_nombre'], 'string', 'max' => 45],
            [['rol_nombre'],'match', 'pattern' => '/^[\*a-zA-Z” “]*$/i'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_nombre' => 'Rol Nombre',
            'rol_valor' => 'Rol Valor',
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['rol_id' => 'id']);
    }

}
