<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bolsista".
 *
 * @property integer $idBolsista
 * @property string $nome
 * @property string $sobrenome
 * @property string $matricula
 * @property string $senha
 * @property string $login
 * @property integer $idTutor
 * @property integer $idHorario_Trabalho
 * @property integer $idLocal_Trabalho
 *
 * @property HorarioTrabalho $idHorarioTrabalho
 * @property LocalTrabalho $idLocalTrabalho
 * @property Tutor $idTutor0
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
            [['idTutor', 'idHorario_Trabalho', 'idLocal_Trabalho'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['sobrenome', 'matricula', 'senha', 'login'], 'string', 'max' => 45]
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
            'sobrenome' => Yii::t('app', 'Sobrenome'),
            'matricula' => Yii::t('app', 'Matricula'),
            'senha' => Yii::t('app', 'Senha'),
            'login' => Yii::t('app', 'Login'),
            'idTutor' => Yii::t('app', 'Id Tutor'),
            'idHorario_Trabalho' => Yii::t('app', 'Id Horario  Trabalho'),
            'idLocal_Trabalho' => Yii::t('app', 'Id Local  Trabalho'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdHorarioTrabalho()
    {
        return $this->hasOne(HorarioTrabalho::className(), ['idHorario_Trabalho' => 'idHorario_Trabalho']);
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
}
