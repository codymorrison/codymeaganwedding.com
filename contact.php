<?
session_start();
if(isset($_POST['submitted'])) {

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);

$emailTo = "meaganclark@gmail.com";
$subject = 'Wedding contact message from '.$name;
$body = "Name: $name \n\n Email: $email \n\n Phone: $phone \n\n  Message: $comment";
$headers = 'From: '. $name .' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
@mail($emailTo, $subject, $body, $headers);
$emailSent = true;

}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="FamousThemes" />
<meta name="description" content="Get in the spotlight" />
<meta name="keywords" content="premium css templates, premium wordpress themes, famous themes, themeforest" />
<title>Cody and Meagan Wedding - 9/12/2015</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- Twitter Feed -->
<script src="js/twitter/jquery.tweet.js" charset="utf-8"></script>
<!-- Flickr Feed -->
<script src="js/jflickrfeed.min.js"></script>
<!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });

	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});


  });

  jQuery(function($){
	$(".tweet").tweet({
	  modpath: 'js/twitter/',
	  join_text: "auto",
	  username: "famousthemes",
	  count: 1,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
	$('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '31408169@N04'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
  });
</script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#form1").validate({
        rules: {
          name: "required",// simple rule, converted to {required:true}
          email: {// compound rule
          required: true,
          email: true
        },
        comment: {
          required: true
        }
        },
        messages: {
          comment: "Please enter a message."
        }
      });
    });
</script>
</head>
<body>
<div id="shadow_bg">
<div id="main_container">

	<a class="show_menu" href="#">menu</a>
    <a class="hide_menu" href="#">close menu</a>

    <div class="menu">
      <ul id="main_menu">
        <li><a class="selected" href="index.html">Home</a>
        </li>
        <li><a href="location.html">Wedding Location</a></li>
        <li><a href="amenities.html">Amenities</a>
          <ul>
            <li><a href="amenities.html#stay">Where to Stay</a></li>
            <li><a href="amenities.html#do">What to Do</a></li>
          </ul>
        </li>
        <!--<li><a href="rsvp.html">RSVP</a></li>-->
        <li><a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>


<div id="center_container">

  <div id="header">

     <div class="title"><a href="index.html">Cody &amp; Meagan</a></div>
     <div class="description"><span class="swirl_left"><span class="swirl_right">September 12th, 2015</span></span></div>

  </div><!-- End of Header-->


  <div class="pages_title">
  <h2>Get in Touch<span>With Us</span></h2>
  </div>

   <div class="content">


			<div class="form_content">

			<?php if(isset($emailSent) && $emailSent == true) { ?>

                    <h2>Thank you,</h2>

                    <p>Your message was sent successfully!</p>

            <?php } else {?>

                <form id="form1" method="post" action="contact.php">
                 <h3 class="form_subtitle">Send a message</h3>
          		<div class="form">
                    <div class="form_row">
                    <label>your name:</label>
                    <input type="text" class="form_input" name="name" />
                    </div>
                    <div class="form_row">
                    <label>your email:</label>
                    <input type="text" class="form_input" name="email" />
                    </div>
                    <div class="form_row">
                    <label>phone:</label>
                    <input type="text" class="form_input" name="phone" />
                    </div>
                    <div class="form_row">
                    <label>message:</label>
                    <textarea class="form_textarea" name="comment"></textarea>
                    </div>
                    <div class="form_row">
                    <input type="hidden" name="submitted" id="submitted" value="true" />
                    <input type="submit" class="form_submit_contact" value="Send Message" />
                    </div>
          		</div>

                </form>
            <?php } ?>

            </div>

        </div>

   		<div class="left13 sidebar">

			<h2>Wedding Location</h2>
<div class="gmap">
  <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d2794.6551357398907!2d-122.40679!3d45.537145!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x5495a2ae617645a7%3A0x9975eb0f90219342!2sMcMenamins+Edgefield%2C+2126+SW+Halsey+St%2C+Troutdale%2C+OR+97060!3m2!1d45.537144999999995!2d-122.40679!5e0!3m2!1sen!2sus!4v1416791975459"></iframe></div>





        </div>

        <div class="clear"></div>

   </div>

   <div class="clear"></div>

</div>

</div>
</div>


   <div class="footer">
       <div class="footer_content">
       <div class="footer_text">
       Marriage | Premium Wedding Template by <a href="http://famousthemes.com">Famous Themes</a> <br />
       Photos by <a href="http://antondemin.ru/" target="_blank">antondemin.ru</a>
       </div>
       <div class="footer_menu">
         <ul>
           <li><a href="index.html">Home</a>
           </li>
           <li><a href="location.html">Wedding Location</a>
           </li>
           <li><a href="amenities.html">Amenities</a>
           </li>
           <!--<li><a href="rsvp.html">RSVP</a>
         </li>-->
         <li class="selected"><a href="contact.php">Contact</a> 
         </li>
         <li><a onclick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );" href="javascript:void(0);" class="gotop" title="Go on top">TOP</a> </li>
       </ul>
     </div>
     <div class="clear"></div>
   </div>
       <div class="clear"></div>
       </div>

   </div>

<script type="text/javascript">
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>
</html>
