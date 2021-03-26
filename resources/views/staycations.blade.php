@extends('layout.app')

@section('title','Go Caravan Camping')
@section('offers','active')

@section('body')

<style>
    p{
        font-size:15px;
    }
    .img-container {
      position: relative;
      text-align: center;
    }
    @media only screen and (max-width: 600px){
        .img-container {
          position: relative;
          text-align: center;
          margin-top:50px;
    }
    }
    
    
    
    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    @media only screen and (max-width: 600px){
        .heading-2, h2 {
        font-size: 20px;
        line-height: 1.2;
}
    }
    
    h3 {
        font-size:20px;
    }
    .text-just{
        margin: 0 auto;
        text-align: justify;
        width:58em;
        line-height:2;
    }
    @media only screen and (max-width: 600px){
        .text-just{
            margin: 0 auto;
            text-align: justify;
            width:25em;
            line-height:2;
        }
    }
</style>
<div class="site-section">

      <div class="row mb-3">
        <div class="col-md-12">
            
            <div class="img-container">
              <img src="images/sbanner.jpg" alt="" class="img-fluid" width="100%">
              <!--<div class="centered"><h2 style="color: white!important;background-color: black; opacity:0.7;">11 Ways to Shrink Your Carbon Footprint While Traveling</h2></div>-->
            </div>
            </div>
            </div>

            
</div>
<br>

<div class="site-section text-just">
<div class="container">
<div class="post-entry entry-content">
<h2 class="text-center">Go Caravan Camping</h2>
<p><span style="font-weight: 400;">&#10003;Navigate your way <a href="" onclick="return false">in your personal van with tents</a> to the mystic realms of Northeast as per your plans.</span></p>
<p><span style="font-weight: 400;">&#10003;Take ‘worry’ out of the equation, as <a href="" onclick="return false">we offer safe parking area with hosts</a> to take care of your needs.</span></p>
<p><span style="font-weight: 400;">&#10003;Experience true convenience when you hop into your caravan that is <a href="" onclick="return false">equipped with gas & stove with kitchen supplies</a> to compliment your self-cooked meals at your own camping pace.</span></p>
<br>
<div class="text-center">
<p><span style="font-weight: 400;font-size:18px;">Let’s talk arrangements</span></p>
<button class="btn btn-primary" style="font-size:18px;box-shadow: 5px 5px #C2C2C2; margin: 10px auto;"><a href="https://wa.me/919643182259" style="color:white">Send Your Query  <i class="fa fa-whatsapp" style="color:white;font-size:24px;"></i></a></button>
</div>
</div>
</div>
</div>
<br>
<div class="site-section">

      <div class="row mb-3 align-items-stretch">
        <div class="col-md-12">
            
            <div class="img-container">
              <img src="images/divider1.png" alt="" class="img-fluid" width="100%">
              <!--<div class="centered"><h2 style="color: white!important;background-color: black; opacity:0.7;">11 Ways to Shrink Your Carbon Footprint While Traveling</h2></div>-->
            </div>
            </div>
            </div>

            
</div>



<div class="site-section text-just">
<div class="container">
<div class="post-entry entry-content">
<h2 class="text-center">Staycations & Workation in the Northeast</h2>
<p><span style="font-weight: 400;">&#10003;When you have a long staycation in your mind, we ensure a <a href="" onclick="return false">safe, suitable and affordable arrangement</a> customized to your needs.</span></p>
<p><span style="font-weight: 400;">&#10003;Your staycation with Encamp <a href="" onclick="return false">covers grocery delivery ‘on order’</a> to give you a hassle-free meal planning in a <a href="" onclick="return false">kitchen facility that’s available with your stay</a>.</span></p>
<p><span style="font-weight: 400;">&#10003;Treat yourself to a well-deserved staycation with self-cooking arrangements and the convenience of <a href="" onclick="return false">ordering in local food as per your liking</a>,</span></p>
<p><span style="font-weight: 400;">&#10003;Get the best amenities <a href="" onclick="return false">including in-range internet connectivity</a> for a perfectly long stay for as long as you desire.</span></p>
<br>
</div>
</div>
</div>

<div class="site-section">

      <div class="row mb-3 align-items-stretch">
        <div class="col-md-12">
            
            <div class="img-container">
              <img src="images/divider2.png" alt="" class="img-fluid" width="100%">
              <!--<div class="centered"><h2 style="color: white!important;background-color: black; opacity:0.7;">11 Ways to Shrink Your Carbon Footprint While Traveling</h2></div>-->
            </div>
            </div>
            </div>
</div>

<div class="site-section text-just">
<div class="container">
<div class="post-entry entry-content">
<h2 class="text-center">Why choose Encamp Adventures?</h2>
<p><span style="font-weight: 400;">&#10003;Travelling with Encamp Adventures allows you to <a href="" onclick="return false">explore eco-tourism</a> from a fresh perspective – one that lessens your carbon footprint without compromising on the priceless travel memories you acquire along.</span></p>
<p><span style="font-weight: 400;">&#10003;In case you weren’t aware, we are BIG on <a href="" onclick="return false">Adventure tourism</a> – We are privileged to have <a href="" onclick="return false">200+ positive reviews with an average 4.8 – 5-star rating by past Encampers</a> who have repeated their travel experiences with us time and again.</span></p>
<p><span style="font-weight: 400;">&#10003;To sum it up, we are the friendly adventure travel guides that you can always count on – your travel experience is a personal journey and we strive towards making it one-of-a-kind with <a href="" onclick="return false">customized solutions and budget-friendly offers.</a></span></p>
<br>
<div class="text-center">
<p><span style="font-weight: 400;font-size:18px;">Let’s sort your travel requirements</span></p>
<button class="btn btn-primary" style="font-size:18px;box-shadow: 5px 5px #C2C2C2; margin: 10px auto;"><a href="https://wa.me/919643182259" style="color:white">Send Your Query  <i class="fa fa-whatsapp" style="color:white;font-size:24px;"></i></a></button>
</div>
</div>
</div>
</div>
<br>




@endsection