{use class='backend\assets\AppAsset'}
{use class='yii\helpers\Html'}
{use class='tez\theme\widget\Header' type='block'}
{use class='tez\theme\widget\Nav' type='function'}
{use class='tez\theme\widget\NavBar' type='block'}
{use class='tez\theme\widget\NavBarUser' type='function'}
{use class='tez\theme\widget\NavBarMessage'}
{use class='tez\theme\widget\NavBarNotification'}
{use class='tez\theme\widget\NavBarTask'}
{use class='tez\theme\widget\Breadcrumbs'}
{AppAsset::register($this)|void}
{$this->beginPage()}
<!DOCTYPE html>
<html lang="{$app->language}">
<head>
    <meta charset="{$app->charset}"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>{*$title*}</title>
    {Html::csrfMetaTags()}
    {$this->head()}
</head>
<body class="skin-blue">
    {$this->beginBody()}
    {Header brandLabel='My Company' brandLabel=$app->name brandUrl=$app->homeUrl options=['tag'   => 'header','class' => 'header']}
        {NavBar options=['class' => 'navbar-static-top']}
            {if $app->user->isGuest}
                {Nav options=['class' => 'nav navbar-nav'] items=[['content'=> NavBarUser::Widget(),'options'=>['class'=>'']]]}
            {else}
                {Nav options=['class' => 'nav navbar-nav'] items=[['content'=> NavBarUser::Widget(),'options'=>['class'=>'dropdown user user-menu']]]}
            {/if}
        {/NavBar}
    {/Header}
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            <!-- Sidebar user panel -->
                {NavBarUser type='sidebar'}
                {Nav options=['class' => 'sidebar-menu'] items = [
                    [
                        'label' => 'Dashboard',
                        'url' => ['/adminuidemo'],
                        'linkOptions'=>[
                            'class' => 'fa fa-dashboard'
                        ]
                    ],
                    [
                        'label' => 'Widgets',
                        'url' => ['/adminuidemo/default/widget'],
                        'linkOptions'=>[
                            'class' => 'fa fa-th'
                        ],
                        'badgeOptions' => [
                            'type' => 'new',
                            'text' => 'new'
                        ]
                    ],
                    [
                        'label' => 'Charts',
                        'url' => ['/site/chart'],
                        'linkOptions'=>[
                            'class' => 'fa fa-bar-chart-o'
                        ],
                        'items' => [
                            [
                                'label' => 'Morris',
                                'url' => ['/adminuidemo/chart/morris'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Flot',
                                'url' => ['/adminuidemo/chart/flot'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Inline charts',
                                'url' => ['/adminuidemo/chart/inline'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ]
                        ]
                    ],
                    [
                        'label' => 'UI Elements',
                        'url' => ['/site/chart'],
                        'linkOptions'=>[
                            'class' => 'fa fa-laptop'
                        ],
                        'items' => [
                            [
                                'label' => 'General',
                                'url' => ['/adminuidemo/ui/general'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Icons',
                                'url' => ['/adminuidemo/ui/icons'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Buttons',
                                'url' => ['/adminuidemo/ui/buttons'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Sliders',
                                'url' => ['/adminuidemo/ui/sliders'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Timeline',
                                'url' => ['/adminuidemo/ui/timeline'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ]
                        ]
                    ],
                    [
                        'label' => 'Forms',
                        'url' => ['/site/chart'],
                        'linkOptions'=>[
                            'class' => 'fa fa-edit'
                        ],
                        'items' => [
                            [
                                'label' => 'General Elements',
                                'url' => ['/adminuidemo/forms/general'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Advanced Elements',
                                'url' => ['/adminuidemo/forms/advanced'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Editors',
                                'url' => ['/adminuidemo/forms/editors'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ]
                        ]
                    ],
                    [
                        'label' => 'Tables',
                        'url' => ['/site/chart'],
                        'linkOptions'=>[
                            'class' => 'fa fa-table'
                        ],
                        'items' => [
                            [
                                'label' => 'Simple tables',
                                'url' => ['/adminuidemo/tables/simple'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Data tables',
                                'url' => ['/adminuidemo/tables/data'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ]
                        ]
                    ],
                    [
                        'label' => 'Calendar',
                        'url' => ['/adminuidemo/default/calendar'],
                        'linkOptions'=>[
                            'class' => 'fa fa-calendar'
                        ],
                        'badgeOptions' => [
                            'type' => 'notification1',
                            'text' => '3'
                        ]
                    ],
                    [
                        'label' => 'Mailbox',
                        'url' => ['/adminuidemo/default/mailbox'],
                        'linkOptions'=>[
                            'class' => 'fa fa-envelope'
                        ],
                        'badgeOptions' => [
                            'type' => 'notification2',
                            'text' => '13'
                        ]
                    ],
                    [
                        'label' => 'Examples',
                        'url' => ['/site/chart'],
                        'linkOptions'=>[
                            'class' => 'fa fa-folder'
                        ],
                        'items' => [
                            [
                                'label' => 'Invoice',
                                'url' => ['/adminuidemo/examples/invoice'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Login',
                                'url' => ['/adminuidemo/examples/login'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Register',
                                'url' => ['/adminuidemo/examples/register'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Lockscreen',
                                'url' => ['/adminuidemo/examples/lockscreen'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => '404 Error',
                                'url' => ['/adminuidemo/examples/error404'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => '500 Error',
                                'url' => ['/adminuidemo/examples/error500'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ],
                            [
                                'label' => 'Blank Page',
                                'url' => ['/adminuidemo/examples/empty'],
                                'linkOptions'=>[
                                    'class' => 'fa fa-angle-double-right'
                                ]
                            ]
                        ]
                    ]
                    ]}
            </section>
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Left side column. contains the logo and sidebar -->
            <section class="content">
                {block name=body}{/block}
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div>
{$this->endBody()}
</body>
</html>
{$this->endPage()}
