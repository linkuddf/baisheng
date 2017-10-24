<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_sys_user".
 *
 * @property string $id
 * @property string $company_id
 * @property string $user_name
 * @property string $login_name
 * @property string $password
 * @property string $phone_no
 * @property string $role_id
 * @property integer $is_auditor
 * @property string $last_login_time
 * @property string $agent_id
 * @property string $remark
 * @property string $create_user_id
 * @property string $create_time
 * @property string $modify_user_id
 * @property string $modify_time
 * @property integer $is_used
 * @property integer $hide_phone
 */
    class TSysUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_sys_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'role_id', 'is_auditor', 'agent_id', 'create_user_id', 'modify_user_id', 'is_used', 'hide_phone'], 'integer'],
            [['role_id'], 'required'],
            [['last_login_time', 'create_time', 'modify_time'], 'safe'],
            [['user_name', 'login_name'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 64],
            [['phone_no'], 'string', 'max' => 20],
            [['remark'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'user_name' => 'User Name',
            'login_name' => 'Login Name',
            'password' => 'Password',
            'phone_no' => 'Phone No',
            'role_id' => 'Role ID',
            'is_auditor' => 'Is Auditor',
            'last_login_time' => 'Last Login Time',
            'agent_id' => 'Agent ID',
            'remark' => 'Remark',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'modify_user_id' => 'Modify User ID',
            'modify_time' => 'Modify Time',
            'is_used' => 'Is Used',
            'hide_phone' => 'Hide Phone',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return self::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return new \yii\base\NotSupportedException();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return false;
    }

    public static function findByLoginName($name) {
        return self::find()->where(['login_name' => $name, 'is_used' => 1])->one();
    }

    public static function find()
    {
        return new \app\models\TSysUserQuery(get_called_class());
    }

    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
}
