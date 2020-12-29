<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objeto".
 *
 * @property int $id
 * @property string $nombre
 * @property string $daño
 * @property string $tipo_daño
 * @property string $tipo_obj
 * @property string $categoria
 * @property string $descripcion
 * @property string $propiedades
 * @property string $valor
 * @property string $peso
 */
class objeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objeto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'daño', 'tipo_daño', 'tipo_obj', 'categoria', 'propiedades', 'valor', 'peso'], 'required'],
            [['nombre', 'propiedades', 'descripcion'], 'string', 'max' => 255],
            [['daño'], 'string', 'max' => 6],
            [['tipo_daño', 'tipo_obj', 'categoria'], 'string', 'max' => 50],
            [['valor', 'peso'], 'string', 'max' => 10],
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
            'daño' => 'Daño',
            'tipo_daño' => 'Tipo Daño',
            'tipo_obj' => 'Tipo Obj',
            'descripcion' => 'Descripcion',
            'categoria' => 'Categoria',
            'propiedades' => 'Propiedades',
            'valor' => 'Valor',
            'peso' => 'Peso',
        ];
    }
}
