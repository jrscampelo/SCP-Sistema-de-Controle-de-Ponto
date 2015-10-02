<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "frequencia".
 *
 * @property integer $idFrequencia
 * @property integer $contadorHoras
 *
 * @property HorarioTrabalho[] $horarioTrabalhos
 */
class Frequencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'frequencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contadorHoras'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFrequencia' => Yii::t('app', 'Id Frequencia'),
            'contadorHoras' => Yii::t('app', 'Contador Horas'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorarioTrabalhos()
    {
        return $this->hasMany(HorarioTrabalho::className(), ['idFrequencia' => 'idFrequencia']);
    }
}
