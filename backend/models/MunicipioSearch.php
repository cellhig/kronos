<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Municipio;

/**
 * MunicipioSearch represents the model behind the search form about `backend\models\Municipio`.
 */
class MunicipioSearch extends Municipio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'departamento_id'], 'integer'],
            [['nombre_municipio'], 'safe'],
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
        $query = Municipio::find();

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
            'departamento_id' => $this->departamento_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_municipio', $this->nombre_municipio]);

        return $dataProvider;
    }
}
