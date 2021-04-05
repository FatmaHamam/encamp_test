<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SalesMail;
use App\Dzukou;

class DzukouController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'trip_type' => 'required',
            'No_people' => 'required', 
            'Trip_date' => 'required',
            
        ]);

        $post = new Dzukou;
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->trip_type= $request->input('trip_type');
        $post->No_people= $request->input('No_people');
        $daterange = $request->input('Trip_date');
        $split = explode('-', $daterange);
        $start = $split[0];
        $end = $split[1];
        $post->Trip_start_date = date('Y-m-d', strtotime($start));
        $post->Trip_end_date = date('Y-m-d', strtotime($end)); 
         $post->save();


         $message = "Trip Type: ". $request->input('trip_type') ;
         $message .= "<br> No_people: " . $request->input('No_people');
         $message .= "<br> Trip_date: " . $request->input('Trip_date');
        // $post->save();

        $data = array(
            'name' => $request->name,
            'number' => $request->phone,
            'email' => '',
            'message' => $message,
            'subject' => 'Sales Enquiry - Dzukou Valley Trek'
        );  
        
        try {
            Mail::to('sales@encampadventures.com')->send(new SalesMail($data));
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect("//" . $_SERVER["HTTP_HOST"] . "/thank-you");
    }
}
