<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>

	<div id="page">

		<header class="header menu_2">
			<div id="preloader">
				<div data-loader="circle-side"></div>
			</div>
			<div id="logo">
				<a href="<?= Url::to(['/']) ?>"><img src="<?= Yii::$app->request->baseUrl ?>/theme/udema/img/logo.png" width="149" height="42" alt=""></a>
			</div>
			<ul id="top_menu">
				<li><a href="login.html" class="login">Login</a></li>
				<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
				<li class="hidden_tablet"><a href="<?= Url::to(['site/admission']) ?>" class="btn_1 rounded">Admission</a></li>
			</ul>
			<a href="#menu" class="btn_mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<nav id="menu" class="main-menu">
				<ul>
					<li><span><a href="#0">COURSES</a></span>
						<ul>
							<li><a href="<?= Url::to(['site/software']) ?>">Software Developme</a></li>
							<li><a href="<?= Url::to(['site/android']) ?>">Software Development parttime</a></li>
							<li><a href="<?= Url::to(['site/data']) ?>">Data Science</a></li>
						</ul>
					</li>
					<li><span><a href="<?= Url::to(['site/darshboard']) ?>">WHY APPRENTICE CLOUD</a></span>
				
					</li>
					<li><span><a href="<?= Url::to(['site/darshboard']) ?>">UPCOMING EVENTS</a></span>
				
					</li>
					<li><span><a href="<?= Url::to(['site/about']) ?>">ABOUT US</a></span>
					</li>
					<li><span><a href="<?= Url::to(['site/blogs']) ?>">BLOGS</a></span>
					</li>
				</ul>
			</nav>
			<!-- Search Menu -->
			<div class="search-overlay-menu">
				<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
				<form role="search" id="searchform" method="get">
					<input value="" name="q" type="search" placeholder="Search..." />
					<button type="submit"><i class="icon_search"></i>
					</button>
				</form>
			</div><!-- End Search Menu -->
		</header>
		<!-- /header --> 

		<div class="">
			<?= Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>

	<footer>
		<div class="container margin_120_95">
			<div class="row justify-content-between">
				<div class="col-lg-5 col-md-12">
					<p><img src="<?= Yii::$app->request->baseUrl ?>/theme/udema/img/logo.png" width="149" height="42" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Admission</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Login</a></li>
						<li><a href="#0">Register</a></li>
						<li><a href="#0">News &amp; Events</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 254 706 7777</a></li>
						<li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@aprenticecloud.com</a></li>
					</ul>
					<div id="newsletter">
						<h6>Newsletter</h6>
						<div id="message-newsletter"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
							<div class="form-group">
								<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
								<input type="submit" value="Submit" id="submit-newsletter">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© Aprentice Cloud</div>
				</div>
			</div>
		</div>
	</footer>
	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>