<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personaje_objeto".
 *
 * @property int $personaje_id
 * @property int $objeto_id
 *
 * @property Objeto $objeto
 * @property Personaje $personaje
 */
class PersonajeObjeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaje_objeto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personaje_id', 'objeto_id'], 'required'],
            [['personaje_id', 'objeto_id'], 'integer'],
            [['personaje_id', 'objeto_id'], 'unique', 'targetAttribute' => ['personaje_id', 'objeto_id']],
            [['objeto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Objeto::className(), 'targetAttribute' => ['objeto_id' => 'id']],
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
            'objeto_id' => 'Objeto ID',
        ];
    }

    /**
     * Gets query for [[Objeto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObjeto()
    {
        return $this->hasOne(Objeto::className(), ['id' => 'objeto_id']);
    }

    /**
     * Gets query for [[Personaje]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonaje()
    {
        return $this->hasOne(Personaje::className(), ['id' => 'personaje_id']);
    }
}
