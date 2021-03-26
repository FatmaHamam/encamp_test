@extends('layout.app')


@section('title','Car Rentals')
@section('rentals','active')

@section('body')


    <section>
    <div class="container">
        <center>
    <div>
        <br><br>
        <h3>RENT-A-VEHICLE</h3>
        <p style="font-size:18px;font-weight:400;"><i>For your long-distance trips across Northeast India –</i></p><br>
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-4">
                <img src="images/sedan.png" width="70%"/>
                <div style="margin-top:-50px;">
                <h5 style="color:#00c081">Sedan</h5><br>
                <button type="btn" style="background:#ffcc00;border:none">Rs. 4000/- per day*</button><br></div><br>
            </div>
            <div class="col-md-4">
                <img src="images/traveller.png" width="70%"/>
                <div style="margin-top:-50px;">
                <h5 style="color:#00c081">SUV</h5><br>
                <button type="btn" style="background:#ffcc00;border:none">Rs. 6000/- per day*</button><br></div><br>
            </div>
            <div class="col-md-4">
                <img src="images/suv.png" width="70%"/>
                <div style="margin-top:-50px;">
                <h5 style="color:#00c081">Traveller</h5><br>
                <button type="btn" style="background:#ffcc00;border:none">Rs. 8000/- per day*</button><br></div><br>
            </div>
            </div>
                <p style="font-size:15px;font-weight:400;color:#5A5A5A;"><i>*Prices mentioned above are base rates only and are subject to change as per locations on itinerary.</i></p><br>
                <button class="btn btn-primary" style="font-size:18px;box-shadow: 5px 5px #C2C2C2;"><a href="https://wa.me/919643182259" style="color:white">Send Your Query  <i class="fa fa-whatsapp" style="color:white;font-size:24px;"></i></a></button>
        </div>
    </div>
    </center>
    <div class="col-md-12">
            <h5 style="color:#00c081">When you hire from us, you get:</h5>
            <p align="left" style="font-size:15px;font-weight:400;">1. <b>Flexible</b> route map and assistance in itinerary correction that saves valuable time.<br>
            2. Soft skill <b>trained</b> drivers to ensure good behavior.<br>
            3. Local <b>expertise</b> of offbeat places to sort out your stay and sightseeing plans.<br>
            4. <b>Value</b> prices to keep your trip inside the budget.<br>
            5. <b>24/7</b> On-call assistance by Team Encamp to mitigate the communication barrier due to network issues.</p><br><br>
        </div>
    </div>
    
  
          </div>
    </section>
    

@endsection
   
