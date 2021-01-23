<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personaje_armadura".
 *
 * @property int $personaje_id
 * @property int $armadura_id
 *
 * @property Armadura $armadura
 * @property Personaje $personaje
 */
class PersonajeArmadura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaje_armadura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personaje_id', 'armadura_id'], 'required'],
            [['personaje_id', 'armadura_id'], 'integer'],
            [['personaje_id', 'armadura_id'], 'unique', 'targetAttribute' => ['personaje_id', 'armadura_id']],
            [['armadura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Armadura::className(), 'targetAttribute' => ['armadura_id' => 'id']],
            [['personaje_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personaje::className(), 'targetAttribute' => ['personaje_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'personaje_id' => 'Personaje ID',
            'armadura_id' => 'Armadura ID',
        ];
    }

    /**
     * Gets query for [[Armadura]].
     *
     * @return \yii\db\ActiveQuery|ArmaduraQuery
     */
    public function getArmadura()
    {
        return $this->hasOne(Armadura::className(), ['id' => 'armadura_id']);
    }

    /**
     * Gets query for [[Personaje]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    public function getPersonaje()
    {
        return $this->hasOne(Personaje::className(), ['id' => 'personaje_id']);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeArmaduraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonajeArmaduraQuery(get_called_class());
    }
}
