<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tutor".
 *
 * @property integer $idTutor
 * @property string $siap
 * @property string $nome
 * @property string $sobrenome
 * @property string $senha
 * @property string $login
 *
 * @property Bolsista[] $bolsistas
 */
class Tutor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tutor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['siap'], 'string', 'max' => 15],
            [['nome', 'sobrenome', 'senha', 'login'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTutor' => Yii::t('app', 'Id Tutor'),
            'siap' => Yii::t('app', 'Siap'),
            'nome' => Yii::t('app', 'Nome'),
            'sobrenome' => Yii::t('app', 'Sobrenome'),
            'senha' => Yii::t('app', 'Senha'),
            'login' => Yii::t('app', 'Login'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolsistas()
    {
        return $this->hasMany(Bolsista::className(), ['idTutor' => 'idTutor']);
    }
}
