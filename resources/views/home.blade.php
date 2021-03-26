@extends('layout.app')


@section('title', 'home')
@section('home', 'active')

@section('body')

    <!--slider-->
    <section
        class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2 swiper-container-vertical"
        data-loop="true" data-autoplay="3500" data-simulate-touch="true" data-nav="false" data-direction="vertical"
        style="z-index:-1;">
        <div class="swiper-wrapper text-left" style="transform: translate3d(0px, -1038px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide context-dark swiper-slide-duplicate swiper-slide-duplicate-next"
                data-slide-bg="images/slider111.jpg" data-swiper-slide-index="2" style="background-image: url("
                images/slider111.jpg"); background-size: cover; height: 519px;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase not-animated" data-caption-animate="fadeInRight"
                                    data-caption-delay="0">Go camping, anytime of the year</h6>
                                <h2 class="oh font-weight-light not-animated" data-caption-animate="slideInUp"
                                    data-caption-delay="100"><span>Let's</span><span class="font-weight-bold"> Go Now</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark swiper-slide-prev" data-slide-bg="images/slider222.jpg"
                data-swiper-slide-index="0" style="background-image: url(" images/slider222.jpg"); background-size: cover;
                height: 519px;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase not-animated" data-caption-animate="fadeInRight"
                                    data-caption-delay="0">Our guides at Encamp will take you places</h6>
                                <h2 class="oh font-weight-light not-animated" data-caption-animate="slideInUp"
                                    data-caption-delay="100"><span>Beyond</span><span class="font-weight-bold"> Exotic
                                        Locations</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark swiper-slide-active" data-slide-bg="images/slider333.jpg"
                data-swiper-slide-index="1" style="background-image: url(" images/slider333.jpg"); background-size: cover;
                height: 519px;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase fadeInRight animated" data-caption-animate="fadeInRight"
                                    data-caption-delay="0">Experience wonders of Northeast India </h6>
                                <h2 class="oh font-weight-light slideInUp animated" data-caption-animate="slideInUp"
                                    data-caption-delay="100"><span>With</span><span class="font-weight-bold"> Boutique
                                        Camping</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark swiper-slide-next" data-slide-bg="images/slider111.jpg"
                data-swiper-slide-index="2" style="background-image: url(" images/slider111.jpg"); background-size: cover;
                height: 519px;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase not-animated" data-caption-animate="fadeInRight"
                                    data-caption-delay="0">Go camping, anytime of the year</h6>
                                <h2 class="oh font-weight-light not-animated" data-caption-animate="slideInUp"
                                    data-caption-delay="100"><span>Let's</span><span class="font-weight-bold"> Go Now</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark swiper-slide-duplicate swiper-slide-duplicate-prev"
                data-slide-bg="images/slider222.jpg" data-swiper-slide-index="0" style="background-image: url("
                images/slider222.jpg"); background-size: cover; height: 519px;">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="text-uppercase not-animated" data-caption-animate="fadeInRight"
                                    data-caption-delay="0">Our guides at Encamp will take you places</h6>
                                <h2 class="oh font-weight-light not-animated" data-caption-animate="slideInUp"
                                    data-caption-delay="100"><span>Beyond</span><span class="font-weight-bold"> Exotic
                                        Locations</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                class="swiper-pagination-bullet"></span><span
                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
                class="swiper-pagination-bullet"></span></div>
    </section>

    <style>
        .text-just {
            margin: 0 auto;
            width: 58em;
            line-height: 2;
        }

        @media only screen and (max-width: 600px) {
            .text-just {
                margin: 0 auto;
                width: 20em;
                line-height: 2;
            }
        }

        .out-just {
            margin: 0 auto;
            width: 65em;
            line-height: 2;
        }

        @media only screen and (max-width: 600px) {
            .out-just {
                margin: 0 auto;
                width: 23em;
                line-height: 2;

            }
        }

        .jumbotron {
            margin-bottom: 10px;
            background-color: #fcf9e8 !important;
            box-shadow: 5px 5px 5px #d9d9d9;
        }

        @media only screen and (max-width: 600px) {
            .jumbotron {
                background-color: #fcf9e8 !important;
                box-shadow: 5px 5px 5px #d9d9d9;
                margin-bottom: 10px;
            }
        }

    </style>





    <div class="site-section" style="padding-top:50px;">
        <div class="container">
            <center>
                <div class="col-md-6">
                    <h3><i><strong>&ldquo;Don't listen to what they say. Go see.&rdquo;</strong></i>
                        <h3><br>
                </div>
            </center>
        </div>
    </div>

    <div class="stie-section">
        <div class="container">
            <div class="jumbotron out-just text-center">
                <div class="text-just">
                    <h3 style="margin-top: 0px;margin-bottom:10px;">Featured
                    </h3>
                    <img src="images/carbon.jpg" alt="" srcset="" style="margin-top:0px;">
                    <h4>11 Ways to Shrink Your Carbon Footprint While Traveling
                    </h4>
                    <p class="lead">
                        <a class="button button-secondary button-pipaluk" href="/carbon" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--activities-->
    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInDown"
                    style="visibility: visible; animation-name: slideInDown;">Our Campsites</span></h3>
            <div class="row row-sm row-40 row-md-50">


                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/dawki"><img class="lazy"
                                        src="images/dawki11.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/dawki">Dawki Island Camp</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">The beautiful river island of Dawki
                                        offers the perfect destination to camp in your much needed vacation or for just a
                                        quick weekend getaway.</p><a class="button button-black-outline button-ujarak"
                                        href="/dawki">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/mawsynram"><img class="lazy"
                                        src="images/mawcovers22.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/mawsynram">Mawsynram Luxury Camp</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">There is so much to explore in the
                                        gorgeous village of Mawsynram, where rain hugs the land, greenery engulfs the Khasi
                                        Hills and rare fossils lay treasured. So much that...
                                    </p><a class="button button-black-outline button-ujarak" href="/mawsynram">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/nongkhnum"><img class="lazy"
                                        src="images/nongcover2.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/nongkhnum">Nongkhnum River Island Camp</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">One of the less explored places in
                                        Meghalaya, camping at Nongkhnum river island in spacious Alpine tents furnished with
                                        mats and sleeping bags will only add...</p><a
                                        class="button button-black-outline button-ujarak" href="/nongkhnum">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/khanapara"><img class="lazy"
                                        src="images/khanacover.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/khanapara">Khanapara Hillside Camp</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">For all the wandering souls looking to
                                        get away from the hustle of city life, Khanapara Hillside camp by Encamp Adventures
                                        is your perfect getaway destination...</p><a
                                        class="button button-black-outline button-ujarak" href="/khanapara">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!--tours-->

    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInDown"
                    style="visibility: visible; animation-name: slideInDown;">Our Tours</span></h3>
            <div class="row row-sm row-40 row-md-50">

              <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="/freedom-trip-to-meghalaya"><img class="lazy" src="images/grand-canyon-laitlum.jpg" alt="" width="600" height="366"></a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="/freedom-trip-to-meghalaya">Freedom Trip to Meghalaya</a></h5>
                        <div class="group-sm group-middle justify-content-start">
                        </div>
                        <p class="product-big-text" style="color:black">
                          The abode of the clouds or Meghalaya is a beautiful state situated in the laps of mother nature. The land is luxuriously immersed with ultimate ethnicity amongst the tribes residing here.
                        </p>
                        <a class="button button-black-outline button-ujarak" href="/freedom-trip-to-meghalaya">Explore</a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
        
              <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                <article class="product-big">
                  <div class="unit flex-column flex-md-row align-items-md-stretch">
                    <div class="unit-left"><a class="product-big-figure" href="/trip-to-mystical-tawang">
                      <img class="lazy" src="images/mystical-tawang.jpg" alt="" width="600" height="366">
                    </a></div>
                    <div class="unit-body">
                      <div class="product-big-body">
                        <h5 class="product-big-title"><a href="/trip-to-mystical-tawang">Trip to Mystical Tawang</a></h5>
                        <div class="group-sm group-middle justify-content-start">
                        </div>
                        <p class="product-big-text" style="color:black">
                          <div style="font-style: italic; font-family: monospace;">“The land of dawn-lit mountains”</div>
                          An experience always awaits you in Arunachal Pradesh and for us at Encamp, it is all about the “experience” -
                          something that can’t be planned, designed or orchestrated but be revealed by oneself.
                        </p>
                        <a class="button button-black-outline button-ujarak" href="/trip-to-mystical-tawang">Explore</a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/sevensister"><img class="lazy"
                                        src="images/mizoram1.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/sevensister">THE GRAND 7 SISTER
                                            NORTHEAST TOUR</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">Rejoice with this 20-day holiday as you
                                        embark upon a surrealistic experience in the North-east India.
                                    </p><a class="button button-black-outline button-ujarak" href="/sevensister">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <article class="product-big">
                        <div class="unit flex-column flex-md-row align-items-md-stretch">
                            <div class="unit-left"><a class="product-big-figure" href="/dzukou"><img class="lazy"
                                        src="images/dzukoucover.jpg" alt="" width="600" height="366"></a></div>
                            <div class="unit-body">
                                <div class="product-big-body">
                                    <h5 class="product-big-title"><a href="/dzukou">
                                            The Ultimate
                                            Dzukou Valley Trek</a></h5>
                                    <div class="group-sm group-middle justify-content-start">
                                    </div>
                                    <p class="product-big-text" style="color:black">This is a 5-day trip involving a
                                        moderately challenging trek to the magnificent Dzukou Valley in the Northeastern
                                        state of Nagaland.
                                    </p><a class="button button-black-outline button-ujarak" href="/dzukou">Explore</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="text-center" style="margin: 30px auto;">
                    <p><span style="font-weight: 500;font-size:20px;">Need more travel options to explore?</span></p>
                    <button class="btn btn-primary"
                        style="font-size:18px;box-shadow: 5px 5px #C2C2C2; margin: 10px auto;"><a
                            href="https://wa.me/919643182259" style="color:white">Talk to Us <i class="fa fa-whatsapp"
                                style="color:white;font-size:24px;"></i></a></button>
                </div>

            </div>
        </div>
    </section>

    <!-- Video Section-->
    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
            <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
                <div class="col-lg-6 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <video width=100% controls="controls" preload="none" poster="/images/thumb.jpg">
                        <source src="/images/1.mp4" type="video/mp4">
                    </video>
                </div>
                <!--<img src="images/encampdash.jpg" alt="encamp tent" >-->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <div class="box-width-lg-470">
                        <h3>Unwind.</h3>
                        <br>
                        <!--Short Intro-->
                        <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                            id="tabs-7">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-7-1">
                                    <p>True beauty lies in the wilderness of path less travelled. Let us take you to those
                                        places where the breeze flows by uninterrupted from city noise. </p>
                                    <p>Video courtesy of <a href="https://www.youtube.com/watch?v=7M5ZNdBxmkY"
                                            target="_blank">Rajaul Karim</a>.</p>
                                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                                            href="/contact">Get in Touch</a><a class="button button-black-outline button-md"
                                            href="/blog">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--activities-->
    <!--<section class="section section-sm bg-default">-->
    <!--  <div class="container">-->
    <!--    <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInDown" style="visibility: visible; animation-name: slideInDown;">Upcoming Activities</span></h3>-->
    <!--    <div class="row row-sm row-40 row-md-50">-->


    <!--      <div class="col-sm-6 col-md-12 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
    <!--        <article class="product-big">-->
    <!--          <div class="unit flex-column flex-md-row align-items-md-stretch">-->
    <!--            <div class="unit-left"><a class="product-big-figure" href="/hornbill"><img class="lazy" src="images/phonehornbill.jpg" alt="" width="600" height="366"></a></div>-->
    <!--            <div class="unit-body">-->
    <!--              <div class="product-big-body">-->
    <!--                <h5 class="product-big-title"><a href="/hornbill">Encamping at Hornbill Festival 2019</a></h5>-->
    <!--                <div class="group-sm group-middle justify-content-start">-->
    <!--                </div>-->
    <!--                <p class="product-big-text">It's a treat to visit Nagaland during the famed Hornbill Festival in December.-->
    <!--This time, join the 10-day long celebration with Encamp Adventures...</p><a class="button button-black-outline button-ujarak" href="/hornbill">Learn More</a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </article>-->
    <!--      </div>-->

    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!--	Our Services-->
    <section class="section section-sm">
        <div class="container">
            <h3 class="text-center">Our Services</h3>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fas fa-map-signs"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">Personalized Camping Trips</h5>
                                <p class="box-icon-classic-text">One plan never fits all. Why don’t you let us in on your
                                    travel wish list and we’ll call genie to work his magic, promise!</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fas fa-sliders"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">Flexible camp stays</h5>
                                <p class="box-icon-classic-text">Whether it’s a quick weekend scene, or a planned getaway;
                                    camping at the coolest festivals or gearing up for a much-awaited trek, We’ve got you
                                    covered.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fas fa-star"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">Enhanced Service Quality</h5>
                                <p class="box-icon-classic-text">To ensure that you have the best time ever, we make it our
                                    mission to deliver the best service ever.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fas fa-headphones"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">24/7 Support</h5>
                                <p class="box-icon-classic-text">Your plans need the fastest execution, that’s why we’re
                                    available whenever you need us!</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fas fa-fire"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">Handpicked Destinations</h5>
                                <p class="box-icon-classic-text">Not your regular vacation plans, but much better! Let’s
                                    take you to our favorite places and we’ll see if you can resist from calling it your new
                                    favorite.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon fab fa-google-wallet"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title">Best Prices</h5>
                                <p class="box-icon-classic-text">We’re not in the price war but we surely know how to fetch
                                    the best prices for our services offered to you.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <!-- What people say-->
    <section class="section section-md bg-gray-4">
        <div class="container">
            <h3 class="wow fadeInLeft text-center" style="visibility: visible; animation-name: fadeInLeft;">What People Say
            </h3>
            <div class="row row-xxl row-70 justify-content-center">
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight"
                    style="visibility: visible; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative text-center"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/Mona.png"
                                alt="Mona Dholaria" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">It was wonderful experience at Ziro Festival of Music with Encamp Adventures. Had a
                                memorable time with Friends. Amazing Location for camping with awesome team. Best Jam
                                Session. Authentic food. Good facility for basic daily needs.</p>
                            <a href="https://tinyurl.com/yx8nblk6">
                                <p>Read More</p>
                            </a>
                        </div>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Mona Dholaria</a></h5>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/Niharika.png"
                                alt="Niharika Mittal" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">We did overnight camp at Dawki island in the middle of Dawki river. It was pure
                                bliss. There was bonfire, live music, stories and good food. We loved every bit of it. In
                                the morning we did kayaking, cliff jumping and there was...</p>
                            <a href="https://tinyurl.com/yx8nblk6">
                                <p>Read More</p>
                            </a>
                        </div>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Niharika Mittal</a></h5>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/annu.png"
                                alt=" Annu Johny" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">The campsite is beautiful. Despite being so close to Guwahati city, this place
                                would offer a calming silence. The sound of crickets, frogs, birds and fishes splashing
                                around the pond would make you feel close to nature. Come here to feel relaxed, calm and
                                at...
                            </p>
                            <a href="https://tinyurl.com/yx8nblk6">
                                <p>Read More</p>
                            </a>
                        </div>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Annu Johny</a></h5>
                    </article>
                </div>
            </div>
            <div class="row row-xxl row-70 justify-content-center">
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight"
                    style="visibility: visible; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/amit.png"
                                alt="Amit Kumar Das" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">Great work changing the feel of traditional camping to something more peppy and
                                lively.
                                Would definitely like to recommend this as a good alternative to the standard hotels.
                            </p><br>
                            <a href="https://tinyurl.com/yx8nblk6">
                                <p>Read More</p>
                            </a>
                        </div>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Amit Kumar Das</a></h5>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/abdul.png"
                                alt="Abdulkuddus Ali" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">Encamp adventures does best in business. They are professionals. Never say NO
                                attitude of them is best. Any help you need just ask to Green colour t-shirt guys in camp
                                area.
                                Thanks for making our stay comfortable at Dambuk.
                            </p>
                            <a href="https://tinyurl.com/yx8nblk6">
                                <p>Read More</p>
                            </a>
                        </div>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Abdulkuddus Ali</a></h5>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4 wow fadeInRight" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <!-- Quote Creative-->
                    <article class="quote-creative"><a class="quote-creative-figure"
                            href="https://tinyurl.com/yx8nblk6"><img class="img-circles lazy" src="images/bhagya.png"
                                alt="Bhagya Laxmi" width="87" height="87"></a>
                        <div class="quote-creative-text">
                            <p class="q">Encamp creates beautiful memories!!! We were a group of 9people traveling together
                                and were worried about camping as for a lot of us this was first time. Encamp planned it
                                really well- Host are super friendly and they themselves are family members...</p>
                        </div>
                        <a href="https://tinyurl.com/yx8nblk6">
                            <p>Read More</p>
                        </a>
                        <h5 class="quote-creative-cite"><a href="https://tinyurl.com/yx8nblk6">Bhagya Laxmi</a></h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <!-- <h3>7 Years of Following The Dream</h3> -->

            <div class="row row-30 justify-content-center" data-lightgallery="group">
                <div class="col-md-6 col-lg-5 col-xl-4 col-8">
                    <!-- Thumbnail-info-->
                    <article class="thumbnail-info"><img class="lazy" src="images/slider333.jpg" alt="" width="370"
                            height="303">
                        <div class="thumbnail-info-figure">
                            <div class="counter-classic">
                                <div class="counter-classic-number"><span class="cntr"
                                        style="font-weight:500">70</span><span class="symbol">+</span>
                                </div>
                                <div class="info-description">Trips</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 col-8">
                    <!-- Thumbnail-info-->
                    <article class="thumbnail-info"><img class="lazy" src="images/slider333.jpg" alt="" width="370"
                            height="303">
                        <div class="thumbnail-info-figure">
                            <div class="counter-classic">
                                <div class="counter-classic-number"><span class="cntr"
                                        style="font-weight:500">3000</span><span class="symbol">+</span>
                                </div>
                                <div class="info-description">Happy Travelers</div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row row-30 justify-content-center" data-lightgallery="group">
                <div class="col-md-6 col-lg-5 col-xl-4 col-8">
                    <!-- Thumbnail-info-->
                    <article class="thumbnail-info"><img class="lazy" src="images/slider333.jpg" alt="Encamp Adventures"
                            width="370" height="303">
                        <div class="thumbnail-info-figure">
                            <div class="counter-classic">
                                <div class="counter-classic-number"><span class="cntr"
                                        style="font-weight:500">30</span><span class="symbol">+</span>
                                </div>
                                <div class="info-description">Boutique Campsites</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4 col-8">
                    <!-- Thumbnail-info-->
                    <article class="thumbnail-info"><img class="lazy" src="images/slider333.jpg" alt="Encamp Adventures"
                            width="370" height="303">
                        <div class="thumbnail-info-figure">
                            <div class="counter-classic">
                                <div class="counter-classic-number"><span class="cntr"
                                        style="font-weight:500">100</span><span class="symbol">+</span>
                                </div>
                                <div class="info-description">Offbeat Stays</div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </section>


    <!--Instagrram feed-->
    <!--<section class="section section-sm section-top-0 section-fluid section-relative bg-white">-->
    <!--  <div class="container">-->
    <!--  <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInUp" style="visibility: visible; animation-name: slideInUp; margin-bottom: 30px; margin-top: 30px;">Highlights</span></h3>-->
    <!--        <div class="container">-->
    <!--        <div id="instafeed" class="row"></div></div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Latest blog posts-->
    <section class="section section-sm section-last bg-default">
        <div class="container">
            <h3 class="oh-desktop text-center"><span class="d-inline-block wow slideInUp"
                    style="visibility: visible; animation-name: slideInUp;">Latest Blog Posts</span></h3>
            <!-- Owl Carousel-->
            <section class="section section-xl bg-default text-md-left">
                <div class="container">
                    <div class="row row-60">

                        <div class="col-sm-6 col-lg-6 wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">
                            <!-- Post Modern-->
                            <article class="post post-modern"><a class="post-modern-figure" href="/carbon"><img
                                        src="images/carbon.jpg" alt="" width="370" height="307">
                                    <div class="post-modern-time">
                                        <time datetime="2020-07-30"><span class="post-modern-time-number">30</span><span
                                                class="post-modern-time-month">July</span></time>
                                    </div>
                                </a>
                                <h5 class="post-modern-title"><a href="/carbon">11 Ways to Shrink Your Carbon Footprint
                                        While Traveling</a></h5>
                                <p class="post-modern-text justify">The international tourism industry is growing faster
                                    than the whole of global trade. And the environmental consequences of this growth are
                                    expanding just as rapidly. In order to curb the greenhouse gas emissions associated with
                                    travel, a huge cultural shift needs to take place. Regional governments, businesses, and
                                    consumers alike have a responsibility to ensure that the short-term excitement and
                                    profits from travel don’t cause undue, long-term damage to our planet and future
                                    generations.
                                </p>
                            </article>
                        </div>

                        <div class="col-sm-6 col-lg-6 wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">
                            <!-- Post Modern-->
                            <article class="post post-modern"><a class="post-modern-figure" href="/grandsevensister"><img
                                        src="images/grand.jpg" alt="" width="370" height="307">
                                    <div class="post-modern-time">
                                        <time datetime="2020-07-30"><span class="post-modern-time-number">30</span><span
                                                class="post-modern-time-month">July</span></time>
                                    </div>
                                </a>
                                <h5 class="post-modern-title"><a href="/grandsevensister">The Grand 7 Sister Northeast Tour
                                        - First Time Ever</a></h5>
                                <p class="post-modern-text justify">Situated in the easternmost region of our country, lies
                                    a piece of paradise comprising of the seven states, commonly referred to as the seven
                                    sisters. The area serves as one of the most engaging and soul captivating destinations
                                    for the wanderlust travellers who seek solace amidst nature. The seven states have their
                                    own endemic identity and culture yet blending beautifully with one another and
                                    delivering bag full of surprises to the visitors. Right from the incomparable
                                    hospitality that the indigenous people of the land have to offer...
                                </p>
                            </article>
                        </div>

                        <!--              <div class="col-sm-6 col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
                        <!-- Post Modern-->
                        <!--              <article class="post post-modern"><a class="post-modern-figure" href="/abc-trek"><img src="images/abc1.jpg" alt="" width="370" height="307">-->
                        <!--                  <div class="post-modern-time">-->
                        <!--                    <time datetime="2020-02-21"><span class="post-modern-time-number">21</span><span class="post-modern-time-month">February</span></time>-->
                        <!--                  </div></a>-->
                        <!--                <h5 class="post-modern-title"><a href="/abc-trek">Delve into nature’s relaxing retreat with Annapurna Base Camp</a></h5>-->
                        <!--                <p class="post-modern-text justify">The Annapurna Base Camp trek is counted among the most popular treks in the world. Let us take you through the hilly terrains capped with white snow and pamper your wanderlust soul.-->
                        <!--</p>-->
                        <!--              </article>-->
                        <!--            </div>-->

                        <!--              <div class="col-sm-6 col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
                        <!-- Post Modern-->
                        <!--              <article class="post post-modern"><a class="post-modern-figure" href="/ecotourism"><img class="lazy" src="images/tent.jpg" alt="" width="370" height="307">-->
                        <!--                  <div class="post-modern-time">-->
                        <!--                    <time datetime="2019-08-23"><span class="post-modern-time-number">23</span><span class="post-modern-time-month">August</span></time>-->
                        <!--                  </div></a>-->
                        <!--                <h5 class="post-modern-title"><a href="/ecotourism">Here's how we approach Eco Tourism at Encamp Adventures</a></h5>-->
                        <!--                <p class="post-modern-text justify">Have you been planning backpacking with your best-friend for the longest time?  Are you also yearning to retreat into lush green landscapes, away from the city’s hustle bustle? Do you plan to use your hard earned leaves to visit your dream destinations this year? If this resonates with you, we are sure you’ve been bitten by the travel bug too. Travelling is all about learning and unlearning on the move.-->
                        <!--</p>-->
                        <!--              </article>-->
                        <!--            </div>-->
                        <!--              <div class="col-sm-6 col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
                        <!-- Post Modern-->
                        <!--              <article class="post post-modern"><a class="post-modern-figure" href="/ziro-festival-of-music"><img class="lazy" src="images/ZFMcovernew.jpg" alt="" width="370" height="307">-->
                        <!--                  <div class="post-modern-time">-->
                        <!--                    <time datetime="2019-08-05"><span class="post-modern-time-number">05</span><span class="post-modern-time-month">August</span></time>-->
                        <!--                  </div></a>-->
                        <!--                <h5 class="post-modern-title"><a href="/ziro-festival-of-music">Next off your bucket list: Ziro Festival of Music 2019</a></h5>-->
                        <!--                <p class="post-modern-text justify">Golden paddy fields, hilly terrains, breezy air and the irresistible charm of being in Northeast India – yup, that sounds like Ziro Valley in Arunachal Pradesh. The land of Apatani Tribe, they say, the best time to visit Ziro is during its famed annual Ziro Festival of Music that celebrates soulful music mostly in the genre of indie rock.-->
                        <!--                The four-day music festival started in the year 2012 and ever since, the month of September in Ziro stands witness to patrons of the festival coming in huge numbers from all parts of Northeast -->
                        <!--</p>-->
                        <!--              </article>-->
                        <!--            </div>-->
                        <!--              <div class="col-sm-6 col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
                        <!-- Post Modern-->
                        <!--              <article class="post post-modern"><a class="post-modern-figure" href="/dzukou-valley-trip"><img src="images/dzcover.jpg" alt="" width="370" height="307">-->
                        <!--                  <div class="post-modern-time">-->
                        <!--                    <time datetime="2019-07-29"><span class="post-modern-time-number">29</span><span class="post-modern-time-month">July</span></time>-->
                        <!--                  </div></a>-->
                        <!--                <h5 class="post-modern-title"><a href="/dzukou-valley-trip">Unwinding at Dzukou Valley - Trip of a lifetime.</a></h5>-->
                        <!--                <p class="post-modern-text justify">There are a million reasons to fall in love with Northeast India. Every destination here is engulfed in a unique blend of picturesque charm and cultural magic. So, when we set out on another soulful adventure to the famed Dzukou Valley, Nagaland, we could only imagine what awaited us on our arrival.-->
                        <!--</p>-->
                        <!--              </article>-->
                        <!--            </div>-->
                        <!--  <div class="col-sm-6 col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">-->
                        <!-- Post Modern-->
                        <!--  <article class="post post-modern"><a class="post-modern-figure" href="/what-to-pack"><img src="images/whattopack.jpg" alt="" width="370" height="307">-->
                        <!--      <div class="post-modern-time">-->
                        <!--        <time datetime="2019-07-15"><span class="post-modern-time-number">15</span><span class="post-modern-time-month">July</span></time>-->
                        <!--      </div></a>-->
                        <!--    <h5 class="post-modern-title"><a href="/what-to-pack">What to PACK and NOT to PACK while going for a Camping Trip!</a></h5>-->
                        <!--    <p class="post-modern-text justify">Stuck in the traffic with cars honking all around, piles of pending files rising high every single day, the very important project submission before the week ends. -->
                        <!--    There is just too much pressure to handle in this rat race of a world. Don’t you feel like leaving everything behind and escaping to a place where you can unwind and relax while you listen to the stream flowing by?</p>-->
                        <!--  </article>-->
                        <!--</div>-->


                        <!--<div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">-->


                    </div><br><br><br>
                    <div class="text-center" style="font-size:20px;"><a href="/blog"><b>See More</b></a></div>
                </div>
            </section>
    </section>

@endsection
