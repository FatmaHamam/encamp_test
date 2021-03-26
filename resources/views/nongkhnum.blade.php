@extends('layout.vacation')

@section('title','Nongkhnum River Island Camp')

@section('body')
<style>
    .mySlides {display:none;}
</style>

<div class="" style="background-image: url('images/nongcover2.jpg');-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: relative;">
    <!-- <div class="overlay"></div> -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" style="padding-top:250px; padding-bottom:250px;">
        <div class="col-md-9 text text-center ftco-animate">
          <h1 style="font-weight:900;">Nongkhnum River Island Camp</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
          <div class="row">
                  <div class="col-md-12">
                      <div class="search-wrap-1 ftco-animate p-4">
                      @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @if($message = Session::get('Success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                    </div>
            @endif
                    <form action="/nongleads" method="post" class="search-property-2">
                    {{ csrf_field() }}
                      <div class="row">
                          <div class="col-lg align-items-end">
                              <div class="form-group">
                                  <label for="#">Name</label>
                                <div class="form-field">
                                    <div class="icon"><span class="ion-ios-contact"></span></div>
                              <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                          </div>
                          <div class="col-lg align-items-end">
                              <div class="form-group">
                                  <label for="#">Phone Number</label>
                                  <div class="form-field">
                                    <div class="icon"><span class="ion-ios-call"></span></div>
                              <input type="text" name="number" class="form-control" placeholder="10 Digit Number" maxlength="10" required>
                            </div>
                        </div>
                          </div>

                          <div class="col-lg align-items-end">
                              <div class="form-group">
                                  <label for="#">Email</label>
                                  <div class="form-field">
                                    <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-mail"></span></div>
                            <input type="email" name="mail" class="form-control" placeholder="Email Id" required>
                          </div>
                            </div>
                        </div>
                          </div>
                          <div class="col-lg align-items-end">
                            <div class="form-group">
                                <label for="#">Date</label>
                                <div class="form-field">
                                  <div class="icon"><span class="ion-ios-calendar"></span></div>
                            <input type="text" name="checkin" class="form-control checkout_date" placeholder="Check In Date" required>
                          </div>
                      </div>
                        </div>
                          <div class="col-lg align-self-end">
                              <div class="form-group">
                                  <div class="form-field">
                              <input type="submit" value="Send Enquiry" class="form-control btn btn-primary">
                            </div>
                        </div>
                          </div>
                      </div>
                  </form>
              </div>
                  </div>
          </div>
      </div>
  </section>

  <section class="ftco-section services-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
          <h2 class="mb-4">Highlights</h2>
          <div class="w3-content w3-display-container">
            <img class="mySlides" src="/images/nong11.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong22.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong33.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong44.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong55.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong66.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong77.jpg" style="width:100%">
            <img class="mySlides" src="/images/nong88.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>

          <div style="padding-top:20px;color:#202020;">
          <p>
            One of the less explored places in Meghalaya, camping at Nongkhnum river island in spacious Alpine tents furnished with mats and sleeping bags will only add towards making your visit to Meghalaya magical beyond your anticipation. There is so much to see in this gem of a place that Encamp Adventures ensures to pamper your gypsy soul with all the sightseeing tours and visits to organic farms, waterfalls, lakeside and more - stuff that seem straight out of a story book!<br><br>

            If you aren’t sure of how to reach the place, Encamp Adventures can also facilitate you with transportation services with expert drivers to navigate you right to your destination.
        </p>
        </div>
        <div style="display: flex; flex-direction: column;">
          <button class="btn btn-primary btn-lg" style="height: 60px;">
            <b>Price per person: &#8377;1,999/-</b><br/>
          </button>
          <small style="margin-left: 16px; font-size: 10px;">*inclusive of tax</small>
        </div>
        <br><br>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-king-size"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3"><b>Inclusions</b></h3>
                      <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>- Stay in alpine tents with mats and sleeping bags</li>
                        <li>- Breakfast & Dinner</li>
                        <li>- Bonfire</li>
                        <li>- Guided local sightseeing</li>
                      </u>
                    </div>
                  </div>
                </div>
                <div class="col-md-6  align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-paragliding"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3"><b>Activities</b> (chargeable)</h3>
                      <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>- Angling</li>
                        <li>- Organic farm visit</li>
                        <li>- Visit to lakeside</li>
                        <li>- Visit to Nongkhnum river island</li>
                        <li>- Boating</li>
                        <li>- Thom waterfalls</li>
                        <li>- Weinia waterfalls</li>
                        <li>- Swimming</li>
                      </u>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-sun-umbrella"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3"><b>Trip Essentials</b></h3>
                      <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>- Carry swim suit</li>
                        <li>- Carry a Camp torch</li>
                        <li>- Water bottles</li>
                        <li>- Glasses</li>
                        <li>- Carry your prescribed medicines</li>
                        <li>- Carry additional food items in advance for the stay as there is less availability in the area (nearest shop is 3 kms away)</li>
                      </u>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-route"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3"><b>How to Reach</b></h3>
                       <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>- Guwahati - Nongkhnum</li>
                        <li>- Time - 5 hours</li>
                        <li>- Vehicle - Local/ Shared/ Private</li>
                        <li>- Preferred Mode - Private</li>
                      </u>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-self-stretch ftco-animate">
                    <p style="color:#202020;font-size:18px;"><strong>Important Trip Notes</strong></p>
                    <p style="color:#202020;font-size:15px;">
                        - It takes approximately 5 hours to reach Nongkhnum from Guwahati in private vehicles. The entire stretch from Guwahati to Nongkhnum is 195 kms in distance.
<br>
- Since local modes of transportations are less in the region, we advise our travelers to travel in their own private vehicle for a hassle-free trip.
                    </p>
                </div>
            </div>
        </div>
      </div>
      
      <br>
      <div class="row">
      <div class="col-md-12 ftco-animate;">
            <h3 class="mb-4"><strong>Transportation arrangement by Encamp Adventures</strong></h3>
                    <p style="color:#202020;">We provide a wide range of vehicles such as –</p>
                    <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>
                            &bull; Traveller
                        </li>
                        <li>
                            &bull; Cabs
                        </li>
                        <li>
                            &bull; Sedan
                        </li>
                        <li>
                            &bull; Bikes
                        </li>
                        <li>
                            &bull; Scooters
                        </li>
                    </u><br>
                    <p style="color:#202020;">Expect experienced drivers along with our vehicles during your trip. We also arrange guides as per requirement.</p>
                </div>
                </div>
      
    </div>
  </section>

  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
    </script>

@endsection
