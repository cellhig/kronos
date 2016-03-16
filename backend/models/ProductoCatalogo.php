<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "producto_catalogo".
 *
 * @property integer $id
 * @property integer $producto_id
 * @property integer $catalogo_id
 *
 * @property Catalogo $catalogo
 * @property Producto $producto
 */
class ProductoCatalogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto_catalogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producto_id', 'catalogo_id'], 'required'],
            [['producto_id', 'catalogo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'producto_id' => 'Producto',
            'catalogo_id' => 'Catalogo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogo()
    {
        return $this->hasOne(Catalogo::className(), ['id' => 'catalogo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id' => 'producto_id']);
    }
}
