<?php
use yii\helpers\Url;
use yii\helpers\Html;
use tez\theme\assetsBundle\AdminUiAsset;

$bundle = AdminUiAsset::register($this);
if($type=='topbar'){
?>
<a href="#" class="dropdown-toggle navbar-username" data-toggle="dropdown">
	<i class="glyphicon glyphicon-user"></i>
	<span><?php
	if(isset(Yii::$app->user->identity->profile->firstname)) {
		echo Yii::$app->user->identity->profile->firstname;
	} else {
		echo "Profile";
	}?> <i class="caret"></i></span>
</a>
<ul class="dropdown-menu">
	<!-- User image -->
	<li class="user-header bg-light-blue">
		<img src="<?php
			if(isset(Yii::$app->user->identity->profile->gravatar_id)) {
				echo "http://gravatar.com/avatar/ " . Yii::$app->user->identity->profile->gravatar_id . "s=64";
			} else {
				echo $bundle->baseUrl . "/img/avatar2.png";
			} ?>" class="img-circle" alt="<?php
			if(isset(Yii::$app->user->identity->profile->name)) {
				echo Yii::$app->user->identity->profile->name;
			} else {
				echo "Unknown";
			}?>" />
		<p>
			<?php
			if(isset(Yii::$app->user->identity->profile->name)) {
				echo Yii::$app->user->identity->profile->name . "<small>Member since " . date('M. Y',  Yii::$app->user->identity->created_at) . "</small>";
			} else {
				echo "Unknown";
			}?>

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
        <img src="<?php
			if(isset(Yii::$app->user->identity->profile->gravatar_id)) {
				echo "http://gravatar.com/avatar/ " . Yii::$app->user->identity->profile->gravatar_id . "s=64";
			} else {
				echo $bundle->baseUrl . "/img/avatar2.png";
			} ?>" class="img-circle" alt="<?php
			if(isset(Yii::$app->user->identity->profile->name)) {
				echo Yii::$app->user->identity->profile->name;
			} else {
				echo "Unknown";
			}?>" />
    </div>
    <div class="pull-left info">
		<?php
		if(isset(Yii::$app->user->identity->profile->name)) {
			echo "<p>Hello, " . Html::a(Yii::$app->user->identity->profile->firstname, ['/user/settings/profile']) . "</p>";
		} else {
			echo "Unknown";
		}?>

        <i class="fa fa-circle text-success"></i> Online
    </div>
</div>
<?php } ?>
