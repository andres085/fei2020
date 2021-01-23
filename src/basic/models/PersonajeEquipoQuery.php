<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PersonajeEquipo]].
 *
 * @see PersonajeEquipo
 */
class PersonajeEquipoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PersonajeEquipo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeEquipo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
