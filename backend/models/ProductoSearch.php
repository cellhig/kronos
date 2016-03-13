<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Producto;

/**
 * ProductoSearch represents the model behind the search form about `backend\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * @inheritdoc
     */

    public $buscador;

    public function rules()
    {
        return [
            [['id', 'categoria_producto_id'], 'integer'],
            [['codigo_producto', 'nombre', 'descripcion', 'estado', 'buscador'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Producto::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        /*$query->andFilterWhere([
            'id' => $this->id,
            'categoria_producto_id' => $this->categoria_producto_id,
        ]);*/ //se implemento bucador global este filtro ya no es necesario

        $query->orFilterWhere(['like', 'codigo_producto', $this->buscador])
            ->orFilterWhere(['like', 'nombre', $this->buscador])
            ->orFilterWhere(['like', 'descripcion', $this->buscador])
            ->orFilterWhere(['like', 'estado', $this->buscador]);

        return $dataProvider;
    }
}
