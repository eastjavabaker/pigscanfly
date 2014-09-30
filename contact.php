<?
session_start();
if(isset($_POST['submitted'])) {

$name = trim($_POST['name']);
$select = trim($_POST['select']);
$email = trim($_POST['email']);
$comment = trim($_POST['comment']);

$emailTo = "bbbooogggs@gmail.com";
$subject = 'Contact message from '.$name;			
$body = "Name: $name \n\n Email: $email \n\n Option Selected: $select \n\n  Message: $comment";
$headers = 'From: '. $name .' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
@mail($emailTo, $subject, $body, $headers);						
$emailSent = true;

}?>
  
            
            
<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="author" content="FamousThemes" />
        <meta name="description" content="My Mobile Page Version 3 Template" />
        <meta name="keywords" content="mobile templates, mobile wordpress themes, mobile themes, my mobile page, premium css templates, premium wordpress themes" />
        <title>Pigs Can Fly Photography by Ivan Joshua Loh</title>
        <link rel="shortcut icon" href="http://www.pigscanfly.com/assets/img/favicon.ico">
    
        <!-- Main CSS file -->
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <!-- Google web font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <!-- jQuery file -->
        <script src="js/jquery.min.js"></script>
        <!-- FlexSlider -->
        <script src="js/jquery.flexslider.js"></script>
        <!-- Main effects files -->
        <script src="js/effects.js"></script>
        <!-- jQuery Gallery -->
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.elastislide.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
        <noscript>
            <style>
                .es-carousel ul{
                    display:block;
                }
            </style>
        </noscript>
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
            </div>
        </script>
        <!-- PrettyPhoto -->
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <!-- jQuery Tabs -->
        <script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
			var $ = jQuery.noConflict();
			$(function() {
			$('#tabsmenu').tabify();
			$(".toggle_container").hide(); 
			$(".trigger").click(function(){
				$(this).toggleClass("active").next().slideToggle("slow");
				return false;
			});
			});
        </script>
        <!-- Hide Mobiles Browser Navigation Bar -->
        <script type="text/javascript">
            window.addEventListener("load",function() {
            // Set a timeout...
            setTimeout(function(){
            // Hide the address bar!
            window.scrollTo(0, 1);
            }, 0);
            });
        </script>
        <style>
			.video-container {
				position: relative;
				padding-bottom: 56.25%;
				padding:20px
				padding-top: 30px; height: 0; overflow: hidden;
			}
			 
			.video-container iframe,
			.video-container object,
			.video-container embed {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}
		</style>
    </head>
    <body id="page">
    	<div id="pagecontainer">
            <div id="header" class="black_gradient">
                <a href="index.html" class="back_button black_button">Home</a>
                <div class="page_title">Contact</div>
                <a href="#" id="menu_open" class="black_button">Menu</a>
                <a href="#" id="menu_close" class="black_button">Close</a>
                <div class="clear"></div>
            </div>
            <div id="pages_nav">
                <div class="icons_nav">
                    <div class="paginated"> <!--Remove this DIV if you want to remove the pagination-->
                        <ul class="slides">
                            <li>
                                <a href="about.html" class="icon">
                                	<img src="images/icons/icon_about.png" alt="" title="" border="0" />
                                   	<span>About</span>
                                </a>
                                <a href="project.html" class="icon">
                                	<img src="images/icons/icon_portfolio.png" alt="" title="" border="0" />
                                    <span>Project</span>
                                </a>
                                <a href="photos.html" class="icon">
                                	<img src="images/icons/icon_photos.png" alt="" title="" border="0" />
                                    <span>Photos</span>
                                </a>
                                <a href="videos.html" class="icon">
                                	<img src="images/icons/icon_video.png" alt="" title="" border="0" />
                                    <span style="font-size:90%;">Behind the Scene</span>
                                </a>
                            </li>
							<li>
                                 <a href="contact.html" class="icon">
                                	<img src="images/icons/icon_contact.png" alt="" title="" border="0" />
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>  <!--Remove this DIV if you want to remove the pagination-->
            	</div>
          	</div>
            
            <!-- Content-->
			<div class="content">
                <h1>CONTACT US</h1>
                <?php if(isset($emailSent) && $emailSent == true) { ?>
                    <h2>Thank you,</h2>
                    <p>Your message was sent successfully!</p>
            	<?php } else {?>
				<div class="form">
					<form  action="contact.php" method="post">
                        <label style="float:left"><img src="images/phone.png"></label>
                        <label style="font-size:xx-large;padding:4px 0px 0px">+65 93875407</label>
                        <br /><br />
                        <label>Name <font color="#FF0000">*</font>:</label>
                        <input type="text" class="form_input" name="name"/>
                        <label>Email Address <font color="#FF0000">*</font>:</label>
                        <input type="email" class="form_input" name="email"/>
                        <label>Message <font color="#FF0000">*</font></label>
                        <textarea class="form_textarea" name="message"></textarea>
                        
                        <input type="submit" class="form_submit" value="Submit" />
                    </form>
    	        </div>
                <?php } ?>
			</div>       
        </div> 
    </body>
</html>