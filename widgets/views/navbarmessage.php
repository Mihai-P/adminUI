<?php
use yii\helpers\Url;
use tez\theme\assetsBundle\AdminUiAsset;

$bundle = AdminUiAsset::register($this);
?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	<i class="fa fa-envelope"></i>
	<span class="label label-success">4</span>
</a>
<ul class="dropdown-menu">
	<li class="header">You have 4 messages</li>
	<li>
		<!-- inner menu: contains the actual data -->
		<ul class="menu">
			<li><!-- start message -->
				<a href="#">
					<div class="pull-left">
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
							}?>"/>
					</div>
					<h4>
						Support Team
						<small><i class="fa fa-clock-o"></i> 5 mins</small>
					</h4>
					<p>Why not buy a new awesome theme?</p>
				</a>
			</li><!-- end message -->
			<li>
				<a href="#">
					<div class="pull-left">
						<img src="<?php echo $bundle->baseUrl?>/img/avatar2.png" class="img-circle" alt="user image"/>
					</div>
					<h4>
						AdminLTE Design Team
						<small><i class="fa fa-clock-o"></i> 2 hours</small>
					</h4>
					<p>Why not buy a new awesome theme?</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="pull-left">
						<img src="<?php echo $bundle->baseUrl?>/img/avatar.png" class="img-circle" alt="user image"/>
					</div>
					<h4>
						Developers
						<small><i class="fa fa-clock-o"></i> Today</small>
					</h4>
					<p>Why not buy a new awesome theme?</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="pull-left">
						<img src="<?php echo $bundle->baseUrl?>/img/avatar2.png" class="img-circle" alt="user image"/>
					</div>
					<h4>
						Sales Department
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
					</h4>
					<p>Why not buy a new awesome theme?</p>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="pull-left">
						<img src="<?php echo $bundle->baseUrl?>/img/avatar.png" class="img-circle" alt="user image"/>
					</div>
					<h4>
						Reviewers
						<small><i class="fa fa-clock-o"></i> 2 days</small>
					</h4>
					<p>Why not buy a new awesome theme?</p>
				</a>
			</li>
		</ul>
	</li>
	<li class="footer"><a href="#">See All Messages</a></li>
</ul>
