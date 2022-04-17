<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NewPressRelease;

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

    // Comment
     public function index()
    {
        return view('adminHome');

    }

    public function manageContentIndex(){
        $pressReleases = NewPressRelease::where('user_id',Auth::user()->id)->get();
        return view('admin.pages.manageContent',['pressReleases'=>$pressReleases]);
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
        return view('admin.pages.customers');
    }

    public function rssConfigurationindex(){
        return view('admin.pages.rssConfigurations');
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
