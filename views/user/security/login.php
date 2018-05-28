<?php

use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->title = Yii::t('user', 'Sign in');
?>

<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                    'validateOnBlur' => false,
                    'validateOnType' => false,
                    'validateOnChange' => false,
                ]) ?>
                <h1>Sign In</h1>
                <?= $form->field(
                    $model,
                    'login',
                    ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]
                )->label(false) ?>

                <?= $form->field(
                        $model,
                    'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']]
                )->passwordInput()->label(false) ?>

                <?= $module->enablePasswordRecovery ? Html::a(Yii::t('user', 'Forgot password?'),
                    ['/user/recovery/request'], ['tabindex' => '5'] ) : '' ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>

                <?= Html::submitButton(
                    Yii::t('user', 'Sign in'),
                    ['class' => 'btn btn-default submit', 'tabindex' => '3']
                ) ?>
                <?php if ($module->enableConfirmation): ?>
                    <p class="text-center">
                        <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
                    </p>
                <?php endif ?>

                <div class="clearfix"></div>
                <div class="separator">
                    <p class="change_link"></p>
                    <?php if ($module->enableRegistration): ?>
                        <p class="text-center">
                            <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
                        </p>
                    <?php endif ?>
                    <?= Connect::widget([
                        'baseAuthUrl' => ['/user/security/auth'],
                    ]) ?>
                    <div>
                        <h1><i class="fa fa-paw"></i> Yii2-Basic-Plus</h1>
                        <p>©2017-2018 All Rights Reserved by Prasit Gebsaap. This application uses Yii2 framework and Gentelella Alela! template.</p>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </section>
        </div>
    </div>
</div>