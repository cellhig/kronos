<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Catalogo;

/**
 * CatalogoSearch represents the model behind the search form about `backend\models\Catalogo`.
 */
class CatalogoSearch extends Catalogo
{
    /**
     * @inheritdoc
     */

    public $buscador;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre_catalogo', 'descripcion', 'fecha_inicio', 'fecha_finalizacion', 'estado', 'buscador'], 'safe'],
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
        $query = Catalogo::find();

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
            //'fecha_inicio' => $this->fecha_inicio,
            //'fecha_finalizacion' => $this->fecha_finalizacion,
        ]);*/

        /*
        ## buscador global con parametros orFilter en vez de andFilter.
        */
        $query->orFilterWhere(['like', 'id', $this->buscador])
              ->orFilterWhere(['like', 'nombre_catalogo', $this->buscador])
              ->orFilterWhere(['like', 'descripcion', $this->buscador])
              ->orFilterWhere(['like', 'estado', $this->buscador])
              ->orFilterWhere(['like', 'fecha_inicio', $this->buscador])
              ->orFilterWhere(['like', 'fecha_finalizacion', $this->buscador]);

        return $dataProvider;
    }
}
