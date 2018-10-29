<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminHomeController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }


	public function index()
    {
    	$users = User::orderBy('id', 'DESC')->get();
    	return view('admin.home', compact('users'));
    }


}
