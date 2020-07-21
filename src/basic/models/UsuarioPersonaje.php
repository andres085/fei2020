<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario_personaje".
 *
 * @property int $usuario_id
 * @property int $personaje_id
 *
 * @property Personaje $personaje
 * @property Usuario $usuario
 */
class UsuarioPersonaje extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario_personaje';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id', 'personaje_id'], 'required'],
            [['usuario_id', 'personaje_id'], 'integer'],
            [['usuario_id', 'personaje_id'], 'unique', 'targetAttribute' => ['usuario_id', 'personaje_id']],
            [['personaje_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personaje::className(), 'targetAttribute' => ['personaje_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'personaje_id' => 'Personaje ID',
        ];
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
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery|UsuarioQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
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
