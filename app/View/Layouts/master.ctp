<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<?php echo $this->Html->meta(null, null, array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1')); ?>
		<?php echo $this->Html->meta(array('http-equiv '=>'X-UA-Compatible','content'=>'IE=edge'))?>
		<?php echo $this->fetch('meta'); ?>
		<!-- ========== Title ========== -->
		<title><?php echo 'MyanAnts | We Connect Service Providers'; ?></title>
	
		<?php echo $this->Html->charset(); ?>
		<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
		<?php echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1')); ?>
		<?php //echo $this->Html->meta(array('http-equiv '=>'X-UA-Compatible','content'=>'IE=edge'))?>
		<?php echo $this->Html->meta(array('name '=>'description','content'=>'MyanAnts is the No.1 Leading Home Service Provider in Yangon.It will provide services like AC Installation,Cleaning,Electrical and Plumbing.There’s more in MyanAnts which is available in Yangon.As foreign people are finding help for their homes,we have every services that you wanted.'))?>
		<?php echo $this->Html->meta(array('name '=>'keywords','content'=>'Home service provider, Home service provider in Yangon, No.1 & leading Home service provider, services, cleaning, electrical, plumbing'))?>
		<?php echo $this->Html->meta(array('name '=>'author','content'=>'myanants.com'))?>
		<?php //echo $this->fetch('meta'); ?>
		<link rel="shortcut icon" href="favicon.ico">

		<!-- ========== CSS ========== -->
		
		<?php echo $this->Html->css('//cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11/datatables.min.css'); ?>
		<?php echo $this->Html->css('bootstrap.min'); ?>
		<?php echo $this->Html->css('font-awesome.min'); ?>
		<?php echo $this->Html->css('nprogress'); ?>
		<?php echo $this->Html->css('custom.min'); ?>
		<?php echo $this->Html->css('green'); ?>
		<?php echo $this->Html->css('adstyle'); ?>
		<?php echo $this->Html->css('report'); ?>
		<?php echo $this->Html->css('message'); ?>
		<?php echo $this->Html->css('select2.min'); ?>
		<?php echo $this->Html->css('custombtntb'); ?>
		<?php echo $this->Html->script('jquery.min'); ?>
		<?php echo $this->Html->script('bootstrap.min'); ?>
		<?php echo $this->Html->script('select2.min'); ?>
		<?php echo $this->Html->script('datatables.min') ?>
		<?php echo $this->Html->script('datatable'); ?>
		<?php echo $this->Html->script('jquery-cloneya'); ?>
	
		
	</head>

<body data-spy="scroll">
	
	<!---//Facebook button code-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	

	<?php $user_id = AuthComponent::user('id'); ?>
	<!-- ******HEADER****** --> 
	<header id="header" class="header">  
		<div class="container">            
			<div class="hidden-sm hidden-xs col-md-3" style="margin-top: -3%;margin-bottom: -1%;">        
				<h1>
					<a href="http://myanants.com/staging">
						<img src='http://myanants.com/staging/img/mm.png' class="logoimg" />
					</a>
				</h1><!--//logo-->
			</div>    

			<div class="hidden-md hidden-lg col-md-3" style="margin-top: -3%;margin-bottom: -1%;">        
				<h1 class="logo pull-left">
					<a class="scrollto" href="http://myanants.com/staging">
						<img src='http://myanants.com/staging/img/mm.png' class="logoimg" />
					</a>
				</h1><!--//logo-->
			</div>

			<nav id="main-nav" class="main-nav navbar-right" role="navigation">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><!--//nav-toggle-->
				</div><!--//navbar-header-->            
				<div class="navbar-collapse collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a href="tel:09961868686">
								<img src='/staging/app/webroot/img/phone-icon.png' class="img-responsive phone-icon-sm" />
							</a>
						</li>
						<li class="nav-item">
							<?php if(empty($user_id)) : ?>
								<?php echo $this->Html->link("LOGIN", array('controller' => 'master_users', 'action' => 'login')) ;?>
							<?php else: ?>
								<?php echo $this->Html->link("LOGOUT", array('controller' => 'master_users', 'action' => 'logout')) ;?>
							<?php endif; ?>
						</li>
						<li class="nav-item">
							<?php if(empty($user_id)) : ?>
								<?php echo $this->Html->link("REGISTER", array('controller' => 'master_users', 'action' => 'add')) ;?>
							<?php endif; ?>
						</li>

						<li class="nav-item">
							<?php

								if ($this->Session->read('Config.language') == 'mya') {
									echo $this->Html->link('English', array('language'=>'eng'));
								} elseif($this->Session->read('Config.language') == 'eng') {
									echo $this->Html->link('ျမန္မာ', array('language'=>'mya'));
								}

							?>	
						</li>

					</ul><!--//nav-->
				</div><!--//navabr-collapse-->
			</nav><!--//main-nav-->
		</div>
	</header><!--//header-->
	
	<!-- ================Content Part==============================-->
	<?php echo $this->fetch('content'); ?>
	<!-- ================Footer==============================-->
	<!-- ******CONTACT****** --> 
	<section id="contact" class="contact section has-pattern">
		<div class="container">
			<div class="contact-inner">
				<div class="clearfix"></div>
				<div class="info text-center">
					<h4 class="sub-title">Get Connected</h4>
					<ul class="social-icons list-inline">
						<li><a href="https://www.facebook.com/MyanAnts/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.linkedin.com/company/13391896/"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/myanants/"><i class="fa fa-instagram"></i></a></li>              
					</ul>
				</div><!--//info-->
			</div><!--//contact-inner-->
		</div><!--//container-->
	</section><!--//contact-->  
	
	<!-- ******FOOTER****** --> 
	<footer class="footer">
		<div class="container text-center">
			<small class="copyright">© 2017 MyanAnts. All rights reserved.</small>
		</div><!--//container-->
	</footer><!--//footer-->
	 
	<!-- jQuery -->
		<?php //echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); ?>
		<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'); ?>

		<?php echo $this->Html->script('fastclick'); ?>
		<?php echo $this->Html->script('nprogress'); ?>
		<?php echo $this->Html->script('custom'); ?>
		<?php echo $this->Html->script('message'); ?>
		<?php echo $this->Html->script('logo'); ?>
</body>
</html> 

<script type="text/javascript">
	// $('select').on('change', function() {
	// 	location.replace("http://myanants.com/staging"+this.value+"/master_users/index");
	// })
</script>