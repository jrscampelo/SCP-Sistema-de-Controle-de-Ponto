<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ponto_eletronico".
 *
 * @property integer $idPonto_Eletronico
 * @property string $data
 * @property string $hora
 * @property string $Estado
 * @property string $tipoFrequencia
 * @property integer $idBolsista
 *
 * @property Bolsista $idBolsista0
 */
class Ponto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ponto_eletronico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'hora'], 'safe'],
            [['idBolsista'], 'integer'],
            [['Estado', 'tipoFrequencia'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPonto_Eletronico' => Yii::t('app', 'Id Ponto  Eletronico'),
            'data' => Yii::t('app', 'Data'),
            'hora' => Yii::t('app', 'Hora'),
            'Estado' => Yii::t('app', 'Estado'),
            'tipoFrequencia' => Yii::t('app', 'Tipo Frequencia'),
            'idBolsista' => Yii::t('app', 'Id Bolsista'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBolsista0()
    {
        return $this->hasOne(Bolsista::className(), ['idBolsista' => 'idBolsista']);
    }
}
