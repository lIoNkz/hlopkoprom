<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function about()
    {
    	return view('frontend.about');
    }

    public function products()
    {
    	return view('frontend.products');
    }

    public function contacts()
    {
    	return view('frontend.contacts')->with(['message' => '']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone
        ];

        $success = '<div class="success-text">Мы вам перезвоним!</div>';

        //Mail::to(env('MAIL_TO','admin@ahbk.kz'))->send(new ContactMail($data));






        return view('frontend.contacts')->with(['message'=> $success]);
    }
}
