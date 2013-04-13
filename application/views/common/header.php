
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<title>::Glocaleyz::</title>

<!-- header -->
<link rel="stylesheet" id="themify-styles-css" href="<?php echo base_url("public/glocaleyz/css/style.css"); ?>" type="text/css" media="all">
<link rel="stylesheet" id="themify-media-queries-css" href="<?php echo base_url("public/glocaleyz/css/media-queries.css"); ?>" type="text/css" media="all">

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
  <link rel="stylesheet" id="themify-styles-css" href="<?php echo base_url('public/nestedtab/vendor/bootstrap.min.css');?>" type="text/css" media="all">
	 <!-- SlidesJS Required: Link to jQuery -->
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 


  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="<?php echo base_url("public/glocaleyz/js/jquery.slides.min.js"); ?>"></script>
  <!--<script src="<?php echo base_url('public/nestedtab/vendor/jquery-1.7.1.min.js');?>" type="text/javascript"></script> -->
  <script src="<?php echo base_url('public/nestedtab/vendor/jquery.hashchange.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('public/nestedtab/lib/jquery.easytabs.min.js');?>" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo base_url("public/glocaleyz/css/example.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/glocaleyz/css/slideshow.css"); ?>">

  <style type="text/css">   
    .etabs { margin: 0; padding: 0; }
    .tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
    .tab a { font-size: 12px; line-height: 2em; display: block; padding: 0 7px; outline: none; }
    .tab a:hover { text-decoration: underline; }
    .tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #666; }
    .tab a.active { font-weight: bold; }
    .tab-container .panel-container { background: #fff;min-height:300px; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }
    .panel-container { margin-bottom: 10px; }
	    #slides {
      display: none
    }    
  </style>
<!-- For Perspective rotor -->

<script type="text/javascript">
(function($){
    $.fn.extend({ 
        //plugin name - rotaterator
        rotaterator: function(options) {
 
            var defaults = {
                fadeSpeed: 600,
                pauseSpeed: 100,
				child:null
            };
             
            var options = $.extend(defaults, options);
         
            return this.each(function() {
                  var o =options;
                  var obj = $(this);                
                  var items = $(obj.children(), obj);
				  items.each(function() {$(this).hide();})
				  if(!o.child){var next = $(obj).children(':first');
				  }else{var next = o.child;
				  }
				  $(next).fadeIn(o.fadeSpeed, function() {
						$(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {
							var next = $(this).next();
							if (next.length == 0){
									next = $(obj).children(':first');
							}
							$(obj).rotaterator({child : next, fadeSpeed : o.fadeSpeed, pauseSpeed : o.pauseSpeed});
						})
					});
            });
        }
    });
})(jQuery);

 $(document).ready(function() {
        $('#rotate').rotaterator({fadeSpeed:800, pauseSpeed:6000});
    });

$(document).ready(function() {
        $('#rotate-banner').rotaterator({fadeSpeed:800, pauseSpeed:6000});
    }); 


</script>

<!-- Perspective rotor end here -->

<!-- Front page rotor  -->
 <link rel="stylesheet" href="<?php echo base_url("public/glocaleyz/css/jshowoff.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("public/glocaleyz/js/jquery.jshowoff.min.js"); ?>"></script>
<!-- Front page rotor  end here -->

</head>

<body class="home blog">

<div id="pagewrap">

	<div id="headerwrap">

		<header id="header" class="pagewidth">
			<hgroup>
				<div id="site-logo"><a href="#"><img src="<?php echo base_url("public/glocaleyz/images/logo/logo.png"); ?>"></a></div>	
				
			</hgroup>
	
			<div id="main-menu">
				<ul id="main-nav" class="main-nav clearfix">
					<li><a href="#">Organization</a>				
					</li>
					<li><a href="#">Events</a>
						<ul class="children">
							<li><a href="#">Fullwidth</a>
							<ul class="children">
								<li><a href="#">Full – 2 Column</a></li>
								<li><a href="#">Full – 2 Column Thumb</a></li>
								<li><a href="#">Full – 3 Column</a></li>
								<li><a href="#">Full – 4 Column</a></li>
								<li><a href="#">Full – Large Image List</a></li>
								<li><a href="#">Full – Thumb Image List</a></li>
							</ul>
						</li>
							<li><a href="#">Sections</a>
							<ul class="children">
								<li><a href="#">Section 2 Column</a></li>
								<li><a href="#">Section 2 Column Thumb</a></li>
								<li><a href="#">Section 3 Column</a></li>
								<li><a href="#">Section 4 Column</a></li>
							</ul>
						</li>							
							
					</ul>
					</li>
					<li><a href="#">Articles</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Classifieds</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Help</a></li>
							<?php if($this->session->userdata('login')!=True) { echo '<li><a href="'.base_url("index.php/mgc/login").'" > Sign In</a></li>'; }else { echo '<li><a href="'.base_url("index.php/mgc/logout").'" > Sign Out</a></li>'; }?>
					
				<?php if($this->session->userdata('login')!=True) { echo '<li><a href="'.base_url("index.php/mgc/register").'"> Sign Up</a></li>'; }?>
					
					
					
				</ul><!-- /#main-nav --> 
				
			</div>
	
			<form method="get" id="searchform" action="#/">
			<input value="Search" class="placeholder" name="s" id="s" placeholder="Search" type="text">
			</form>				
			
		</header>
		<!-- /#header -->
				
	</div>
	<!-- /#headerwrap -->
	
	<div id="body" class="clearfix"> 

 <div id="frontpage-gallery"> 
<div id="features">
			
				<div>
				<img src="<?php echo base_url("public/glocaleyz/images/slide-image-1.jpg");?>"  class="rotor-image" />
				<h2>The MGC System</h2>
				<p>		
The MGC System is a one-stop shop for OO web presence, simple event promotion, automated appointment booking, membership management, product and service promotion and sales, private messaging with leads, customers, and members, and a step into the world of collaborative production.

				</p>
				<p><a href="#">Learn More &#8250;</a></p>
				</div>	
				<div>
				<img src="<?php echo base_url("public/glocaleyz/images/slide-image-2.jpg");?>"  class="rotor-image" />
				<h2>MGC: A Unique Experience</h2>
				<p>	
The MGC System aims to provide a unique experience for its visitors and members who will prefer to spend time with MGC than other places. One of the unique items is the MGC directory. Organizations, members, events, articles, news, and classifieds display in the sidebar with MGC Summary Pages providing details in the center block. The search and filter tools in the MGC System enable the site visitor to easily locate products, services, published articles, press releases (news), classified ads. and more concerning the organizations within GLOCALEYZ. There are great opportunities for Organization Developers today. Check out the Do Something New on FaceBook (c) 2013 for details.

				</p>
				<p><a href="#">Learn More &#8250;</a></p>
				</div>	
				
					
				<div>
				<img src="<?php echo base_url("public/glocaleyz/images/slide-image-3.jpg"); ?>"  class="rotor-image" />
				<h2>The birth of a new idea</h2>
				<p>	
MGC Internet Community Incorporation is a legal US corporation established in December 2012 within the authority of the State of Maryland. Contained within the MGC concept is a non-profit organization that assists Americans receiving sources of local, state, or federal assistance and are currently unemployed or underemployed. This non-profit will operate as MGC Workforce America. Soon, the public can donate money to assist the hiring of Americans need employment. MGC Workforce One provides micro-loans to organizations outside the U.S. to assist small ventures outside the U.S. Please donate to help people help themselves.

				</p>
				<p><a href="#">Learn More &#8250;</a></p>
				</div>
				
				
			</div>
			<script type="text/javascript">		
				$(document).ready(function(){ $('#features').jshowoff(); });
			</script>  
  
<script type="text/javascript">
// fix pre overflow in IE
(function ($) {
	$.fn.fixOverflow = function () {
		if ($.browser.msie) {
			return this.each(function () {
				if (this.scrollWidth > this.offsetWidth) {
					$(this).css({ 'padding-bottom' : '20px', 'overflow-y' : 'hidden' });
				}
			});
		} else {
			return this;
		}
	};
})(jQuery);
$('pre').fixOverflow();
</script>
  

</div>
	
<!-- layout -->
<div id="layout" class="pagewidth clearfix sidebar1">