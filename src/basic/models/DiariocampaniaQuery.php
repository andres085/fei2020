<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Diariocampania]].
 *
 * @see Diariocampania
 */
class DiariocampaniaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Diariocampania[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Diariocampania|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
