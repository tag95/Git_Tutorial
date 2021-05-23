<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function portfolioDetails(){
        return view('portfolio-details');
    }

    public function contact(Request $request){
        Mail::send('contact-us-email', ['request' => $request->all()],
            function ($message) use ($request) {
                $message->from($request->email, 'Request From My Portfolio');
                $message->to(['mohamed.tag1995@gmail.com'])
                    ->subject($request->subject);
            });

        return redirect()->back()->with('success','Send Message Done Successfully, Thank You');
    }
}
