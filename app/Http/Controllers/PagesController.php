<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class PagesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view("pages.contact");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request){
        Mail::send('emails.contact', ['contact' => $request->all()], function ($m) {
            $m->to('stefan.cuculeac@gmail.com', 'Stefan Cuculeac')->from('essteffan@yahoo.com', 'Laravel.dev Test Account')->subject('Contact from laravel.dev!');
        });

        return redirect("/");
    }


}
