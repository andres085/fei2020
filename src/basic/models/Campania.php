<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campania".
 *
 * @property int $id
 * @property int $id_usuario
 * @property string|null $nombre
 * @property string|null $detalles
 *
 * @property Usuario $usuario
 * @property Diario[] $diarios
 */
class Campania extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campania';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_usuario', 'nombre', 'detalles'], 'required', 'message' => 'Campo requerido'],
            [['id_usuario'], 'integer'],
            [['nombre', 'detalles'], 'string'],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['id_usuario' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_usuario' => 'Id Usuario',
            'nombre' => 'Nombre',
            'detalles' => 'Detalles',
        ];
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery|UsuarioQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'id_usuario']);
    }

    /**
     * Gets query for [[Diarios]].
     *
     * @return \yii\db\ActiveQuery|DiarioQuery
     */
    public function getDiarios()
    {
        return $this->hasMany(Diario::className(), ['id_campania' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CampaniaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampaniaQuery(get_called_class());
    }
}
