<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SalesMail;
use App\Khanapara;

class KhanaparaController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'number' => 'required',
            'mail' => 'required',
            'checkin' => 'required'
        ]);

        $post = new Khanapara;
        $post->name = $request->input('name');
        $post->number = $request->input('number');
        $post->mail = $request->input('mail');
        $post->checkin = $request->input('checkin');
        // $post->save();

        $data = array(
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->mail,
            'message' => $request->checkin,
            'subject' => 'Sales Enquiry - Khanapara'
        );        
        
        try {
            Mail::to('sales@encampadventures.com')->send(new SalesMail($data));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect("//" . $_SERVER["HTTP_HOST"] . "/thank-you");
    }
}
