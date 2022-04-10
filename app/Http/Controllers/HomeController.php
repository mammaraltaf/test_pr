<?php

namespace App\Http\Controllers;

use App\Models\NewPressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $pressReleases = NewPressRelease::where('user_id',Auth::user()->id)->get();

        return view('user.pages.manageContent',['pressReleases'=>$pressReleases]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {

    }
}
