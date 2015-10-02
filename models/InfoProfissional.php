<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "infoProfissional".
 *
 * @property integer $idinfoProfissional
 * @property string $crm
 * @property string $telefone
 * @property string $email
 * @property string $site
 * @property integer $user_iduser
 *
 * @property User $userIduser
 */
class InfoProfissional extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'infoProfissional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_iduser'], 'required'],
            [['user_iduser'], 'integer'],
            [['crm'], 'string', 'max' => 255],
            [['telefone'], 'string', 'max' => 11],
            [['email', 'site'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idinfoProfissional' => Yii::t('app', 'Idinfo Profissional'),
            'crm' => Yii::t('app', 'Crm'),
            'telefone' => Yii::t('app', 'Telefone'),
            'email' => Yii::t('app', 'Email'),
            'site' => Yii::t('app', 'Site'),
            'user_iduser' => Yii::t('app', 'User Iduser'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserIduser()
    {
        return $this->hasOne(User::className(), ['iduser' => 'user_iduser']);
    }
}
