<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property int $id_equipo
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
            [['descripcion'], 'string'],
            [['nombre', 'categoria', 'precio', 'peso'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_equipo' => 'Id Equipo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'categoria' => 'Categoria',
            'precio' => 'Precio',
            'peso' => 'Peso',
        ];
    }
}
