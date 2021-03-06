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
 * @var $model \Da\User\Model\Permission
 * @var $this                     yii\web\View
 * @var $unassignedItems          string[]
 */
$this->title = Yii::t('app', 'Update Permission');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Manage Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
$this->params['breadcrumbs'][] = Yii::t('app', 'Update Timesheet');

?>
<div class="contact-create">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Yii::t('app', 'Update permission')?></h3>
        </div>
        <div class="box-body">
            <?= $this->render(
                '_form',
                [
                    'model' => $model,
                    'unassignedItems' => $unassignedItems,
                ]
            ) ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>


