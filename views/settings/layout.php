<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */

$networksVisible = count(Yii::$app->authClientCollection->clients) > 0;

$this->params['pageTitle'] = Yii::t('app', 'My Profile');
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $this->title?></h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?= Nav::widget(
                                    [
                                        'options' => [
                                            'class' => 'nav-pills nav-stacked',
                                        ],
                                        'items' => [
                                            ['label' => Yii::t('usuario', 'Profile'), 'url' => ['/user/settings/profile']],
                                            ['label' => Yii::t('usuario', 'Account'), 'url' => ['/user/settings/account']],
                                            [
                                                'label' => Yii::t('usuario', 'Networks'),
                                                'url' => ['/user/settings/networks'],
                                                'visible' => $networksVisible,
                                            ],
                                        ],
                                    ]
                                ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?= $content?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
