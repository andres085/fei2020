<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diariocampania".
 *
 * @property int $id
 * @property int|null $id_campania
 * @property string|null $fecha_hora
 * @property string|null $info
 *
 * @property Campania $campania
 */
class Diariocampania extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diariocampania';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_campania'], 'integer'],
            [['fecha_hora'], 'safe'],
            [['info'], 'string'],
            [['id_campania'], 'exist', 'skipOnError' => true, 'targetClass' => Campania::className(), 'targetAttribute' => ['id_campania' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_campania' => 'Id Campania',
            'fecha_hora' => 'Fecha Hora',
            'info' => 'Info',
        ];
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
     * {@inheritdoc}
     * @return DiariocampaniaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiariocampaniaQuery(get_called_class());
    }
}
