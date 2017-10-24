<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TSysUser]].
 *
 * @see TSysUser
 */
class TSysUserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TSysUser[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TSysUser|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
