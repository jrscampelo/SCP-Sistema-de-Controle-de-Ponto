<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "local_trabalho".
 *
 * @property integer $idLocal_Trabalho
 * @property string $nome
 *
 * @property Bolsista[] $bolsistas
 */
class LocalTrabalho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local_trabalho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idLocal_Trabalho' => Yii::t('app', 'Id Local  Trabalho'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolsistas()
    {
        return $this->hasMany(Bolsista::className(), ['idLocal_Trabalho' => 'idLocal_Trabalho']);
    }
}
