<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario_trabalho".
 *
 * @property integer $idHorario_Trabalho
 * @property string $turno
 * @property string $hora_Chegada
 * @property string $hora_saida
 * @property integer $idFrequencia
 *
 * @property Bolsista[] $bolsistas
 * @property Frequencia $idFrequencia0
 */
class HorarioTrabalho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario_trabalho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hora_Chegada', 'hora_saida'], 'safe'],
            [['idFrequencia'], 'integer'],
            [['turno'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHorario_Trabalho' => Yii::t('app', 'Id Horario  Trabalho'),
            'turno' => Yii::t('app', 'Turno'),
            'hora_Chegada' => Yii::t('app', 'Hora  Chegada'),
            'hora_saida' => Yii::t('app', 'Hora Saida'),
            'idFrequencia' => Yii::t('app', 'Id Frequencia'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolsistas()
    {
        return $this->hasMany(Bolsista::className(), ['idHorario_Trabalho' => 'idHorario_Trabalho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFrequencia0()
    {
        return $this->hasOne(Frequencia::className(), ['idFrequencia' => 'idFrequencia']);
    }
}
