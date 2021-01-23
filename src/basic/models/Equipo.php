<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $categoria
 * @property string $precio
 * @property string $peso
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'categoria', 'precio', 'peso'], 'required'],
            [['nombre', 'descripcion', 'categoria', 'precio', 'peso'], 'string', 'max' => 255],
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
            'descripcion' => 'Descripcion',
            'categoria' => 'Categoria',
            'precio' => 'Precio',
            'peso' => 'Peso',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EquipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EquipoQuery(get_called_class());
    }
}
