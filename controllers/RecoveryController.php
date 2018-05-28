<?php
namespace app\controllers;

use dektrium\user\controllers\RecoveryController as BaseRecoveryController;

class RecoveryController extends BaseRecoveryController
{
    public function beforeAction($action)
    {
        $this->layout = '@app/views/layouts/main-login';
        return parent::beforeAction($action);
    }
}