<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $id
 * @property string $codigo_producto
 * @property string $nombre
 * @property string $descripcion
 * @property string $estado
 * @property integer $categoria_producto_id
 *
 * @property ControlExistenciaProducto[] $controlExistenciaProductos
 * @property CategoriaProducto $categoriaProducto
 * @property ProductoCatalogo[] $productoCatalogos
 * @property VentaAsistidaProducto[] $ventaAsistidaProductos
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'string'],
            [['categoria_producto_id'], 'required'],
            [['categoria_producto_id'], 'integer'],
            [['codigo_producto'], 'string', 'max' => 10],
            [['nombre'], 'string', 'max' => 50],
            [['file'], 'file'],
            [['descripcion', 'imagen'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo_producto' => 'Codigo Producto',
            'nombre' => 'Nombre',
            'file' => 'Imagen del Producto',
            'descripcion' => 'Descripcion',
            'estado' => 'Estado',
            'categoria_producto_id' => 'Categoria Producto ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getControlExistenciaProductos()
    {
        return $this->hasMany(ControlExistenciaProducto::className(), ['producto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriaProducto()
    {
        return $this->hasOne(CategoriaProducto::className(), ['id' => 'categoria_producto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoCatalogos()
    {
        return $this->hasMany(ProductoCatalogo::className(), ['producto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentaAsistidaProductos()
    {
        return $this->hasMany(VentaAsistidaProducto::className(), ['producto_id' => 'id']);
    }
}
