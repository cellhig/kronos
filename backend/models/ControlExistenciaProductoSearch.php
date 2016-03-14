<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ControlExistenciaProducto;
use backend\models\Sede;
use yii\helpers\ArrayHelper;

/**
 * ControlExistenciaProductoSearch represents the model behind the search form about `backend\models\ControlExistenciaProducto`.
 */
class ControlExistenciaProductoSearch extends ControlExistenciaProducto
{
    /**
     * @inheritdoc
     */

    public $buscador;

    public function rules()
    {
        return [
            [['id', 'cantidad'], 'integer'],
            [['buscador', 'control_existencia_id', 'producto_id'], 'safe'],
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

        $query->joinWith('controlExistencia'); //relacion con control existencia
        $query->joinWith('producto'); // relacion con producto
       
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        /*$query->andFilterWhere([
            'id' => $this->id,
            'cantidad' => $this->cantidad,
            'control_existencia_id' => $this->control_existencia_id,
            'producto_id' => $this->producto_id,
        ]);*/ //al implementar un buscador global no requiero este filtro lo deshabilito

      /*  
      ## el buscador global usa parametros orFilterWhere([]) en vez de andFilterWhere({}) asi puede validar cada campo de la tabla
      */  
        $query->orFilterWhere(['like','control_existencia.sede_id', $this->buscador])
            ->orFilterWhere(['like', 'control_existencia.fecha', $this->buscador])// filtra por el fechas
            ->orFilterWhere(['like', 'control_existencia.observaciones', $this->buscador])// filtra por el observaciones o comentarios
            ->orFilterWhere(['like', 'producto.nombre', $this->buscador])// filtra por epor producto
            ->orFilterWhere(['like', 'cantidad', $this->buscador])//buscapor cantidad
            ;

        return $dataProvider;
    }
}
