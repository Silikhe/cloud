<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
// $this->params['breadcrumbs'][] = $this->title;
?>
<main>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>About Apprentice Cloud</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_120_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Why choose Apprentice Cloud</h2>
				<p>Bridging Deveopment Gap.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-diamond"></i>
						<h3>Qualified teachers</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-display2"></i>
						<h3>Equiped class rooms</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-science"></i>
						<h3>Advanced teaching</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-rocket"></i>
						<h3>Adavanced study plans</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-target"></i>
						<h3>Focus on target</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="#">
						<i class="pe-7s-graph1"></i>
						<h3>focus on success</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
					</a>
				</div>
			</div>
			<!--/row-->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Our Origins and Story</h2>
					<p>Where we started and what inspires us.</p>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="<?= Yii::$app->request->baseUrl ?>/theme/udema/img/course_y.jpg" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
						<p>Lorem ipsum dolor sit amet, homero erroribus in cum. Cu eos <strong>scaevola probatus</strong>. Nam atqui intellegat ei, sed ex graece essent delectus. Autem consul eum ea. Duo cu fabulas nonumes contentiones, nihil voluptaria pro id. Has graeci deterruisset ad, est no primis detracto pertinax, at cum malis vitae facilisis.</p>
						<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore <strong>percipitur definitiones</strong> ex, nihil utinam recusabo mel no. Dolores reprehendunt no sit, quo cu viris theophrastus. Sit unum efficiendi cu.</p>
						<p><em>CEO Marc Schumaker</em></p>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

		<div class="container margin_120_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our founders</h2>
				<p>People who have stood with us throught the process.</p>
			</div>
			<div id="carousel" class="owl-carousel owl-theme">
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Julia Holmes<em>CEO</em></h4>
						</div><img src="<?= Yii::$app->request->baseUrl ?>/theme/udema/img/1_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Andrew Stuttgart<em>Admissions</em></h4>
						</div><img src="<?= Yii::$app->request->baseUrl ?>/theme/udema/img/5_carousel.jpg" alt="">
					</a>
				</div>
			</div>
			<!-- /carousel -->
		</div>
		<!--/container-->
	</main>
	<!--/main-->