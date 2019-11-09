<?php
namespace backend\models;

class UserBackend extends \mdm\admin\models\User
{

    public static function tableName()
    {
        return "bk_user";
    }
}