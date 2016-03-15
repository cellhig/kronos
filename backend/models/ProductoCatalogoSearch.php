<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProductoCatalogo;

/**
 * ProductoCatalogoSearch represents the model behind the search form about `backend\models\ProductoCatalogo`.
 */
class ProductoCatalogoSearch extends ProductoCatalogo
{
    /**
     * @inheritdoc
     */

    public $buscador;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['producto_id', 'catalogo_id', 'buscador'], 'safe'],
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
        $query = ProductoCatalogo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('catalogo'); //relación con catalogo
        $query->joinWith('producto'); //relacion con producto

        $query->andFilterWhere([
            'id' => $this->id,
            //'producto_id' => $this->producto_id,
            //'catalogo_id' => $this->catalogo_id,
        ]);

        /*
        ## el buscador global usa parametros orFilterWhere([]) en vez de andFilterWhere({}) asi puede validar cada campo de la tabla
        */
        $query->orFilterWhere(['like', 'catalogo.nombre_catalogo', $this->buscador])
            ->orFilterWhere(['like', 'catalogo.fecha_inicio', $this->buscador])
            ->orFilterWhere(['like', 'catalogo.fecha_finalizacion', $this->buscador])
            ->orFilterWhere(['like', 'producto.nombre', $this->buscador]);

        return $dataProvider;
    }
}
