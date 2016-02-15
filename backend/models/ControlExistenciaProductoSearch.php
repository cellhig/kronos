<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ControlExistenciaProducto;

/**
 * ControlExistenciaProductoSearch represents the model behind the search form about `backend\models\ControlExistenciaProducto`.
 */
class ControlExistenciaProductoSearch extends ControlExistenciaProducto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cantidad', 'control_existencia_id', 'producto_id'], 'integer'],
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
        $query = ControlExistenciaProducto::find();

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
            'cantidad' => $this->cantidad,
            'control_existencia_id' => $this->control_existencia_id,
            'producto_id' => $this->producto_id,
        ]);

        return $dataProvider;
    }
}
