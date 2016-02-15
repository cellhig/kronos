<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VentaAsistida;

/**
 * VentaAsistidaSearch represents the model behind the search form about `backend\models\VentaAsistida`.
 */
class VentaAsistidaSearch extends VentaAsistida
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado_venta_asistida_id', 'cliente_id'], 'integer'],
            [['fecha_solicitud'], 'safe'],
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
        $query = VentaAsistida::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'fecha_solicitud' => $this->fecha_solicitud,
            'estado_venta_asistida_id' => $this->estado_venta_asistida_id,
            'cliente_id' => $this->cliente_id,
        ]);

        return $dataProvider;
    }
}
