<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index()
    {
        return view('contact');
    }
    function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data = array(
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'message' => $request->message
        );
        
        try {
            Mail::to('support@encampadventures.com')->send(new SendMail($data));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect("//" . $_SERVER["HTTP_HOST"] . "/thank-you");
    }
}
