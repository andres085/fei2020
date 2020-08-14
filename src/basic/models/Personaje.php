<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personaje".
 *
 * @property int $id
 * @property string $nombre
 * @property string $nivel
 * @property string $raza
 * @property string $clase
 * @property string|null $trasfondo
 * @property string|null $dote
 *
 * @property Atributo[] $atributos
 * @property Diario[] $diarios
 * @property UsuarioPersonaje[] $usuarioPersonajes
 * @property Usuario[] $usuarios
 */
class Personaje extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personaje';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'nivel', 'raza', 'clase'], 'required'],
            [['nombre', 'raza', 'clase', 'trasfondo', 'dote'], 'string'],
            [['nivel'], 'string', 'max' => 255],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'nivel' => 'Nivel',
            'raza' => 'Raza',
            'clase' => 'Clase',
            'trasfondo' => 'Trasfondo',
            'dote' => 'Dote',
        ];
    }

    /**
     * Gets query for [[Atributos]].
     *
     * @return \yii\db\ActiveQuery|AtributoQuery
     */
    public function getAtributos()
    {
        return $this->hasMany(Atributo::className(), ['id_personaje' => 'id']);
    }

    /**
     * Gets query for [[Diarios]].
     *
     * @return \yii\db\ActiveQuery|DiarioQuery
     */
    public function getDiarios()
    {
        return $this->hasMany(Diario::className(), ['id_personaje' => 'id']);
    }

    /**
     * Gets query for [[UsuarioPersonajes]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    public function getUsuarioPersonajes()
    {
        return $this->hasMany(UsuarioPersonaje::className(), ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery|UsuarioQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('usuario_personaje', ['personaje_id' => 'id']);
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
