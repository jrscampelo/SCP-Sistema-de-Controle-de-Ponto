<?php

namespace app\models;

use Yii;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "tutor".
 *
 * @property integer $idTutor
 * @property string $siap
 * @property string $nome
 * @property string $sobrenome
 * @property string $login
 * @property string $senha
 * @property integer $idLocal_Trabalho_Tutor
 *
 * @property Bolsista[] $bolsistas
 * @property LocalTrabalho $idLocalTrabalhoTutor
 */
class Tutor extends \yii\db\ActiveRecord implements IdentityInterface
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
            [['idLocal_Trabalho_Tutor'], 'integer'],
            [['siap'], 'string', 'max' => 15],
            [['nome', 'username', 'password'], 'string', 'max' => 200],
            [['auth_key', 'access_token', 'password_reset_token'], 'string', 'max' => 45],
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
            'username' => Yii::t('app', 'Login'),
            'password' => Yii::t('app', 'Senha'),
            'idLocal_Trabalho_Tutor' => Yii::t('app', 'Id Local  Trabalho  Tutor'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'access_token' => Yii::t('app', 'Access Token'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolsistas()
    {
        return $this->hasMany(Bolsista::className(), ['idTutor' => 'idTutor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLocalTrabalhoTutor()
    {
        return $this->hasOne(LocalTrabalho::className(), ['idLocal_Trabalho' => 'idLocal_Trabalho_Tutor']);
    }

     //Criar Hash antes de Salvar
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = Yii::$app->getSecurity()->generateRandomString();
                $this->password = sha1($this->password);
            }
            return true;
        }
        return false;
    }

    //Implementação de IdentityInterface

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }
 
    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by password reset token
     *
     * @param  string      $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Security::generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

}

