<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 * /

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dektrium\user\widgets\Connect;

/*
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 * /

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin([
                    'id'                     => 'login-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                    'validateOnType'         => false,
                    'validateOnChange'       => false,
                ]) ?>

                <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]) ?>

                <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label(Yii::t('user', 'Password').($module->enablePasswordRecovery ? ' ('.Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']).')' : '')) ?>

                <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>

                <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-primary btn-block', 'tabindex' => '3']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <?php if ($module->enableConfirmation): ?>
            <p class="text-center">
                <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
            </p>
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
            <p class="text-center">
                <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
            </p>
        <?php endif ?>
        <?= Connect::widget([
            'baseAuthUrl' => ['/user/security/auth'],
        ]) ?>
    </div>
</div>


<?php
*/
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
use tez\theme\widgets\Connect;

/*
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>


<p class="login-box-msg">Sign in to start your session</p>
<?php $form = ActiveForm::begin([
    'id'                     => 'login-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => false,
    'validateOnBlur'         => false,
    'validateOnType'         => false,
    'validateOnChange'       => false,
]) ?>
<div class="form-group has-feedback">
    <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']])->label(false) ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label(false) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
        <div class="checkbox icheck">
            <label>
                <input type="checkbox" name="rememberMe"> Remember Me
            </label>
        </div>
    </div><!-- /.col -->
    <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
    </div><!-- /.col -->
</div>
<?php ActiveForm::end(); ?>

<?= Connect::widget([
    'baseAuthUrl' => ['/user/security/auth'],
]) ?>

<?php if ($module->enableConfirmation): ?>
    <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?><br>
<?php endif ?>
<?php if ($module->enableRegistration): ?>
    <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register'], ['class' => 'text-center']) ?><br>
<?php endif ?>
<?php if ($module->enablePasswordRecovery): ?>
    <?= Html::a(Yii::t('user', 'I forgot my password'), ['/user/recovery/request']) ?><br>
<?php endif ?>
