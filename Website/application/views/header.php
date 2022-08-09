<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html><!--  Last Published: Tue Aug 02 2022 16:30:02 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62e2d0635effa7791366d24d" data-wf-site="6299ab0efe185171423aaf3e">
<head>
  <meta charset="utf-8">
  <title>Ripple Search - You Surf the Web - We Fight Hunger</title>
  <meta property="og:image" content="<?php echo base_url().'assets/';?>images/favicon.png" />
  <meta content="A Search Platform Focused on Funding Solutions for Global Hunger.  Join our community today to become apart of the change as we make ripples together." name="description">
  <meta content="Ripple Search - You Surf the Web - We Fight Hunger" property="og:title">
  <meta content="A Search Platform Focused on Funding Solutions for Global Hunger.  Join our community today to become apart of the change as we make ripples together." property="og:description">
  <meta content="Ripple Search - You Surf the Web - We Fight Hunger" property="twitter:title">
  <meta content="A Search Platform Focused on Funding Solutions for Global Hunger.  Join our community today to become apart of the change as we make ripples together." property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="<?php echo base_url().'assets/';?>css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().'assets/';?>css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url().'assets/';?>css/ripplesearch.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Roboto:300,regular,500","Comfortaa:300,regular,500,600,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo base_url().'assets/';?>images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url().'assets/';?>images/webclip.png" rel="apple-touch-icon">
  <style type"text="" css"="">
  * {
    margin: 0;
    padding: 0;
    font-family: 'Varela Round', sans-serif;
    text-decoration: none;
    color: inherit;
}
.hero{
    width: 100%;
    height: 10vh;
    background: transparent;
    display: flex;
    align-items: top;
    justify-content: center;
}
#searchBox{
    border-radius: 40px;
    padding: 5px 5px;
    background: rgba(255,255,255,0.9);
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    /*box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
                -6px -6px 10px -1px rgba(255,255,255,0.7);*/
  border: none;
    justify-content: space-between;
}
#list{
    width: 90%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    background: rgba(255,255,255,1);
    border-radius: 10px;
    box-shadow: 6px 6px 10px -1px rgb(0 0 0 / 15%), 
      -6px -6px 10px -1px rgb(113 113 113 / 34%);
    overflow: hidden; 
}
#Logo{
    width: 45px;
    cursor: pointer;
}
.mic-icon{
    width: 0px;
    padding: 0px;
    transition: 0.5s;
    transition-delay: 0.2s;
}
.search-icon{
    width: 0px;
    transition: 0.5s;
    transition-delay: 0.2s;
}
.x-icon{
    width: 0px;
    padding: 0px;
}
input{
    font-size: 20px;
    border: 0;
    background: transparent;
    outline: none;
    transition: 1.5s;
}
#
.active input[type="text"]{
    width: 400px;
    padding: 5px 10px;
}
.active .mic-icon{
    width: 32px;
    cursor: pointer;
}
.active .x-icon{
    width: 32px;
    cursor: pointer;
}
.active .mic-icon:hover,
.active .mic-icon:focus {
    transform: scale(1.5);
    filter: invert(15%) sepia(93%) saturate(5521%) hue-rotate(351deg) brightness(74%) contrast(116%);
}
.active .search-icon{
    width: 32px;
    cursor: pointer;
}
.active .search-icon:hover{
    transform: scale(1.5);
}
.options{
    font-size: 20px;
    width: 100%;
    list-style: none;
    cursor: pointer;
    box-sizing: border-box;
    position: relative;
}
.options a{
    color:#000;
    display: flex;
    padding: 0 20px;
    text-decoration: none;
}
.options a:hover{
    color:#000;
}
.options:hover{
    background: #73B7FD;
}
.hide{
    visibility: hidden;
}
.active .search-icon {
  width: 30px !important;
  margin:0 8px;
}
#searchBox input[type="text"]{
    border: transparent;
    padding: 0 ;
    /*display: none;*/
    /*transition: all 300ms ease !important;*/;
}
#searchBox.active input[type="text"]{
    display: block;
    border: 0px solid #ddd !important;
    width: 300px !important;
    font-size: 18px !important;
    margin-left: 10px;
    color:#000;
}
#myForm {z-index: 999;}
  .hero {}
  .hero #myForm {}
  .hero #myForm .selector{}
  .hero #myForm .selector{}
  .hero #myForm .selector #list{padding: 0;}
  .hero #myForm .selector #list li{}
  .hero #myForm .selector #list li p{}
  .hero #myForm .selector #list li p a{}

.modal-login {		
	color: #636363;
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;   
	position: relative;
	justify-content: center;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-login .form-control:focus {
	border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	justify-content: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
}
.modal-login .modal-footer a {
	color: #999;
}		
.modal-login .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #2078b7;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-login .avatar img {
	width: 100%;
}
.modal-login.modal-dialog {
	margin-top: 80px;
}
.modal-login .btn, .modal-login .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #2078b7 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #45aba6 !important;
	outline: none;
}
</style>
  <script src="https://cdn.mojoauth.com/js/mojoauth.min.js">
      </script>
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navigation-bar w-nav">
    <div class="w-container">
      <a href="<?php echo base_url().'home/search';?>" class="brand-link w-nav-brand"><img sizes="(max-width: 479px) 76vw, 155px" width="155" srcset="<?php echo base_url().'assets/';?>images/logo2-p-500.png 500w, <?php echo base_url().'assets/';?>images/logo2-p-800.png 800w, <?php echo base_url().'assets/';?>images/logo2-p-1080.png 1080w, <?php echo base_url().'assets/';?>images/logo2.png 1536w" src="<?php echo base_url().'assets/';?>images/logo2.png" loading="lazy" alt=""></a>
      <nav role="navigation" class="navigation-menu w-nav-menu">
        <a href="<?php echo base_url().'home/search';?>" aria-current="page" class="navigation-link w-nav-link <?php if ($active == 'search') {?> w--current <?php } ?>">Search</a>
        <?php if (!isset($_SESSION[SITE])) {?>
        <a href="<?php echo base_url().'home/ripples';?>" class="navigation-link w-nav-link <?php if ($active == 'ripples') {?> w--current <?php } ?>">Join</a>
        <?php } ?>
        <a href="<?php echo base_url().'home/ripples#howitworks';?>" class="navigation-link w-nav-link">How It Works</a>
        <a href="<?php echo base_url().'home/ripples#FAQ';?>" class="navigation-link w-nav-link">FAQs</a>
        <a href="<?php echo base_url().'home/privacy';?>" class="navigation-link w-nav-link <?php if ($active == 'privacy') {?> w--current <?php } ?>">Privacy Policy</a>
        <a href="<?php echo base_url().'home/contact';?>" class="navigation-link w-nav-link <?php if ($active == 'contact') {?> w--current <?php } ?>">Contact Us</a>

        <?php if (isset($_SESSION[SITE])) {?>
        <a id="btn_logout" href="<?php echo base_url().'home/logout';?>" class="navigation-link w-nav-link">Logout</a>
    <?php } else { ?>         
        <a href="#loginModal" data-toggle="modal" class="navigation-link w-nav-link">Login</a>
      <?php } ?>
      </nav>
      <div class="hamburger-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>

<!-- Modal HTML -->
<div id="loginModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form id="form_login" method="post">
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>
					<div class="form-group">
						<p id="login_msg" style="text-align: center; visibility: hidden;"></p>
					</div>    
					<div class="form-group">
						<button id="btn_login" type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<!-- <div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div> -->
		</div>
	</div>
</div>  
<div id="signupModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align: center;">		
				<p class="modal-title" style="font-size: 26px; font-weight: bold; vertical-align: middle; display: inline-block;">SignUp</p>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form id="form_signup" method="post">
					<p style="text-align: center;font-size: 15px;font-weight: bold;color: #2196F3;">Help Us Reach 50,000 Meals!</p>
					<p style="text-align: center;font-size: 15px;font-weight: bold;color: #2196F3;">Just by joining our email community we provide 7 meals.</p>
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">		
					</div>
					<div class="form-group">
						<input id="signup_password" type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>
					<div class="form-group">
						<input id="signup_password_conf" type="password" class="form-control" name="password_conf" placeholder="Confirm Password" required="required">	
					</div>
					<div class="form-group">
						<p id="signup_msg" style="text-align: center; visibility: hidden;"></p>
					</div>
					<div class="form-group">
						<button id="btn_signup" type="submit" class="btn btn-primary btn-lg btn-block login-btn">Signup</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div> 

<script type="text/javascript">
        $(document).ready(function() {
        	var url_signup = "<?php echo base_url().'home/do_signup';?>";
            $('#form_signup').submit(function(e) {
                e.preventDefault();
                var pass = $('#signup_password').val();
                var pass_conf = $('#signup_password_conf').val();
                if (pass != pass_conf) {
                	$('#signup_msg').html("Password doesn't match!");
                	$('#signup_msg').css("color", 'red');
                	$('#signup_msg').css("visibility", 'visible');
                	return;
                }
                $('#signup_msg').html("");
            	$('#signup_msg').css("visibility", 'hidden');
				$('#btn_signup').prop('disabled', true);

                $.ajax({
                    type: "POST",
                    url: url_signup,
                    data: $(this).serialize(),
                    success: function(res) {
                    	console.log(res);
                    	$('#btn_signup').prop('disabled', false);
                        if (res == 200) {
                        	$('#signup_msg').html("Successfully registered!");
		                	$('#signup_msg').css("color", 'green');
		                	$('#signup_msg').css("visibility", 'visible');
		                	setTimeout(function() {
							    history.go(0);
							}, 1000);
                            
                        }
                        else {
                            $('#signup_msg').html("Email already exists!");
		                	$('#signup_msg').css("color", 'red');
		                	$('#signup_msg').css("visibility", 'visible');
                        }
                    }
                });
            });

            var url_login = "<?php echo base_url().'home/do_login';?>";
            $('#form_login').submit(function(e) {
                e.preventDefault();
                $('#btn_login').prop('disabled', true);
                $.ajax({
                    type: "POST",
                    url: url_login,
                    data: $(this).serialize(),
                    success: function(res) {
                    	// alert(res);
                    	console.log(res);
                    	$('#btn_login').prop('disabled', false);
                        if (res == 200) {
                        	$('#login_msg').html("Successfully logged in!");
		                	$('#login_msg').css("color", 'green');
		                	$('#login_msg').css("visibility", 'visible');
		                	setTimeout(function() {
							    // history.go(0);
                                window.location ="<?php echo base_url();?>";
							}, 1000);
                            
                        }
                        else {
                            $('#login_msg').html("Email or password is not correct!");
		                	$('#login_msg').css("color", 'red');
		                	$('#login_msg').css("visibility", 'visible');
                        }
                    }
                });
            });

            
        });
    </script>
