<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atributo".
 *
 * @property int $id
 * @property int $id_personaje
 * @property int $fuerza
 * @property int $destreza
 * @property int $constitucion
 * @property int $inteligencia
 * @property int $sabiduria
 * @property int $carisma
 *
 * @property Personaje $personaje
 */
class Atributo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atributo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personaje', 'fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma'], 'required'],
            [['id_personaje', 'fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma'], 'integer'],
            [['id_personaje'], 'exist', 'skipOnError' => true, 'targetClass' => Personaje::className(), 'targetAttribute' => ['id_personaje' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_personaje' => 'Id Personaje',
            'fuerza' => 'Fuerza',
            'destreza' => 'Destreza',
            'constitucion' => 'Constitucion',
            'inteligencia' => 'Inteligencia',
            'sabiduria' => 'Sabiduria',
            'carisma' => 'Carisma',
        ];
    }

    /**
     * Gets query for [[Personaje]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    public function getPersonaje()
    {
        return $this->hasOne(Personaje::className(), ['id' => 'id_personaje']);
    }

    /**
     * {@inheritdoc}
     * @return PersonajeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonajeQuery(get_called_class());
    }
}
