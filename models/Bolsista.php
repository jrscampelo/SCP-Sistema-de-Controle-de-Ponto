<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bolsista".
 *
 * @property integer $idBolsista
 * @property string $nome
 * @property string $sobrenome
 * @property string $turno
 * @property string $matricula
 * @property integer $horas_trabalhadas
 * @property integer $idTutor
 * @property integer $idLocal_Trabalho
 *
 * @property LocalTrabalho $idLocalTrabalho
 * @property Tutor $idTutor0
 * @property PontoEletronico[] $pontoEletronicos
 */
class Bolsista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bolsista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horas_trabalhadas', 'idTutor', 'idLocal_Trabalho'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['turno', 'matricula'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBolsista' => Yii::t('app', 'Id Bolsista'),
            'nome' => Yii::t('app', 'Nome'),
            'turno' => Yii::t('app', 'Turno'),
            'matricula' => Yii::t('app', 'Matricula'),
            'horas_trabalhadas' => Yii::t('app', 'Horas Trabalhadas'),
            'idTutor' => Yii::t('app', 'Tutor'),
            'idLocal_Trabalho' => Yii::t('app', 'Id Local  Trabalho'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLocalTrabalho()
    {
        return $this->hasOne(LocalTrabalho::className(), ['idLocal_Trabalho' => 'idLocal_Trabalho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTutor0()
    {
        return $this->hasOne(Tutor::className(), ['idTutor' => 'idTutor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPontoEletronicos()
    {
        return $this->hasMany(PontoEletronico::className(), ['nome_bolsista' => 'nome']);
    }
}
