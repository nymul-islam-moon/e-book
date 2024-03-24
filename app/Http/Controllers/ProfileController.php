<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    protected $title;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->title = 'Profile';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;

        $user = User::where('id', '=', auth()->user()->id)->first();

        return view('admin.profile.index', compact('title', 'user'));
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
    public function update(UpdateProfileRequest $request, User $profile)
    {
        $formData               = $request->validated();

        if ( isset( $formData['image'] ) ) {

            $imgFile            = $request->file('image')->getClientOriginalName();
            $imgFileArr         = explode('.', $imgFile);
            $imgOriginalName    = $imgFileArr[0];
            $imgName            = $imgOriginalName .'.'. $request->image->extension();

            // unlink img
            if ( isset($profile->image) ) {
                try {
                    unlink( 'uploads/user/img/' . $profile->img );
                } catch ( Exception $ex ) {

                }
            }

            $request->image->move( public_path('uploads/user/img/'), $imgName );
            $formData['image']    = $imgName;
        }

        $profile->update($formData);

        return response()->json("$this->title Updated Successfully");
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
