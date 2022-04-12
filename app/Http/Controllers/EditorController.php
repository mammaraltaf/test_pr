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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $description = $request->description;
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        $path = storage_path('upload/');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        foreach($imageFile as $item => $image){
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);

            $image_name= "/upload/" . time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $description = $dom->saveHTML();
        $fileUpload = new NewPressRelease;
        $fileUpload->user_id = auth()->user()->id;
        $fileUpload->title = $request->title;
        $fileUpload->description = $description;
        $fileUpload->save();
        dd($fileUpload->toArray(),$description);
//        dd($description);


/*        try {
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

            NewPressRelease::insertGetId(array('user_id' => Auth::user()->id,
                                                'title' => $newPressRelease['title'],
                                                'description' => $newPressRelease['description'],
                                                'schedule_press_release_date_time' => $newPressRelease['schedule_press_release_date_time'],
                                                'status' => 1,
                                                'created_at' => new DateTime,
                                                'updated_at' => new DateTime));

            $newPressRelease['successMsg'] = 'Press Release was successfully created!';

            return Redirect::route('user.newPressRelease')->withInput($newPressRelease);

        } catch (\Exception $e) {
            echo 'Exception Message: ' . $e->getMessage();
        }*/
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

    public function editButtonstore(Request $request)
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

            NewPressRelease::insertGetId(array('user_id' => Auth::user()->id,
                'title' => $newPressRelease['title'],
                'description' => $newPressRelease['description'],
                'schedule_press_release_date_time' => $newPressRelease['schedule_press_release_date_time'],
                'status' => 0,
                'created_at' => new DateTime,
                'updated_at' => new DateTime));

            $newPressRelease['successMsg'] = 'Press Release was successfully created!';

            return Redirect::route('user.newPressRelease')->withInput($newPressRelease);

        } catch (\Exception $e) {
            echo 'Exception Message: ' . $e->getMessage();
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPressRelease = NewPressRelease::find($id);
        return view('editor.editPressRelease', ['editPressRelease' => $editPressRelease]);
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
        NewPressRelease::destroy($id);
        return redirect(route('user.manageContent'))->with('status', 'Press Release Deleted!');
    }
}
