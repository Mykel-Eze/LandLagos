<?php

namespace App\Http\Controllers\Admin;
use Mail;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\WelcomeMail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    public function create (Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'plan' => 'required|string',
            'payment' =>'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:14|min:10|unique:users',
        ]);
        if($validator->fails()){
            return response()->json(['status' => 400,'error' => $validator->errors()]);
        }
        if($validator->validate()){
            $user = User::create([
                'plan' => $data['plan'],
                'payment' => $data['payment'],
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                
            ]);
                
                Mail::to($user['email'])->send(new WelcomeMail($request));
                //return response()->json(['success' => 'Done']);
                return response()->json(['status' => 201,'status' => 'Successful']);
            
        }
    }



     /*public function create(Request $request)
    {    // return $request->all();
        $this->validate($request,[
            'plan' => 'required|string',
            'payment' =>'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|unique:users',
            ]);
        $formInput = new User;
        $formInput ->plan = $request ->plan;
        $formInput ->payment = $request->payment;
        $formInput ->name = $request ->name;
        $formInput ->email = $request ->email;
        $formInput ->phone = $request ->phone;
        $formInput ->save();
       // Mail::to($request->email)->send(new WelcomeMail($request));
        return response()->json(['success'=>'Data is successfully added']);
        //return back()->with('status', 'Registered successfully');
        //return redirect()->back();

    }*/

    
   
}

