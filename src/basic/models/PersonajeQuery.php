<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Personaje]].
 *
 * @see Personaje
 */
class PersonajeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Personaje[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Personaje|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
