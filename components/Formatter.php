<?php

namespace app\components;

class Formatter extends \yii\i18n\Formatter
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function asUser($value, $options = [])
    {
        if ($value  > 0) {
            $user = \Yii::$app->user->identity->findOne($value);
            return $user->username;
        }else{
            return $this->nullDisplay;
        }
    }
}