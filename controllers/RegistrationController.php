<?php

namespace app\controllers;

use dektrium\user\controllers\RegistrationController as BaseRegistrationController;

class RegistrationController extends BaseRegistrationController
{
    public function beforeAction($action)
    {
        $this->layout = '@app/views/layouts/main-login';
        return parent::beforeAction($action);
    }

}