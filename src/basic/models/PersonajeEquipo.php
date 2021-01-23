<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personaje_equipo".
 *
 * @property int $personaje_id
 * @property int $equipo_id
 *
 * @property Equipo $equipo
 * @property Personaje $personaje
 */
class PersonajeEquipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaje_equipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personaje_id', 'equipo_id'], 'required'],
            [['personaje_id', 'equipo_id'], 'integer'],
            [['personaje_id', 'equipo_id'], 'unique', 'targetAttribute' => ['personaje_id', 'equipo_id']],
            [['equipo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equipo::className(), 'targetAttribute' => ['equipo_id' => 'id']],
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
            'equipo_id' => 'Equipo ID',
        ];
    }

    /**
     * Gets query for [[Equipo]].
     *
     * @return \yii\db\ActiveQuery|EquipoQuery
     */
    public function getEquipo()
    {
        return $this->hasOne(Equipo::className(), ['id' => 'equipo_id']);
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
     * @return PersonajeEquipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonajeEquipoQuery(get_called_class());
    }
}
