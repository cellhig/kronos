<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Empleado;

/**
 * EmpleadoSearch represents the model behind the search form about `backend\models\Empleado`.
 */
class EmpleadoSearch extends Empleado
{
    /**
     * @inheritdoc
     */
    public $buscador;

    public function rules()
    {
        return [
            [['id', 'sede_id'], 'integer'],
            [['telefono_movil', 'estado', 'persona_id', 'cargo_id', 'buscador'], 'safe'],
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
        $query = Empleado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('persona');//relacion con persona
        $query->joinWith('cargo');//relacion con cargo

        /*$query->andFilterWhere([
            'id' => $this->id,
            //'persona_id' => $this->persona_id,
            //'cargo_id' => $this->cargo_id,
            'sede_id' => $this->sede_id,
        ]);*/  // a razon del bucador globla no es necesario este filro. se deshabilta 


        /*
        ## el buscador global usa parametros orFilterWhere([]) en vez de andFilterWhere({}) asi puede validar cada campo de la tabla
        */
        $query->orFilterWhere(['like', 'telefono_movil', $this->buscador])
            ->orFilterWhere(['like', 'estado', $this->buscador])
            ->orFilterWhere(['like', 'persona.nombre', $this->buscador])// filtra por el nombre
            ->orFilterWhere(['like', 'persona.apellido', $this->buscador])// filtra por el apellido
            ->orFilterWhere(['like', 'persona.direccion', $this->buscador])// filtra por el direccion 
            ->orFilterWhere(['like', 'persona.telefono', $this->buscador])// filtra por el telefono
            ->orFilterWhere(['like', 'cargo.nombre_cargo', $this->buscador])//flritar por el nobre del cargo cargo
            ;

        return $dataProvider;
    }
}
