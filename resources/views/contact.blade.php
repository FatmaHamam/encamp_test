@extends('layout.app')

@section('title', 'contact')
@section('contact','active')


@section('body')
<!-- <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/contact.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
{{--
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 style="color:">Get In Touch</h1> --}}

            </div>
          </div>
        </div>
      </div> -->

      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fas fa-mobile"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:+919643182259">+919643182259</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fas fa-home"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="https://tinyurl.com/y6sfqnpu">Encamp Tourism Pvt. Ltd., 1st Floor, Haloi Complex, Jayanagar Chariali, Guwahati, Assam - 781022</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon far fa-envelope"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:support@encampadventures.com">support@encampadventures.com</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <div class="site-section bg-light">
      <div class="container">
      <article class="title-classic">
            <div class="title-classic-title">
              <h3 style="margin-left:30px;">Get in touch</h3>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
        <div class="row">
          <div class="col-md-12 mb-5">
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
            
            <form method="post" action="{{ url('contact/send')}}">
                {{ csrf_field() }}
                  <div class="row">
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" style="background:lightyellow">
                    @if($errors->has('name'))
                    <small class="form-text invalid-feedback">{{ $errors->first('name')}}</small>
                    @endif
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" class="is-invalid" name="number" placeholder="Phone Number" style="background:lightyellow">
                        @if($errors->has('number'))
                    <small class="form-text invalid-feedback">{{ $errors->first('number')}}</small>
                    @endif
                    </div></div>
                    <div class="form-group">
                        <input type="text" class="form-control" class="is-invalid" name="email" placeholder="Email" style="background:lightyellow">
                        @if($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
                    @endif
                    </div>
                    <div class="form-group">
                           <textarea name="message" class="form-control" class="is-invalid" style="height:200px;background:lightyellow;" placeholder="Message"></textarea>
                           @if($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                    @endif
                        </div>
                    <button class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


        </div>
    </div>
@endsection



