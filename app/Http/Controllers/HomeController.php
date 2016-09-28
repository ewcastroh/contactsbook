<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Contact;
use Auth;
use DB;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // return view('dashboard.home');
        //$contacts = Contact::all();
        // $contacts = Contact::paginate(20);
        $user_id = Auth::user()->id;
        $contacts = DB::table('contacts')->where('user_id', $user_id)->orderBy('name', 'asc')->get();
        return view('dashboard.home', ['contacts' => $contacts]);
        // return Response::json($contacts, 200);
    }
}
