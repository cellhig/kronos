<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `backend\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */

    public $buscador;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['correo_electronico', 'estado', 'persona_id', 'buscador'], 'safe'],
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
        $query = Cliente::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('persona');//relacion con persona.

        /*$query->andFilterWhere([
            'id' => $this->id,
            'persona_id' => $this->persona_id,
        ]);*/ // a razon del bucador globla no es necesario este filro. se deshabilta 

        /*
        ## el buscador global usa parametros orFilterWhere([]) en vez de andFilterWhere({}) asi puede validar cada campo de la tabla
        */
        $query->orFilterWhere(['like', 'correo_electronico', $this->buscador])
            ->orFilterWhere(['like', 'persona.nombre', $this->buscador])
            ->orFilterWhere(['like', 'persona.apellido', $this->buscador])
            ->orFilterWhere(['like', 'persona.direccion', $this->buscador])
            ->orFilterWhere(['like', 'persona.telefono', $this->buscador])
            ->orFilterWhere(['like', 'persona.municipio_id', $this->buscador]);

        return $dataProvider;
    }
}
