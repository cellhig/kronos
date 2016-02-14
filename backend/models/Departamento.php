<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $id
 * @property string $nombre_departamento
 *
 * @property Municipio[] $municipios
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_departamento'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_departamento' => 'Nombre Departamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipios()
    {
        return $this->hasMany(Municipio::className(), ['departamento_id' => 'id']);
    }
}
