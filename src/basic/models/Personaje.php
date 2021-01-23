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
 * @property int $fuerza
 * @property int $destreza
 * @property int $constitucion
 * @property int $inteligencia
 * @property int $sabiduria
 * @property int $carisma
 * @property int $id_trasfondo
 * @property string|null $personalidad
 * @property string|null $ideal
 * @property string|null $vinculo
 * @property string|null $defecto
 * @property string|null $dote
 * @property int|null $id_campania
 *
 * @property Diario[] $diarios
 * @property Campania $campania
 * @property Trasfondo $trasfondo
 * @property PersonajeArma[] $personajeArmas
 * @property Arma[] $armas
 * @property PersonajeArmadura[] $personajeArmaduras
 * @property Armadura[] $armaduras
 * @property PersonajeEquipo[] $personajeEquipos
 * @property Equipo[] $equipos
 * @property PersonajeObjeto[] $personajeObjetos
 * @property Objeto[] $objetos
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
            [['nombre', 'nivel', 'raza', 'clase', 'fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma', 'id_trasfondo'], 'required'],
            [['nombre', 'raza', 'clase', 'personalidad', 'ideal', 'vinculo', 'defecto', 'dote'], 'string'],
            [['fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma', 'id_trasfondo', 'id_campania'], 'integer'],
            [['nivel'], 'string', 'max' => 255],
            [['id_campania'], 'exist', 'skipOnError' => true, 'targetClass' => Campania::className(), 'targetAttribute' => ['id_campania' => 'id']],
            [['id_trasfondo'], 'exist', 'skipOnError' => true, 'targetClass' => Trasfondo::className(), 'targetAttribute' => ['id_trasfondo' => 'id']],
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
            'fuerza' => 'Fuerza',
            'destreza' => 'Destreza',
            'constitucion' => 'Constitucion',
            'inteligencia' => 'Inteligencia',
            'sabiduria' => 'Sabiduria',
            'carisma' => 'Carisma',
            'id_trasfondo' => 'Id Trasfondo',
            'personalidad' => 'Personalidad',
            'ideal' => 'Ideal',
            'vinculo' => 'Vinculo',
            'defecto' => 'Defecto',
            'dote' => 'Dote',
            'id_campania' => 'Id Campania',
        ];
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
     * Gets query for [[Campania]].
     *
     * @return \yii\db\ActiveQuery|CampaniaQuery
     */
    public function getCampania()
    {
        return $this->hasOne(Campania::className(), ['id' => 'id_campania']);
    }

    /**
     * Gets query for [[Trasfondo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrasfondo()
    {
        return $this->hasOne(Trasfondo::className(), ['id' => 'id_trasfondo']);
    }

        /**
     * Gets query for [[PersonajeArmas]].
     *
     * @return \yii\db\ActiveQuery|PersonajeArmaQuery
     */
    public function getPersonajeArmas()
    {
        return $this->hasMany(PersonajeArma::className(), ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[Armas]].
     *
     * @return \yii\db\ActiveQuery|ArmaQuery
     */
    public function getArmas()
    {
        return $this->hasMany(Arma::className(), ['id' => 'arma_id'])->viaTable('personaje_arma', ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[PersonajeArmaduras]].
     *
     * @return \yii\db\ActiveQuery|PersonajeArmaduraQuery
     */
    public function getPersonajeArmaduras()
    {
        return $this->hasMany(PersonajeArmadura::className(), ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[Armaduras]].
     *
     * @return \yii\db\ActiveQuery|ArmaduraQuery
     */
    public function getArmaduras()
    {
        return $this->hasMany(Armadura::className(), ['id' => 'armadura_id'])->viaTable('personaje_armadura', ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[PersonajeEquipos]].
     *
     * @return \yii\db\ActiveQuery|PersonajeEquipoQuery
     */
    public function getPersonajeEquipos()
    {
        return $this->hasMany(PersonajeEquipo::className(), ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[Equipos]].
     *
     * @return \yii\db\ActiveQuery|EquipoQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipo::className(), ['id' => 'equipo_id'])->viaTable('personaje_equipo', ['personaje_id' => 'id']);
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
     * Gets query for [[PersonajeObjetos]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getPersonajeObjetos()
    {
        return $this->hasMany(PersonajeObjeto::className(), ['personaje_id' => 'id']);
    }

    /**
     * Gets query for [[Objetos]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getObjetos()
    {
        return $this->hasMany(Objeto::className(), ['id' => 'objeto_id'])->viaTable('personaje_objeto', ['personaje_id' => 'id']);
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
