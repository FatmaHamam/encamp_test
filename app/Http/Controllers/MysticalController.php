<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SalesMail;
use App\Seven;

class MysticalController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'city' => 'required'
        ]);

        $post = new Seven;
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->city = $request->input('city');
        // $post->save();

        $data = array(
            'name' => $request->name,
            'number' => $request->phone,
            'email' => '',
            'message' => $request->city,
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
