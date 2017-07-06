<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use tez\theme\assetsBundle\AdminUiAsset;
use yii\helpers\ArrayHelper;
use tez\theme\widgets\Breadcrumbs;
use yii\helpers\Url;
/**
 * @var \yii\web\View $this
 * @var string $content
 */

AdminUiAsset::register($this);
AppAsset::register($this);
$distAsset = Yii::$app->getAssetManager()->getBundle('tez\theme\assetsBundle\AdminUiDistAsset');
$this->beginPage();
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= ArrayHelper::getValue($this->blocks, 'htmlTile', Html::encode($this->title)); ?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<?php $this->beginBody();?>
    <header class="main-header">
        <!-- Logo -->
        <?php if(ArrayHelper::getValue($this->blocks, 'logo', false)): ?>
            <?= ArrayHelper::getValue($this->blocks, 'logo', ''); ?>
        <?php else: ?>
        <a href="<?=Url::to(['/'])?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><?= Yii::t('app', 'app_name_short')?></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><?= Yii::t('app', 'app_name')?></span>
        </a>
        <?php endif; ?>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <?php if(ArrayHelper::getValue($this->params, 'showToggle', true)): ?>
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <?php endif; ?>
            <?php if (isset($this->blocks['navbar1']) || isset($this->blocks['navbar2']) || isset($this->blocks['navbar3']) || isset($this->blocks['navbar4']) || isset($this->blocks['navbar5'])): ?>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <?= ArrayHelper::getValue($this->blocks, 'navbar1', ''); ?>
                    <?= ArrayHelper::getValue($this->blocks, 'navbar2', ''); ?>
                    <?= ArrayHelper::getValue($this->blocks, 'navbar3', ''); ?>
                    <?= ArrayHelper::getValue($this->blocks, 'navbar4', ''); ?>
                    <?= ArrayHelper::getValue($this->blocks, 'navbar5', ''); ?>
                </ul>
            </div>
            <?php endif; ?>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <?= ArrayHelper::getValue($this->blocks, 'user-panel', ''); ?>
            <?php if(ArrayHelper::getValue($this->params, 'showSearch', true)): ?>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <?php endif; ?>
            <?= ArrayHelper::getValue($this->blocks, 'left-menu', ''); ?>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= ArrayHelper::getValue($this->params, 'pageTitle', Html::encode($this->title)); ?>
                <small><?= ArrayHelper::getValue($this->params, 'subTitle', ''); ?></small>
            </h1>

            <?= Breadcrumbs::widget([
                'links' => ArrayHelper::getValue($this->params, 'breadcrumbs', []),
            ]) ?>
        </section>

        <!-- Main content -->
        <section class="content">
            <?= $content ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <?= ArrayHelper::getValue($this->blocks, 'footerLeft', '<strong>This page is approved for internal usage only.</strong>'); ?>
        <?= ArrayHelper::getValue($this->blocks, 'footerRight', ''); ?>
    </footer>

    <?= ArrayHelper::getValue($this->blocks, 'sidebar', ''); ?>
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>