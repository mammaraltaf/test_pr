<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NewPressRelease;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use DateTime;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','is_admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminHome');
    }

    public function manageContentIndex(){
        $pressReleases = NewPressRelease::where('user_id',Auth::user()->id)->get();
        $pressReleasesDraft = NewPressRelease::where('user_id',Auth::user()->id)->where('status',0)->get();
        $pressReleasesPending = NewPressRelease::where('user_id',Auth::user()->id)->where('status',1)->get();
        $pressReleasesPosted = NewPressRelease::where('user_id',Auth::user()->id)->where('status',2)->get();
        return view('admin.pages.manageContent',['pressReleases'=>$pressReleases,
            'pressReleasesDraft'=>$pressReleasesDraft,
            'pressReleasesPending'=>$pressReleasesPending,
            'pressReleasesPosted'=>$pressReleasesPosted]);
    }

    public function userPressReleases(){
        $pendingPosted = [1,2];
        $allPendingPosted = NewPressRelease::where('user_id','!=',1)->whereIn('status',$pendingPosted)->get();
        $pending = NewPressRelease::where('user_id','!=',1)->where('status','1')->get();
        $posted = NewPressRelease::where('user_id','!=',1)->where('status','2')->get();

        return view('admin.pages.userPressReleases',['allPendingPosted'=>$allPendingPosted,'pending'=>$pending,'posted'=>$posted]);
    }

    public function approveUserPost()
    {
        NewPressRelease::where('id',$_POST['id'])->update(['status' => 2]);
        return Response::json(array('success' => 1), 200);
    }

    public function declineUserPost()
    {
        NewPressRelease::where('id',$_POST['id'])->update(['status' => NULL,'deleted_at' => new DateTime]);
        return Response::json(array('success' => 1), 200);
    }

    public function newPressReleaseIndex(){
        return view('admin.pages.newPressRelease');
    }

    public function profileSettingIndex(){
        return view('admin.pages.profileSettings');
    }

    public function paymentsIndex(){
        return view('admin.pages.payments');
    }

    public function invoicesIndex(){
        return view('admin.pages.invoices');
    }

    public function customersIndex(){
        $customers = User::where('is_admin',0)->get();
        return view('admin.pages.customers',['customers'=>$customers]);
    }

    public function removeCustomer($id){
        User::find($id)->delete();
//        return redirect()->back();
    }

    public function rssConfigurationindex(){
        return view('admin.pages.rssConfigurations');
    }

    public function blockUser($id){

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
