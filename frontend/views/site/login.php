<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
					<h1>las kekas</h1>
                    <h3>Log into your account</h3>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block ', 'name' => 'login-button']) ?>
                </div>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <p style="color:#999">Do not have an account?</p>
                    <p style="color:#999"><?= Html::a('Create Account', ['site/signup']) ?></p>
                </div>
                

            <?php ActiveForm::end(); ?>
  
