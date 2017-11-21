<!DOCTYPE html>
<html lang="en">
<head>
	<title>Free Bootstrap Theme for Developers</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">    
	<link rel="shortcut icon" href="favicon.ico">  

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>	

	<?php echo $this->Html->css('home/bootstrap/css/bootstrap.min'); ?>
	<?php echo $this->Html->css('home/font-awesome/css/font-awesome'); ?>
	<?php echo $this->Html->css('home/prism/prism'); ?>
	<?php echo $this->Html->css('styles'); ?>
	<?php echo $this->Html->css('mobile'); ?>
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
	
	<!-- ******HEADER****** --> 
	<header id="header" class="header">  
		<div class="container">            
			<div class="hidden-sm hidden-xs col-md-3" style="margin-top: -3%;margin-bottom: -1%;">        
				<h1>
					<a class="scrollto" href="http://myanant.com/">
						<img src='http://myanant.com/img/mm.png' class="logoimg" />
					</a>
				</h1><!--//logo-->
			</div>    

			<div class="hidden-md hidden-lg col-md-3" style="margin-top: -3%;margin-bottom: -1%;">        
				<h1 class="logo pull-left">
					<a class="scrollto" href="http://myanant.com/">
						<img src='http://myanant.com/img/mm.png' class="logoimg" />
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
						<li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
						<li class="nav-item"><a class="scrollto" href="#about">LOGIN</a></li>
						<li class="nav-item"><a class="scrollto" href="#features">REGISTER</a></li>
						<li class="nav-item">
							<a class="scrollto" href="#docs">
								<p>
									<?php echo $this->html->link('English', array('language'=>'eng')); ?>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="scrollto" href="#docs">
								<p>
									<?php echo $this->html->link('Myanmar', array('language'=>'mya')); ?>
								</p>
							</a>
						</li>

					</ul><!--//nav-->
				</div><!--//navabr-collapse-->
			</nav><!--//main-nav-->
		</div>
	</header><!--//header-->
	
	<!-- ******PROMO****** -->
	<section id="promo" class="promo section offset-header">
		<div class="container text-center">
			<!-- <h2 class="hidden-sm hidden-xs title">Myan<span class="highlight">Ants</span></h2> -->
			<p class="hidden-sm hidden-xs intro">
				Are you looking for Aircon Servicing , Home Cleaning , Plumbing ,Electrical and Wiring Fixing ?
				<br/>Whatever you need , MyanAnts  is here ! !
				<br/>Please choose from our popular services below.
			</p>

			<div class="btns">
				<a class="btn btn-cta-primary" href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">
					Air Conditioner Maintenance
				</a>
				<a class="btn btn-cta-primary" href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">
					Cleaning
				</a>
				<a class="btn btn-cta-primary" href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">
					Electrical and Wiring
				</a>
				<a class="btn btn-cta-primary" href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">
					Other Services
				</a>
			</div>
			<ul class="meta list-inline">
			</ul><!--//meta-->
		</div><!--//container-->

		<div class="social-media">
			<div class="social-media-inner container text-center">
				<ul class="list-inline">

					<li class="twitter-follow">
						<a href="https://www.facebook.com/MyanAnts/" class="twitter-follow-button" data-show-count="false">Facebook</a>
					</li><!--//twitter-follow-->

					<li class="twitter-tweet">
						<a href="https://www.linkedin.com/company/13391896/" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">LinkedIn</a>
					</li><!--//twitter-tweet-->
				</ul>
			</div>
		</div>
	</section><!--//promo-->
	
	<!-- ******ABOUT****** --> 
	<section id="about" class="about section">
		<div class="container">
			<h2 class="title text-center">What is MyanAnts?</h2>
			<p class="intro text-center">

				<?php echo __('Myanants'); ?>
				<?php echo __('hello1'); ?>

			</p>
			<div class="row">
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-heart"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">Designed for developers</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-clock-o"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">Time saver</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-crosshairs"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">UX-centred</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->           
				<div class="clearfix visible-md"></div>    
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">Mobile-friendly</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->                
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-code"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">Easy to customise</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->
				<div class="item col-md-4 col-sm-6 col-xs-12">
					<div class="icon-holder">
						<i class="fa fa-coffee"></i>
					</div>
					<div class="content">
						<h3 class="sub-title">LESS files included</h3>
						<p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
					</div><!--//content-->
				</div><!--//item-->               
			</div><!--//row-->            
		</div><!--//container-->
	</section><!--//about-->
	
	<!-- ******FEATURES****** --> 
	<section id="features" class="features section">
		<div class="container text-center">
			<h2 class="title">Features</h2>
			<ul class="feature-list list-unstyled">
				<li><i class="fa fa-check"></i> Fully responsive</li>
				<li><i class="fa fa-check"></i> HTML5 + CSS3</li>
				<li><i class="fa fa-check"></i> Built on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3</a></li>
				<li><i class="fa fa-check"></i> 400+ FontAwesome icons</li>
				<li><i class="fa fa-check"></i> 4 colour schemes</li>
				<li><i class="fa fa-check"></i> LESS files included</li>
				<li><i class="fa fa-check"></i> Compatible with all modern browsers</li>
			</ul>
		</div><!--//container-->
	</section><!--//features-->
	
	<!-- ******DOCS****** --> 
	<section id="docs" class="docs section">
		<div class="container">
			<div class="docs-inner">
			<h2 class="title text-center">Get Started</h2>            
			<div class="block">
				<h3 class="sub-title text-center">HTML</h3>
				<p><a href="http://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here.</p>
				<p>Below are the details of the custom PrismJS build used in this template. You can <a href="http://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.</p>
				<ul class="list-unstyled">
					<li><strong>Compression level:</strong> Minified</li>
					<li><strong>Theme:</strong> Okaidia</li>
					<li><strong>Languages:</strong> Markup, CSS, C-like, JavaScript, PHP and Python</li>
				</ul>
				<div class="code-block">
					<!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
					<pre><code class="language-markup">
	&ltp class="my-style"&gt
	  Hello World!
	&lt/p&gt
					 </code></pre>
				</div><!--//code-block-->
			</div><!--//block-->
			
			<div class="block">
				<h3 class="sub-title text-center">CSS</h3>
				<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
				
				<div class="code-block">
					<!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
					<pre>
						<code class="language-css">
						/*   
						 * Template Name: devAid - Responsive Website Template for developers
						 * Version: 1.1
						 * Author: Xiaoying Riley at 3rd Wave Media
						 * Website: http://themes.3rdwavemedia.com/
						 * Twitter: @3rdwave_themes
						*/
						body {
						  font-family: 'Lato', arial, sans-serif;
						  color: #444444;
						  font-size: 16px;
						  -webkit-font-smoothing: antialiased;
						  -moz-osx-font-smoothing: grayscale;
						}
						</code>
					</pre>
				</div><!--//code-block-->
			</div><!--//block-->
			
			<div class="block">
				<h3 class="sub-title text-center">JavaScript</h3>
				<p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit ligula eget dolor.</p>
				<div class="code-block">
					<pre><code class="language-javascript">
						<?php
						// if( awesome ){
						// 	console.log('This is Awesome');
						// }else{
						// 	$('body').addClass('give-me-awesome');
						// }
						?>
					</code></pre>
				</div><!--//code-block-->
			</div><!--//block-->   
			<div class="block">
				<h3 class="sub-title text-center">Full Documentation</h3>
				<p>If your documentation is very long you can host the full docs page (including FAQ etc) on GitHub and provide a Call to Action button below to direct users there.</p>
				<p class="text-center">
					<a class="btn btn-cta-primary" href="https://github.com/xriley/devAid-Theme" target="_blank">More on GitHub</a>
				</p>
			</div><!--//block-->
			
			</div><!--//docs-inner-->         
		</div><!--//container-->
	</section><!--//features-->
	
	<!-- ******LICENSE****** --> 
	<section id="license" class="license section">
		<div class="container">
			<div class="license-inner">
			<h2 class="title text-center">License</h2>
				<div class="info">
					<p>This Bootstrap theme is made by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at 3rd Wave Media for developers and is <strong>100% FREE</strong> under the <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License (CC BY 3.0)</a></p>
					<p><strong>[Tip for developers]:</strong> If your project is open source, you might want to put a <a href="https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside" target="_blank">PayPal "Donate" button</a> below so your users can express their gratitude. If your project is commercial, you can put a <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_singleitem-intro-outside" target="_blank">PayPal "Buy Now" button</a> instead.</p>
				</div><!--//info-->
				<div class="cta-container">
					<div class="speech-bubble">                    
						<p class="intro">If you are feeling generous and want to show your support to Xiaoying, you can buy her a beer or coffee via the PayPal donate button below. :)</p>
						<div class="icon-holder  text-center"><i class="fa fa-smile-o"></i></div>
					</div><!--//speech-bubble-->
					<div class="btn-container  text-center">
						<!--//You need to generate your own PayPal button - https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside -->         
						<!--PayPal generated code starts-->
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="Y46LJNXGAVVWW">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
						</form>
						<!--//PayPal generated code ends-->                    
						
					</div><!--//btn-container-->
				</div><!--//cta-container-->
			</div><!--//license-inner-->
		</div><!--//container-->
	</section><!--//how-->
	
	<!-- ******CONTACT****** --> 
	<section id="contact" class="contact section has-pattern">
		<div class="container">
			<div class="contact-inner">
				<h2 class="title  text-center">Contact</h2>
				<p class="intro  text-center">I hope you find this Bootstrap template useful. <br />Feel free to get in touch if you have any questions or suggestions.</p>
				<div class="author-message">                      
					<div class="profile">
						<img class="img-responsive" src="img/images/profile.png" alt="" />
					</div><!--//profile-->
					<div class="speech-bubble">
						<h3 class="sub-title">Want to get more freebies in the future?</h3>
						<p>I tweet about #UX and #webdev related resources/content at <a href="https://twitter.com/3rdwave_themes" target="_blank">@3rdwave_themes</a> 
						<p>If you like what I do, you can follow me on twitter and I will keep you informed about my next free template there :)</p>
						<p><strong>[Tip for developers]:</strong> If you take on freelance work you can put a tailored message here about your availability to attract potential clients. Be creative and good luck!</p> 
						<div class="source">
							<span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a></span>
							<br />
							<span class="title">UX/UI Designer</span>
						</div><!--//source-->
					</div><!--//speech-bubble-->                        
				</div><!--//author-message-->
				<div class="clearfix"></div>
				<div class="info text-center">
					<h4 class="sub-title">Get Connected</h4>
					<ul class="social-icons list-inline">
						<li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/3rdwavethemes" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.linkedin.com/in/xiaoying"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="http://instagram.com/xyriley"><i class="fa fa-instagram"></i></a></li>  
						<li><a href="https://dribbble.com/Xiaoying"><i class="fa fa-dribbble"></i></a></li>   
						<li class="last"><a href="mailto:hello@3rdwavemedia.com"><i class="fa fa-envelope"></i></a></li>              
					</ul>
				</div><!--//info-->
			</div><!--//contact-inner-->
		</div><!--//container-->
	</section><!--//contact-->  
	  
	<!-- ******FOOTER****** --> 
	<footer class="footer">
		<div class="container text-center">
			<small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		</div><!--//container-->
	</footer><!--//footer-->
	 
	<?php echo $this->Html->script('home/jquery-1.11.3.min'); ?>   
	<?php echo $this->Html->script('home/jquery.easing.1.3'); ?>   
	<?php echo $this->Html->script('home/bootstrap/js/bootstrap.min'); ?>   
	<?php echo $this->Html->script('home/jquery-scrollTo/jquery.scrollTo.min'); ?>   
	<?php echo $this->Html->script('home/prism/prism'); ?>   
	<?php echo $this->Html->script('home/main'); ?>   
</body>
</html> 