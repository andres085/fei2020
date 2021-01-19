<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arma".
 *
 * @property int $id_arma
 * @property string $nombre
 * @property string $categoria
 * @property string $daño
 * @property string $tipo_daño
 * @property string $mod_daño
 * @property string $mod_ataque
 * @property string|null $alcance
 * @property string|null $prop1
 * @property string|null $prop2
 * @property string|null $prop3
 * @property string|null $prop4
 * @property string $precio
 * @property string $peso
 */
class Arma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'categoria', 'daño', 'tipo_daño', 'mod_daño', 'mod_ataque', 'precio', 'peso'], 'required'],
            [['nombre', 'categoria', 'daño', 'tipo_daño', 'mod_daño', 'mod_ataque', 'alcance', 'prop1', 'prop2', 'prop3', 'prop4', 'precio', 'peso'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_arma' => 'Id Arma',
            'nombre' => 'Nombre',
            'categoria' => 'Categoria',
            'daño' => 'Daño',
            'tipo_daño' => 'Tipo Daño',
            'mod_daño' => 'Mod Daño',
            'mod_ataque' => 'Mod Ataque',
            'alcance' => 'Alcance',
            'prop1' => 'Prop1',
            'prop2' => 'Prop2',
            'prop3' => 'Prop3',
            'prop4' => 'Prop4',
            'precio' => 'Precio',
            'peso' => 'Peso',
        ];
    }
}
