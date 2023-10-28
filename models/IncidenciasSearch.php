<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Incidencias;

/**
 * IncidenciasSearch represents the model behind the search form of `app\models\Incidencias`.
 */
class IncidenciasSearch extends Incidencias
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jugadores'], 'integer'],
            [['descripcion', 'tipo_tarjeta', 'fecha_incidencia', 'fecha_suspension'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Incidencias::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha_incidencia' => $this->fecha_incidencia,
            'fecha_suspension' => $this->fecha_suspension,
            'id_jugadores' => $this->id_jugadores,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipo_tarjeta', $this->tipo_tarjeta]);

        return $dataProvider;
    }
}
