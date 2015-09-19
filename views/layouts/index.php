<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginContent('@theme/views/layouts/main.php'); ?>
    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title"><?= Html::encode($this->title) ?></h1>
            <?= Html::a("Add New", ["create"], ['class' => "btn btn-success btn-sm pull-right"]) ?>
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle btn btn-link btn-icon" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-cogs"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="/contact/pdf" target="_blank"><i class="fa fa-file-pdf-o"></i>Download PDF</a></li>
                    <li><a href="/contact/csv" target="_blank"><i class="fa fa-file-excel-o"></i>Download CSV</a></li>
                    <li><a href="#assign-all-tag" data-toggle="modal" data-pjax="0" role="button"><i class="fa fa-tags"></i>Assign to tag</a></li>
                </ul>
            </div>            
            <div class="col-sm-2 pull-right hidden-sm hidden-xs">
                <select class="form-control input-sm" name="pagination" data-change="/contact/pagination">
                    <option value="10">Show 10</option>
                    <option value="25">Show 25</option>
                    <option value="50">Show 50</option>
                    <option value="100" selected="">Show 100</option>
                </select>
            </div>
            
        </div>
        <div class="box-body no-padding">
            <?= $content ?>
        </div>
    </div>
<?php $this->endContent();