<?php

namespace App\Http\Controllers;

use App\Models\NewPressRelease;
use App\Models\User;
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
        return view('home');
    }

    public function manageContent(){
        $pressReleases = NewPressRelease::where('user_id',Auth::user()->id)->get();
        $pressReleasesDraft = NewPressRelease::where('user_id',Auth::user()->id)->where('status',0)->get();
        $pressReleasesPending = NewPressRelease::where('user_id',Auth::user()->id)->where('status',1)->get();
        $pressReleasesPosted = NewPressRelease::where('user_id',Auth::user()->id)->where('status',2)->get();
        return view('user.pages.manageContent',['pressReleases'=>$pressReleases,
                                                    'pressReleasesDraft'=>$pressReleasesDraft,
                                                    'pressReleasesPending'=>$pressReleasesPending,
                                                    'pressReleasesPosted'=>$pressReleasesPosted]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
