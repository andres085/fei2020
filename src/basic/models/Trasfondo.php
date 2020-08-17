<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trasfondo".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $nombre_rasgo
 * @property string $rasgo
 * @property string|null $nombre_especialidad
 * @property string|null $especialidad
 * @property string $comp_habilidades1
 * @property string $comp_habilidades2
 * @property string|null $comp_equipo1
 * @property string|null $comp_equipo2
 *
 * @property Personaje[] $personajes
 */
class Trasfondo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trasfondo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'required'],
            [['nombre', 'descripcion', 'rasgo', 'comp_habilidades1', 'comp_habilidades2'], 'string'],
            [['nombre_rasgo', 'nombre_especialidad', 'especialidad', 'comp_equipo1', 'comp_equipo2'], 'string', 'max' => 255],
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
            'nombre_rasgo' => 'Nombre Rasgo',
            'rasgo' => 'Rasgo',
            'nombre_especialidad' => 'Nombre Especialidad',
            'especialidad' => 'Especialidad',
            'comp_habilidades1' => 'Comp Habilidades1',
            'comp_habilidades2' => 'Comp Habilidades2',
            'comp_equipo1' => 'Comp Equipo1',
            'comp_equipo2' => 'Comp Equipo2',
        ];
    }

    /**
     * Gets query for [[Personajes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonajes()
    {
        return $this->hasMany(Personaje::className(), ['id_trasfondo' => 'id']);
    }
}
