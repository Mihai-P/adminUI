<?php
use backend\assets\AppAsset;
use tez\theme\assetsBundle\AdminUiAsset;
use yii\UrlAsset\component\UrlAsset;
use yii\helpers\Html;
use tez\theme\widget\Header;
use tez\theme\widget\Nav;
use tez\theme\widget\NavBar;
use tez\theme\widget\NavBarUser;
use tez\theme\widget\NavBarMessage;
use tez\theme\widget\NavBarNotification;
use tez\theme\widget\NavBarTask;
use tez\theme\widget\Breadcrumbs;

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


<body class="login-page">
<?php
    $this->beginBody();
?>
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <?= $content ?>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 - ->
  <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS - ->
  <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- iCheck - ->
  <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  -->
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
