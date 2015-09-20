<?php
use yii\helpers\Url;
use yii\helpers\Html;
use tez\theme\assetsBundle\AdminUiAsset;

$bundle = AdminUiAsset::register($this);
if($type=='topbar'){
?>
<a href="#" class="dropdown-toggle navbar-username" data-toggle="dropdown">
	<i class="glyphicon glyphicon-user"></i>
	<span><?php echo Yii::$app->user->identity->profile->firstname;?> <i class="caret"></i></span>
</a>
<ul class="dropdown-menu">
	<!-- User image -->
	<li class="user-header bg-light-blue">
		<img src="http://gravatar.com/avatar/<?= Yii::$app->user->identity->profile->gravatar_id ?>?s=64" class="img-circle" alt="<?= Yii::$app->user->identity->profile->name ?>" />
		<p>
			<?= Yii::$app->user->identity->profile->name?>
            <small><?= (Yii::$app->user->identity->created_at) ? 'Member since '.date('M. Y',  Yii::$app->user->identity->created_at) : ''; ?></small>
		</p>
	</li>
        <?php /*/?>
	<!-- Menu Body -->
	<li class="user-body">
		<div class="col-xs-4 text-center">
			<a href="#">Followers</a>
		</div>
		<div class="col-xs-4 text-center">
			<a href="#">Sales</a>\
		</div>
		<div class="col-xs-4 text-center">
			<a href="#">Friends</a>
		</div>
	</li><?php //*/?>
	<!-- Menu Footer-->
	<li class="user-footer">
		<div class="pull-left">
                    <?=  Html::a('Profile', ['/user/settings/profile'], ['class'=>'btn btn-default btn-flat'])?>
		</div>
		<div class="pull-right">
                    <a href="<?php echo Url::toRoute('/site/logout');?>" data-method="post" class="btn btn-default btn-flat">Sign out</a>
		</div>
	</li>
</ul>
<?php }else{?>
<div class="user-panel">
    <div class="pull-left image">
        <img src="http://gravatar.com/avatar/<?= Yii::$app->user->identity->profile->gravatar_id ?>?s=64" class="img-circle" alt="<?= Yii::$app->user->identity->profile->name ?>" />
    </div>
    <div class="pull-left info">
        <p>Hello, <?=  Html::a(Yii::$app->user->identity->profile->firstname, ['/user/settings/profile'])?></p>

        <i class="fa fa-circle text-success"></i> Online
    </div>
</div>
<?php } ?>