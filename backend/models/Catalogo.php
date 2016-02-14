<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "catalogo".
 *
 * @property integer $id
 * @property string $nombre_catalogo
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_finalizacion
 * @property string $estado
 *
 * @property ProductoCatalogo[] $productoCatalogos
 */
class Catalogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catalogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_catalogo'], 'required'],
            [['fecha_inicio', 'fecha_finalizacion'], 'safe'],
            [['estado'], 'string'],
            [['nombre_catalogo'], 'string', 'max' => 45],
            [['descripcion'], 'string', 'max' => 140]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_catalogo' => 'Nombre Catalogo',
            'descripcion' => 'Descripcion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_finalizacion' => 'Fecha Finalizacion',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoCatalogos()
    {
        return $this->hasMany(ProductoCatalogo::className(), ['catalogo_id' => 'id']);
    }
}
