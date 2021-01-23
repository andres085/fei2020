<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personaje_arma".
 *
 * @property int $personaje_id
 * @property int $arma_id
 *
 * @property Arma $arma
 * @property Personaje $personaje
 */
class PersonajeArma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaje_arma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personaje_id', 'arma_id'], 'required'],
            [['personaje_id', 'arma_id'], 'integer'],
            [['personaje_id', 'arma_id'], 'unique', 'targetAttribute' => ['personaje_id', 'arma_id']],
            [['arma_id'], 'exist', 'skipOnError' => true, 'targetClass' => Arma::className(), 'targetAttribute' => ['arma_id' => 'id']],
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
            'arma_id' => 'Arma ID',
        ];
    }

    /**
     * Gets query for [[Arma]].
     *
     * @return \yii\db\ActiveQuery|ArmaQuery
     */
    public function getArma()
    {
        return $this->hasOne(Arma::className(), ['id' => 'arma_id']);
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
     * @return PersonajeArmaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonajeArmaQuery(get_called_class());
    }
}
