<?php

namespace app\models;

/**
 * Class User
 * @package app\models
 * @property fullName
 */
class User extends \dektrium\user\models\User
{
    /**
     *
     * @return string
     */
    public function getFullName()
    {
        if (!empty($this->profile)) {
            if (isset($this->profile->first_name) && isset($this->profile->last_name)) {
                return $this->first_name.' '.$this->last_name;
            }else{
                if (is_null($this->profile->name)) return 'Update profile';
                return $this->profile->name;
            }
        }else{
            return $this->username;
        }
    }
}
