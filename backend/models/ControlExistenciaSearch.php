<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ControlExistencia;

/**
 * ControlExistenciaSearch represents the model behind the search form about `backend\models\ControlExistencia`.
 */
class ControlExistenciaSearch extends ControlExistencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['observaciones', 'fecha', 'sede_id'], 'safe'],//modificacion de campo sede_id de integer a safe, permitirá la busqueda de por string
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
        $query = ControlExistencia::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('sede');// defino la variable con la función y le paso la relación con la tabla sede

        $query->andFilterWhere([
            'id' => $this->id,
            'fecha' => $this->fecha,
            //'sede_id' => $this->sede_id,
        ]);

        $query->andFilterWhere(['like', 'observaciones', $this->observaciones])
                ->andFilterWhere(['like', 'sede.nombre_sede', $this->sede_id,]);//este parametro me permite buscar por nombre.

        return $dataProvider;
    }
}
