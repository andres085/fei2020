<?php

//namespace app\models;
namespace app\modules\apiv1\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diario;


class DiarioSearch extends Diario
{
    /**
     * {@inheritdoc}
     */
 
    public function fields()
    {
        return parent::fields();
    }

    public function afterFind()
    {
        parent::afterFind();

        $this->fecha_hora = Yii::$app->formatter->asDatetime($this->fecha_hora, 'dd/MM/yyyy - HH:mm');
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
        $query = Diario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params,'');

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'id_personaje', $this->id_personaje])
            ->andFilterWhere(['like', 'fecha_hora', $this->fecha_hora])
            ->andFilterWhere(['like', 'info', $this->info]);

        return $dataProvider;
    }
}
