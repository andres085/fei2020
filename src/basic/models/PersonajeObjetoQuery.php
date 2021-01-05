<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PersonajeObjeto]].
 *
 * @see PersonajeObjeto
 */
class PersonajeObjetoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PersonajeObjeto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeObjeto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
