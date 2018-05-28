<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View              $this
 * @var dektrium\user\models\User $user
 * @var dektrium\user\Module      $module
 */

$this->title = Yii::t('user', 'Sign up');
?>
<div class="id="register" class="animate form registration_form"">
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <?php $form = ActiveForm::begin([
                        'id'                     => 'registration-form',
                        'enableAjaxValidation'   => true,
                        'enableClientValidation' => false,
                    ]); ?>
                        <h1>Sign Up</h1>
                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'username') ?>

                        <?php if ($module->enableGeneratingPassword == false): ?>
                            <?= $form->field($model, 'password')->passwordInput() ?>
                        <?php endif ?>

                        <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-default submit']) ?>

                    <?php ActiveForm::end(); ?>
                </section>
                <div class="separator">
                    <p class="text-center">
                        <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
                    </p>
                </div>
            </div>
        </div>

</div>
