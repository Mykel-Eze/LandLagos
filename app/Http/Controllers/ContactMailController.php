<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
//use App\Http\Requests\ContactMailRequest;
use App\Mail\ContactMail;

class ContactMailController extends Controller
{

	public function sendMail(Request $request)
	{   
		$this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|min:4',
            'message'=>'required|min:6'
                        ]);
		
    Mail::to('info@landlagos.com')->send(new ContactMail($request));
    return back()->with('status', 'Messaage sent successfully');
	}

    
}
