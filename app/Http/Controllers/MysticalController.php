<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SalesMail;
use App\Seven;
use App\Mystical;

class MysticalController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            
        ]);

        $post = new Mystical;
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        //$post->city = $request->input('city');
        //$post->Trip_date= $request->input('Trip_date');
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
         $message .= "No_people: " . $request->input('No_people');
         $message .= "Trip_date: " . $request->input('Trip_date');
        

        $data = array(
            'name' => $request->name,
            'number' => $request->phone,
            'email' => '',
            'message' => $message,
            'subject' => 'Sales Enquiry - Trip to Mystical Tawang'
        );       
                       
        try {
            Mail::to('sales@encampadventures.com')->send(new SalesMail($data));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect("//" . $_SERVER["HTTP_HOST"] . "/thank-you");
    }
}
