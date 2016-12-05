<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use tez\theme\assetsBundle\AdminUiAsset;
use yii\helpers\ArrayHelper;
use tez\theme\widgets\Nav;
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

    <title><?= Html::encode($this->title) ?></title>
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
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
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

            <?php
            $menuitems = [
//                [
//                    'content' => 'MAIN NAVIGATION',
//                    'options' => [
//                        'class' => 'header',
//                    ],
//                ],
                [
                    'label' => 'Dashboard',
                    'url' => ['/'],
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'linkOptions'=>[
                        'class' => 'fa fa-dashboard',
                    ]
                ],
                [
                    'label' => 'Tags',
                    'url' => ['/cms/tag'],
                    'linkOptions'=>[
                        'class' => 'fa fa-th',
                    ],
                    'badgeOptions' => [
                        'type' => 'new',
                        'text' => 'new',
                    ],
                ],
                [
                    'label' => 'Blog',
                    #'url' => ['/site/chart'],
                    'linkOptions'=>[
                        'class' => 'fa fa-bar-chart-o',
                    ],
                    'items' => [
                        [
                            'label' => 'Posts',
                            'url' => ['/blog/blog-post'],
                            'linkOptions'=>[
                                'class' => 'fa fa-circle-o',
                            ]
                        ],
                        [
                            'label' => 'Comments',
                            'url' => ['/blog/blog-comments'],
                            'linkOptions'=>[
                                'class' => 'fa fa-circle-o',
                            ]
                        ],
                    ],
                ],
                [
                    'label' => 'Users',
                    #'url' => ['/site/chart'],
                    'linkOptions'=>[
                        'class' => 'fa fa-laptop',
                    ],
                    'items' => [
                        [
                            'label' => 'Administrators',
                            'url' => ['/user/admin/index'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Permissions',
                            'url' => ['/rbac/permission/index'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Role',
                            'url' => ['/rbac/role/index'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                    ],
                ],
                [
                    'label' => 'Forms',
                    #'url' => ['/site/chart'],
                    'linkOptions'=>[
                        'class' => 'fa fa-edit',
                    ],
                    'items' => [
                        [
                            'label' => 'General Elements',
                            'url' => ['/adminuidemo/forms/general'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Advanced Elements',
                            'url' => ['/adminuidemo/forms/advanced'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Editors',
                            'url' => ['/adminuidemo/forms/editors'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ]
                    ],
                ],
                [
                    'label' => 'Tables',
                    #'url' => ['/site/chart'],
                    'linkOptions'=>[
                        'class' => 'fa fa-table',
                    ],
                    'items' => [
                        [
                            'label' => 'Simple tables',
                            'url' => ['/adminuidemo/tables/simple'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Data tables',
                            'url' => ['/adminuidemo/tables/data'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ]
                    ],
                ],
                [
                    'label' => 'Calendar',
                    'url' => ['/adminuidemo/default/calendar'],
                    'linkOptions'=>[
                        'class' => 'fa fa-calendar',
                    ],
                    'badgeOptions' => [
                        'type' => 'notification1',
                        'text' => '3',
                    ],
                ],
                [
                    'label' => 'Mailbox',
                    'url' => ['/adminuidemo/default/mailbox'],
                    'linkOptions'=>[
                        'class' => 'fa fa-envelope',
                    ],
                    'badgeOptions' => [
                        'type' => 'notification2',
                        'text' => '13',
                    ],
                ],
                [
                    'label' => 'Examples',
                    #'url' => ['/site/chart'],
                    'linkOptions'=>[
                        'class' => 'fa fa-folder',
                    ],
                    'items' => [
                        [
                            'label' => 'Invoice',
                            'url' => ['/adminuidemo/examples/invoice'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Login',
                            'url' => ['/adminuidemo/examples/login'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Register',
                            'url' => ['/adminuidemo/examples/register'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Lockscreen',
                            'url' => ['/adminuidemo/examples/lockscreen'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => '404 Error',
                            'url' => ['/adminuidemo/examples/error404'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => '500 Error',
                            'url' => ['/adminuidemo/examples/error500'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ],
                        [
                            'label' => 'Blank Page',
                            'url' => ['/adminuidemo/examples/empty'],
                            'linkOptions'=>[
                                'class' => 'fa fa-angle-double-right',
                            ]
                        ]
                    ],
                ],
            ];
            /* TODO
            if($this->params['urls']){
                $menuitems = $this->params['urls'];
            }*/
            echo Nav::widget([
                'options' => ['class' => 'sidebar-menu'],
                'items' => $menuitems,
            ]);
            ?>
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
        <?= ArrayHelper::getValue($this->blocks, 'footerLeft', '<strong>This page is approved for RevenueNSW internal release only.</strong>'); ?>
        <?= ArrayHelper::getValue($this->blocks, 'footerRight', ''); ?>
    </footer>

    <?= ArrayHelper::getValue($this->blocks, 'sidebar', ''); ?>
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>