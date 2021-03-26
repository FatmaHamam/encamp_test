@extends('layout.vacation')

@section('title','Guwahati')

@section('body')
<style>
    .mySlides {display:none;}
</style>

<div class="" style="background-image: url('images/khanacover.jpg');-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: relative;">
    <!-- <div class="overlay"></div> -->
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" style="padding-top:250px; padding-bottom:250px;">
        <div class="col-md-9 text text-center ftco-animate">

          <h1 style="font-weight:900;">Khanapara Hillside Camp</h1>
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
                    <form action="/khanaparaleads" method="post" class="search-property-2">
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
            <img class="mySlides" src="/images/khanapara11.jpg" style="width:100%">
            <img class="mySlides" src="/images/khanapara22.jpg" style="width:100%">
            <img class="mySlides" src="/images/khanapara33.jpg" style="width:100%">
            <img class="mySlides" src="/images/khanapara44.jpg" style="width:100%">
            <img class="mySlides" src="/images/khanapara55.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>

          <div style="padding-top:20px;color:#202020;">
          <p>
          For all the wandering souls looking to get away from the hustle of city life, Khanapara Hillside camp by Encamp Adventures is your perfect getaway destination. Not too far from the hustle of Guwahati city, you will be amazed at the serene atmosphere the place offers. You get to camp with a gorgeous lake-side view surrounded by hilly greenery. Guests get to experience bonfire nights, dining under the starry sky, indulge in boat rides and go for a guided trek; all within close proximity to the main city. 
Come in for a day out or stay back for the weekend, we match your needs to provide the best of nearby camping experience in Guwahati, Assam. 
          </p>
        </div>

          {{-- <p>India’s cleanest river.</p>
          <p>When in Meghalaya, going for an unbeatable camping experience at the gorgeous river island that sits surrounded by the crystal clear Umngot river is a must - that is, if you are looking for an experience which can only be felt and not explained.</p>
          <p>As one of the trusted camping partners in Northeast India, Encamp Adventures connects you to those experiences in our Dawki river island camping arrangements just a few steps away from sparkling shores of Umngot.</p>
          <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Send Enquiry</a></p> --> --}}
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 align-self-stretch ftco-animate">
                  <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-king-size"></span></div>
                    <div class="media-body">
                      <h3 class="heading mb-3"><b>Inclusions</b></h3>
                      <u style="text-decoration:None;list-style-type:none;color:#202020;">
                        <li>- Stay in alpine tents with bed mattress, sleeping bags & pillows</li>
                        <li>- Dinner (Veg or Non-veg)</li>
                        <li>- Breakfast</li>   
                        <li>- Hike to 360 view of Guwahati</li>
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
                        <li>- Kayaking/Boating</li>
                        <li>- Barbeque</li>
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
                        <li>- Camp torch</li>
                        <li>- Water bottles</li>
                        <li>- Glasses</li>
                        <li>- Any additional items may be bought from Guwahati city.</li>
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
                        <li>Encamp Adventures’ Khanapara Hillside camp in Guwahati is 5kms away from main road. It takes approximately 10 minutes to reach the destination via private vehicles.</li>
                      </u>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-self-stretch ftco-animate">
                    <p style="color:#202020;font-size:13px;">**<br>
                    Please note: Local mode of transportation is available till Khanapara area. Visitors will have to either hike or hitch-hike till the camp from there on.
                    </p>
                </div>
                <div style="display: flex; flex-direction: column;">
                  <button class="btn btn-primary btn-lg" style="height: 60px;">
                    <b>Price per person: &#8377;1,699/-</b><br/>
                  </button>
                  <small style="margin-left: 16px; font-size: 10px;">*inclusive of tax</small>
                </div>
                <br><br>
            </div>
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
