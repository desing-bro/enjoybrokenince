<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Broken Rice | A Vietnamese / California fusion fare</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,800" rel="stylesheet">
<link rel="icon" type="image/png" href="images/favicon.ico">
 <link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '130998024176143'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=130998024176143&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code --></head>

<body>

<header>
	<div id="navigation">
    	<div class="container">
            <ul>
            	<a href="index.php"><li class="nav_logo"><img src="images/logo_small.png"></li></a>
                <a href="about.php"><li class="nav_item" id="about_nav">About</li></a>
                <a href="locations.php"><li class="nav_item" id="location_nav">Locations &amp; Menus</li></a>
                <!-- <a href="news.php"><li class="nav_item" id="news_nav">News</li></a> -->
                <a href="press.php"><li class="nav_item" id="news_nav">Press</li></a>
                <a href="offers.php"><li class="nav_item" id="offers_nav">Offers</li></a>
                <a href="careers.php"><li class="nav_item" id="careers_nav">Careers</li></a>
                <a href="contact.php"><li class="nav_item" id="contact_nav">Contact</li></a>
            </ul>
            <div id="social_nav">
                <a href="https://www.yelp.com/biz/broken-rice-denver" target="_blank"><div id="yelp"></div></a>
                <a href="https://www.facebook.com/EnjoyBrokenRice" target="_blank"><div id="facebook"></div></a>
                <a href="http://twitter.com/enjoybrokenrice" target="_blank"><div id="twitter"></div></a>
                <a href="https://www.instagram.com/enjoybrokenrice/" target="_blank"><div id="instagram"></div></a>
            </div>
            <div id="nav_button">
            	<div class="nav_bar"></div>
                <div class="nav_bar"></div>
                <div class="nav_bar"></div>
            </div>
            <div id="nav_mini">
            	<ul>
                    <a href="about.php"><li id="about_nav">About</li></a>
                    <a href="locations.php"><li id="location_nav">Locations &amp; Menus</li></a>
                    <!-- <a href="news.php"><li id="news_nav">News</li></a> -->
                    <a href="press.php"><li id="news_nav">Press</li></a>
                    <a href="offers.php"><li id="offers_nav">Offers</li></a>
                    <a href="careers.php"><li id="careers_nav">Careers</li></a>
                    <a href="contact.php"><li id="contact_nav">Contact</li></a>
                    <li id="close_nav">Close</li>
                </ul>
            </div>
		</div>
    </div>
</header>    <div id="contact">
        <div id="banner_small">
        </div>
        <div id="main">
            <div class="container">
                <div class="title">
                    <h1 class="main_title">CONTACT</h1><hr>
                    <div class="clear"></div>
                </div>
                            <form id="contact_form" action="" method="post">
                    <div id="contact_first_name"><input name="first_name" type="text" class="contact_input" value="" placeholder="first name" border="0"></div>
                    <div id="contact_last_name"><input name="last_name" type="text" class="contact_input" value="" placeholder="last name" border="0"></div>
                    <div id="contact_email"><input name="email" type="email" class="contact_input" value="" placeholder="email" border="0"></div>
                    <div id="contact_message"><textarea name="message" class="contact_textarea" value="" placeholder="message" border="0"></textarea></div>
                    <input type="submit" class="contact_submit" value="SUBMIT" border="0">
                </form>
                <hr>
                <div class="contact_location">
                	<br>
                </div>
                <div class="contact_location">
                	<b>Broken Rice</b><br>
                    1390 S. Colorado Blvd.<br>
                    Denver, CO.<br>
                    T: 720.399.6698<br>
                  	Sun - Thu: 11:00am - 9:00pm<br>
                    Fri - Sat: 11:00am - 10:00pm
                </div>
                <div class="contact_location">
                	<br>
                </div>
                <hr>
            </div>
        </div>
        <div id="main_photo_small">
        </div>
    </div>
    <style>
		.nav_logo { display: inline-block!important; }
	</style>
    <script type="text/javascript">
        $(function() {

          // $.validator.setDefaults({
          //   errorClass: 'help-block',
          //   highlight: function(element) {
          //     $(element).closest('.form-group').addClass('has-error');
          //   },
          //   unhighlight: function(element) {
          //     $(element).closest('.form-group').removeClass('has-error');
          //   }
          // });

          $("#contact_form").validate({
            rules: {
              first_name: {
                required: true
              },
              last_name: {
                required: true
              },
              email: {
                required: true,
                email: true
              },
              message : {
                required: true
              }
            },
            messages: {
              first_name: {
                required: "Please enter your first name."
              },
              last_name: {
                required: "Please enter your last name."
              },
              email: {
                required: "Please enter your email.",
                email : "Please enter a valid email."
              },
              message: {
                required: "Please enter your message."
              }
            }
          });
        });
    </script>
<footer>
	<div id="back_to_top"></div>
    <div class="container">
        <div class="footer_column">
            <ul>
                <a href="about.php"><li id="about_nav">About</li></a>
                <a href="locations.php"><li id="location_nav">Locations &amp; Menus</li></a>
                <!-- <a href="news.php"><li id="news_nav">News</li></a> -->
                <a href="press.php"><li id="news_nav">Press</li></a>
                <a href="offers.php"><li id="offers_nav">Offers</li></a>
                <a href="careers.php"><li id="careers_nav">Careers</li></a>
                <a href="contact.php"><li id="contact_nav">Contact</li></a>
            </ul>
        </div>
        <div class="footer_column">
        	<br>
        </div>
        <div class="footer_column">
        	<br>
        </div>
        <div class="footer_column">
            <b>Broken Rice</b><br>
            1390 S. Colorado Blvd.<br>
            Denver, CO.<br>
            T: 720.399.6698<br>
           Sun - Thu: 11:00am - 9:00pm<br>Fri - Sat: 11:00am - 10:00pm
        </div>
        <div class="clear"></div>
	</div>
    <div id="footer_bottom">
    	<div class="container">
            <div id="social_nav">
                <a href="https://www.yelp.com/biz/broken-rice-denver" target="_blank"><div id="yelp"></div></a>
                <a href="https://www.facebook.com/EnjoyBrokenRice" target="_blank"><div id="facebook"></div></a>
                <a href="http://twitter.com/enjoybrokenrice" target="_blank"><div id="twitter"></div></a>
                <a href="https://www.instagram.com/enjoybrokenrice/" target="_blank"><div id="instagram"></div></a>
            </div>
            <div id="footer_signup">
            	<form>
                    <input type="text" class="signup" value="" border="0">
                    <input type="submit" class="submit" value="submit" border="0">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <hr>
    <div id="copyright">
    	<div class="container">
        	<p>&copy; <script>document.write(new Date().getFullYear())</script> Broken Rice.</p><a href="index.php"><img src="images/logo_small.png"></a>
        </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>

<script>
	$('#back_to_top').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});
	$('#nav_button').click(function(){
		$("#nav_mini").toggle();
		return false;
	});
	$('#close_nav').click(function(){
		$("#nav_mini").toggle();
		return false;
	});

	$(window).scroll(function(){

	var a = 100;
	var pos = $(window).scrollTop();

	if(pos > a) {
		$(".nav_logo").css({
			display: 'inline-block', margin: '0px 35px 0 0'
		});
		$("header li.nav_item").css({
			margin: '8px 35px 0 0'
		});
	}
	else {
		$(".nav_logo").css({
			display: 'none',
		});
		$("header li.nav_item").css({
			margin: '8px 35px 0 0'
		});
	}
	});

	$(window).scroll(function() {
		if ($(this).scrollTop()>0)
		{
			$('#nav_mini').fadeOut();
		}
	});
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88134163-1', 'auto');
  ga('send', 'pageview');

</script>