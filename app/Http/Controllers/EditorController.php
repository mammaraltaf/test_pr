<?php

namespace App\Http\Controllers;

use App\Models\NewPressRelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DateTime;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('user.pages.newArticle');
        return view('editor.editor');
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

    /*stored press release data into database*/
    public function store(Request $request)
    {
        try {
            $newPressRelease = $request->all();
            $rules = array(
                'title' => 'required',
                'description' => 'required',
            );
            // Passing input with defined rules through validator class
            $validation = Validator::make($newPressRelease, $rules);
            //if validation fails
            if ($validation->fails()) {
                //redirect back with validation errors
                return Redirect::back()->withErrors($validation);
            }
            // $image = self::uploadImagenew();
//            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
//            $request = request()->image->move(public_path('Upload_images'), $imageName);
            NewPressRelease::insertGetId(array('user_id' => Auth::user()->id, 'title' => $newPressRelease['title'], 'description' => $newPressRelease['description'], 'created_at' => new DateTime, 'updated_at' => new DateTime));
            $newPressRelease['successMsg'] = 'Press Release was successfully created!';

            return Redirect::route('user.newPressRelease')->withInput($newPressRelease);

        } catch (\Exception $e) {
            echo 'Exception Message: ' . $e->getMessage();
        }
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
