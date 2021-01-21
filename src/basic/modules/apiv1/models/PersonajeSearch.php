<?php

//namespace app\models;
namespace app\modules\apiv1\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diario;


class PersonajeSearch extends Personaje
{
    /**
     * {@inheritdoc}
     */
 
    public function fields()
    {
        return parent::fields();
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
        $query = Personaje::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params,'');

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'id_campania', $this->id_campania]);

        return $dataProvider;
    }
}
