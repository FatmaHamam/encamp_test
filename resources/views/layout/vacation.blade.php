<!DOCTYPE html>
<html lang="en">
  <head>
  <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="w7gZUQvQxxh9k94IEEK54i8FbyWtyzaVzPssQav926g" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="vacation/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="vacation/css/animate.css">

    <link rel="stylesheet" href="vacation/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vacation/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="vacation/css/magnific-popup.css">

    <link rel="stylesheet" href="vacation/css/aos.css">

    <link rel="stylesheet" href="vacation/css/ionicons.min.css">

    <link rel="stylesheet" href="vacation/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="vacation/css/jquery.timepicker.css">


    <link rel="stylesheet" href="vacation/css/flaticon.css">
    <link rel="stylesheet" href="vacation/css/icomoon.css">
    <link rel="stylesheet" href="vacation/css/style1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/floating-wpplol123.min.css">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon-32x32.png') }}" sizes="32x32" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T8MXTND');</script>
      <!-- End Google Tag Manager --> 
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8MXTND"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
	  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light">
	    <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/logo1.png') }}" width="188" height="70"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link"><b>Home</b></a></li>
	          <li class="nav-item active"><a href="/campsites" class="nav-link"><b>Campsites</b></a></li>
	          <li class="nav-item active"><a href="/tours" class="nav-link"><b>Tours</b></a></li>
	          <li class="nav-item active"><a href="/rentals" class="nav-link"><b>Rentals</b></a></li>
	          <li class="nav-item active"><a href="/staycations" class="nav-link"><b>Staycations</b></a></li>
	          <li class="nav-item active"><a href="/blog" class="nav-link"><b>Blog</b></a></li>
	          <li class="nav-item active"><a href="/about" class="nav-link"><b>About Us</b></a></li>
	          <li class="nav-item active"><a href="/contact" class="nav-link"><b>Contact Us</b></a></li>
	          <!--<li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>-->

	        </ul>
	      </div>
	    </div>
      </nav>
      <style>
    .float22{
	position:fixed;
	width:120px;
	height:50px;
	bottom:32px;
	right:20px;
    padding: 6px 10px;
    background-color:#00c191;
    /* opacity:0.9; */
	color:white;
	font-size: 12px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
    z-index: 5;
    text-decoration: none;
}
.float22:hover{
    text-decoration: none!important;
    color:white;
}

@media screen and (max-width: 600px) {
  .float22{
	position:fixed;
	width:120px;
	height:50px;
	bottom:55px;
	right:15px;
    padding: 6px 10px;
    background-color:#00c191;
    /* opacity:0.9; */
	color:white;
	font-size: 12px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
    z-index: 5;
    text-decoration: none;
}
.float22:hover{
    text-decoration: none!important;
    color:white;
}
}
    </style>
    
    

@yield('body')

<footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Encamp Adventures</h2>
            <p>True beauty lies in the wilderness of path less travelled. Let us take you to those places where the breeze flows by uninterrupted from city noise.
            </p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        {{-- <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Infromation</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
              <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
              <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
              <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
              <li><a href="#" class="py-2 d-block">Call Us</a></li>
            </ul>
          </div>
        </div> --}}
        <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="/" class="py-2 d-block">Home</a></li>
              <!--<li><a href="/blog" class="py-2 d-block">Blog</a></li>-->
              <li><a href="/campsites" class="py-2 d-block">Campsites</a></li>
              <li><a href="/tours" class="py-2 d-block">Tours</a></li>
              <li><a href="/rentals" class="py-2 d-block">Rentals</a></li>
              <li><a href="/staycations" class="py-2 d-block">Staycations</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Us</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Encamp Tourism Pvt. Ltd., 1st Floor, Haloi Complex, Jayanagar Chariali, Guwahati, Assam - 781022</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+919643182259</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">support@encampadventures.com</span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
        </div>
      </div>
    </div>
    
     <!--Div where the WhatsApp will be rendered-->
  <div id="WAButton" style="bottom:55px!important;"></div>
  </footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="vacation/js/jquery.min.js"></script>
<script src="vacation/js/jquery-migrate-3.0.1.min.js"></script>
<script src="vacation/js/popper.min.js"></script>
<script src="vacation/js/bootstrap.min.js"></script>
<script src="vacation/js/jquery.easing.1.3.js"></script>
<script src="vacation/js/jquery.waypoints.min.js"></script>
<script src="vacation/js/jquery.stellar.min.js"></script>
<script src="vacation/js/owl.carousel.min.js"></script>
<script src="vacation/js/jquery.magnific-popup.min.js"></script>
<script src="vacation/js/aos.js"></script>
<script src="vacation/js/jquery.animateNumber.min.js"></script>
<script src="vacation/js/bootstrap-datepicker.js"></script>
<script src="vacation/js/scrollax.min.js"></script>
<script src="vacation/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="vacation/js/google-map.js"></script>
<script src="vacation/js/main.js"></script>
<script type="text/javascript" src="/js/floating-wpp12.min.js"></script>




<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"1c167f96e81a194374e35b1ea7b4cb55f8c54f82fbd9e90303732cc3db005f13a690dfff775ca0ce4740d6ea6b7ee81ad45688b0b779b00101547b5bd8012454", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.in/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>


<script>
$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '+919643182259', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
    popupMessage: 'Hello, how can we help you?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://img.icons8.com/officel/80/000000/whatsapp.png"/>', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});
</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e8eb80468865d0012fff2ac&product=inline-share-buttons' async='async'></script>
</body>
</html>
