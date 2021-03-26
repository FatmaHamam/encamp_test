<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hornlead;
use DB;

class HornbillController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['form', 'store']]);
    }

    public function hornbillleads()
    {
        $leads = Hornlead::orderBy('created_at', 'desc')->paginate(10);
        return view('hornbill-leads')->with('leads', $leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(){
        return view('hornbill');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phno' => 'required',
            'email' => 'required',
            'dayswanted' => 'required',
            'people' => 'required'
        ]);

        $post = new Hornlead;
        $post->name = $request->input('name');
        $post->phno = $request->input('phno');
        $post->email = $request->input('email');
        $post->dayswanted = $request->input('dayswanted');
        $post->people = $request->input('people');
        $post->message = $request->input('message');
        // $post->save();

        return redirect('hornbill')->with('Success', 'Thank you for signing up. We will get back to you soon 😊');
    }

}
