<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

    <h1>Las kekas</h1>
    <h3>Create your account</h3>

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <?= $form->field($model, 'first_name') ?>

                <?= $form->field($model, 'last_name') ?>

                <?= $form->field($model, 'gender')->dropDownList([1 => 'Hombre', 2 => 'Mujer']) ?>
                
                <div class="form-group " >
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>
                </div>

                <p style="color:#999;margin:1em 0">Already have an account?</p>
                <p style="color:#999"><?= Html::a('Log Into Account', ['site/login'], ['class' => 'btn  btn-default btn-block']) ?></p>
            <?php ActiveForm::end(); ?>

</div>
