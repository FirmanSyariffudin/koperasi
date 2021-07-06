<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Member;
use App\Models\Production;
use App\Models\Vehicle;
use App\Models\Rental;
use App\Models\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $request = Request::count();
        $member = Member::count();
        return view('home', [
            'request' => $request, 'member' => $member
        ]);
    }
}
