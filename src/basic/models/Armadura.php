<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "armadura".
 *
 * @property int $id_armadura
 * @property string $nombre
 * @property string $categoria
 * @property int $ac
 * @property string $bonif_des
 * @property string|null $penalizacion
 * @property string|null $fuerza
 * @property string $precio
 * @property string $peso
 */
class Armadura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'armadura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'categoria', 'ac', 'bonif_des', 'precio', 'peso'], 'required'],
            [['ac'], 'integer'],
            [['nombre', 'categoria', 'bonif_des', 'penalizacion', 'fuerza', 'precio', 'peso'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_armadura' => 'Id Armadura',
            'nombre' => 'Nombre',
            'categoria' => 'Categoria',
            'ac' => 'Ac',
            'bonif_des' => 'Bonif Des',
            'penalizacion' => 'Penalizacion',
            'fuerza' => 'Fuerza',
            'precio' => 'Precio',
            'peso' => 'Peso',
        ];
    }
}
