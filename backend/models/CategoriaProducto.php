<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categoria_producto".
 *
 * @property integer $id
 * @property string $codigo_categoria
 * @property string $nombre_categoria
 *
 * @property Producto[] $productos
 */
class CategoriaProducto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria_producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_categoria'], 'required'],
            [['codigo_categoria'], 'string', 'length' => [2, 15]],
            [['nombre_categoria'], 'string', 'length' => [7, 25]],
            [['codigo_categoria'], 'match', 'pattern' => '/^[\*a-zA-Z” “]{2,15}$/'],
            [['nombre_categoria'], 'match', 'pattern' => '/^[\*a-zA-Z” “]{7,25}$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo_categoria' => 'Codigo Categoria',
            'nombre_categoria' => 'Nombre Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['categoria_producto_id' => 'id']);
    }
}
