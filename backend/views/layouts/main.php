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
			<?php 
				$userModule = Yii::$app->getModule('user');
				 //var_dump(\Yii::$app->user->test()); 
				 //var_dump(\Yii::$app->user->isGuest); 
				 //var_dump(\Yii::$app->user->getId());
				 //var_dump(Yii::$app->user->test());
				 //print_r(Yii::$app->user);
				 //print_r($userModule);
			 ?>
			<!-- #section:basics/navbar.dropdown -->
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<!-- #section:basics/navbar.user_menu -->
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="images/user.jpg" />
							<?php if(!Yii::$app->user->isGuest) { ?>
							<span class="user-info"><small>Welcome,</small><?= \Yii::$app->user->identity->username ?></span>
							<?php } ?>
							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
							<li>
								<a href="index.php?r=user/security/login">
									<i class="ace-icon fa fa-cog"></i>
									Login
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="index.php?r=user/security/logout" >
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
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-cogs"></i>
						<span class="menu-text">管理员管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="active">
							<a href="index.php?r=user/admin/index"><i class="menu-icon fa fa-caret-right"></i>管理员列表</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=admin/group/index"><i class="menu-icon fa fa-caret-right"></i>分组管理</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-eye"></i>
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

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text">客户管理</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="active">
							<a href="index.php?r=customer%2Fcustomer%2Findex"><i class="menu-icon fa fa-caret-right"></i>客户列表</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=customer%2Fcustomer%2Fcreate"><i class="menu-icon fa fa-caret-right"></i>客户新增</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
				<!-- statistics -->
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-bar-chart-o"></i>
						<span class="menu-text">分析统计</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<li class="active">
							<a href="index.php?r=customer%2Fcustomer%2Findex"><i class="menu-icon fa fa-caret-right"></i>客户统计</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=customer%2Fcustomer%2Fcreate"><i class="menu-icon fa fa-caret-right"></i>渠道统计</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=customer%2Fcustomer%2Fcreate"><i class="menu-icon fa fa-caret-right"></i>订单统计</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=statis/piwik/keywords"><i class="menu-icon fa fa-caret-right"></i>搜索词统计</a>
							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="index.php?r=statis/piwik/geturl"><i class="menu-icon fa fa-caret-right"></i>页面统计</a>
							<b class="arrow"></b>
						</li>
					</ul>
				</li>
			</ul><!-- /.nav-list -->
		</div>

		<div class="main-content">
			<div class="breadcrumbs" id="breadcrumbs">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
			</div>
			<div class="page-content">
        			<?= $content ?>
			</div><!-- /.page-content -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->
    <?php $this->endBody() ?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//123.57.10.186/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//123.57.10.186/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

  </body>
</html>
<?php $this->endPage() ?>
