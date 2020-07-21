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
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['username', 'email', 'password'], 'required'],
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

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['accessToken' => $token]);
    }

    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey(): string
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey): bool
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

    public function getUsuarioPersonajes()
    {
        return $this->hasMany(UsuarioPersonaje::className(), ['usuario_id' => 'id']);
    }

    /**
     * Gets query for [[Personajes]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    public function getPersonajes()
    {
        return $this->hasMany(Personaje::className(), ['id' => 'personaje_id'])->viaTable('usuario_personaje', ['usuario_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
