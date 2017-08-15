<?php

/*
 * This file is part of the 2amigos/yii2-usuario project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 * @var $this yii\web\View
 * @var $searchModel \Da\User\Search\PermissionSearch
 */
use tez\theme\widgets\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::t('usuario', 'Permissions');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="company-index">

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= Yii::t('usuario', 'Permissions')?></h3>
            <?= Html::a(Yii::t('usuario', 'Create new permission'), ['create'], ['class' => 'btn btn-primary btn-xs pull-right']) ?>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

<?= GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => "{items}\n{pager}",
        'columns' => [
            [
                'attribute' => 'name',
                'header' => Yii::t('usuario', 'Name'),
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, $model) {
                    return Url::to(['/user/permission/' . $action, 'name' => $model['name']]);
                },
            ],
        ],
    ]
) ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>
