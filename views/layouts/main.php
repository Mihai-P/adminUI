<?php
use backend\assets\AppAsset;
use yii\UrlAsset\component\UrlAsset;
use yii\helpers\Html;
use yii\adminUi\widget\Header;
use yii\adminUi\widget\Nav;
use yii\adminUi\widget\NavBar;
use yii\adminUi\widget\NavBarUser;
use yii\adminUi\widget\NavBarMessage;
use yii\adminUi\widget\NavBarNotification;
use yii\adminUi\widget\NavBarTask;
use yii\adminUi\widget\Breadcrumbs;

if (Yii::$app->user->isGuest) {
/**
 * Do not use this code in your template. Remove it.
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'login',
        ['content' => $content]
    );
} else {

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
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
<body class="skin-blue">
<?php
    $this->beginBody();
    Header::begin([
        'brandLabel' => 'My Company',
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'tag'   => 'header',
                    'class' => 'main-header',
                ],
        ]);
        NavBar::begin([
                'options' => [
                    'class' => 'navbar-static-top',
                ],
                'breadCrumbs' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);

            $menuItems = [];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['content'=> NavBarUser::Widget(),'options'=>['class'=>'']];
            }else{
                $menuItems[] = ['content'=> NavBarMessage::Widget(),'options'=>['class'=>'dropdown messages-menu']];
                $menuItems[] = ['content'=> NavBarNotification::Widget(),'options'=>['class'=>'dropdown notifications-menu']];
                $menuItems[] = ['content'=> NavBarTask::Widget(),'options'=>['class'=>'dropdown tasks-menu']];
                $menuItems[] = ['content'=> NavBarUser::Widget(),'options'=>['class'=>'dropdown user user-menu']];
            }

            echo Nav::widget([
                'options' => ['class' => 'nav navbar-nav'],
                'items' => $menuItems,
            ]);
        NavBar::end();
     Header::end();
?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <?= NavBarUser::Widget(['type' =>'sidebar']);?>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" id="keywords" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
<?php
                    $menuitems = [
                        [
                            'content' => 'MAIN NAVIGATION',
                            'options' => [
                                'class' => 'header',
                            ],
                        ],
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
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Main content -->
                <section class="content">
                    <?= $content ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


   <?php /*/?>
    <div class="wrap">
        <?php

        NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();

        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
<?php //*/?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?>
