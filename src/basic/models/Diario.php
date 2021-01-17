<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diario".
 *
 * @property int $id
 * @property int $id_personaje
 * @property string|null $fecha_hora
 * @property string|null $info
 *
 * @property Personaje $personaje
 */
class Diario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personaje'], 'required'],
            [['id_personaje', 'id_campania'], 'integer'],
            [['fecha_hora'], 'safe'],
            [['info'], 'string'],
            [['id_campania'], 'exist', 'skipOnError' => true, 'targetClass' => Campania::className(), 'targetAttribute' => ['id_campania' => 'id']],
            [['id_personaje'], 'exist', 'skipOnError' => true, 'targetClass' => Personaje::className(), 'targetAttribute' => ['id_personaje' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_personaje' => 'Id Personaje',
            'id_campania' => 'Id Campania',
            'fecha_hora' => 'Fecha Hora',
            'info' => 'Info',
        ];
    }

    /**
     * Gets query for [[Personaje]].
     *
     * @return \yii\db\ActiveQuery|PersonajeQuery
     */
    public function getPersonaje()
    {
        return $this->hasOne(Personaje::className(), ['id' => 'id_personaje']);
    }

    /**
     * {@inheritdoc}
     * @return DiarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiarioQuery(get_called_class());
    }
    
    public function afterFind()
    {
        $this->fecha_hora = Yii::$app->formatter->asDatetime($this->fecha_hora, 'dd/MM/yyyy - HH:mm');
    }
}
