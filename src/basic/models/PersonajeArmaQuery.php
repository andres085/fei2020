<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PersonajeArma]].
 *
 * @see PersonajeArma
 */
class PersonajeArmaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PersonajeArma[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeArma|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
