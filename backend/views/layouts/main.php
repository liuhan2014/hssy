<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body  class="no-skin">
    <?php $this->beginBody() ?>
	<div id="navbar" class="navbar navbar-default">
		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
				<span class="sr-only">Toggle sidebar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- /section:basics/sidebar.mobile.toggle -->
			<div class="navbar-header pull-left">
				<a href="#" class="navbar-brand"><small><i class="fa fa-leaf"></i>Agg-CMS</small></a>
			</div>

			<!-- #section:basics/navbar.dropdown -->
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="images/user.jpg" />
							<span class="user-info"><small>Welcome,</small>Admin</span>
							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					<!-- /section:basics/navbar.user_menu -->
				</ul>
			</div>
			<!-- /section:basics/navbar.dropdown -->
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container" id="main-container">
		<!-- #section:basics/sidebar -->
		<div id="sidebar" class="sidebar responsive">
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success"><i class="ace-icon fa fa-signal"></i></button>
					<button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>
					<button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>
					<button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>
				</div>
			</div><!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list">
				<li class="">
					<a href="index.html">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text">管理员管理</span>
					</a>
					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text">渠道管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="active">
							<a href="index.php?r=source%2Fsource%2Findex"><i class="menu-icon fa fa-caret-right"></i>渠道列表</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=source%2Fsource%2Fcreate"><i class="menu-icon fa fa-caret-right"></i>添加新渠道</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul><!-- /.nav-list -->
		</div>

		<div class="main-content">
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs" id="breadcrumbs">
						<?= Breadcrumbs::widget([
					             'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					         ]) ?>
						</div>
        					<?= $content ?>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
