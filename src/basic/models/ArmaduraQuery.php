<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Armadura]].
 *
 * @see Personaje
 */
class ArmaduraQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Armadura[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Armadura|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}