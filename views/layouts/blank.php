<?php
use app\assets\AppAsset;
use tez\theme\assetsBundle\AdminUiAsset;
use yii\helpers\Html;
use tez\theme\widget\Header;
use tez\theme\widget\Nav;
use tez\theme\widget\NavBar;
use tez\theme\widget\NavBarUser;
use tez\theme\widget\NavBarMessage;
use tez\theme\widget\NavBarNotification;
use tez\theme\widget\NavBarTask;
use yii\widgets\Breadcrumbs;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
AdminUiAsset::register($this);
$this->beginPage()
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title><?= Html::encode($this->title) ?></title>
	<?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<?php $this->beginBody();?>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><?= Yii::t('app', 'app_name')?></a>
    </div>
    <div class="login-box-body">
    <?= $content ?>
    </div>
    <!-- /.login-box-body -->
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
