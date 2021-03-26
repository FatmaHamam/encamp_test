<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nh7lead;
use DB;

class WeekenderLeadsController extends Controller
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

    public function nh7leads()
    {
        $leads = Nh7lead::orderBy('created_at', 'desc')->paginate(10);
        return view('nh7leads')->with('leads', $leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(){
        return view('nh7');
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
            'message' => 'required'
        ]);

        $post = new Nh7lead;
        $post->name = $request->input('name');
        $post->phno = $request->input('phno');
        $post->email = $request->input('email');
        $post->message = $request->input('message');
        // $post->save();

        return redirect('nh7')->with('Success', 'Thank you for signing up. We will get back to you soon 😊');
    }
}
