<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $username
 * @property string|null $email
 * @property string|null $password
 * @property string|null $authKey
 * @property string|null $accessToken
 *
 * @property UsuarioPersonaje[] $usuarioPersonajes
 * @property Personaje[] $personajes
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username', 'email'], 'string'],
            [['password', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * Gets query for [[UsuarioPersonajes]].
     *
     * @return \yii\db\ActiveQuery|UsuarioPersonajeQuery
     */
    /*public function getUsuarioPersonajes()
    {
        return $this->hasMany(UsuarioPersonaje::className(), ['usuario_id' => 'id']);
    }*/

    /**
     * Gets query for [[Personajes]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    /*public function getPersonajes()
    {
        return $this->hasMany(Personaje::className(), ['id' => 'personaje_id'])->viaTable('usuario_personaje', ['usuario_id' => 'id']);
    }*/

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
