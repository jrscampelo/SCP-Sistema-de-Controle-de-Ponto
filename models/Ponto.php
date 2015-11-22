<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ponto_eletronico".
 *
 * @property integer $idPonto_Eletronico
 * @property string $data
 * @property string $hora_Chegada
 * @property string $hora_saida
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
            [['data', 'hora_Chegada', 'hora_saida'], 'safe'],
            [['idBolsista'], 'integer'],
            [['tipoFrequencia'], 'string', 'max' => 45]
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
            'hora_Chegada' => Yii::t('app', 'Hora'),
            'hora_saida' => Yii::t('app', 'Hora Saida'),
            'tipoFrequencia' => Yii::t('app', 'Tipo de Frequencia'),
            'idBolsista' => Yii::t('app', 'Bolsista'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolsistaIdBolsista()
    {
        return $this->hasOne(Bolsista::className(), ['idBolsista' => 'idBolsista']);
    }

}
