<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PersonajeArmadura]].
 *
 * @see PersonajeArmadura
 */
class PersonajeArmaduraQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PersonajeArmadura[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeArmadura|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
