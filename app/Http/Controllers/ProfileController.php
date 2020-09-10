<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;
Use Auth;
Use Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

 public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $profile = Profile::all();
        return view('profile.index',['profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile = new Profile;

        $profile->name = $request->input('name');
        $profile->email  = $request->input('email');
        $profile->mobile = $request->input('mobile');
        $profile->password  = $request->input('password');
        


        if($request->hasfile('image'))
        {
            $file = $request->file('image');

           

            $extension = $file->getClientOriginalExtension();
            
            $filename = time().'.'.$extension;

            $file->move('uploads/profile/',$filename);
            $profile->image = $filename;
            

        }
        else
        {
          $filename = 'noimage.jpg';
        }
      




    $profile->save();

     return  redirect('/profile');
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
    public function edit($profile)
    {
       $profile = Profile::find($profile);
       return view('profile.edit',['profile'=>$profile]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $profile)
    {
        $profile = Profile::Find($profile);

        $profile->name = $request->input('name');
        $profile->email  = $request->input('email');
        $profile->mobile = $request->input('mobile');
        $profile->password  = $request->input('password');


         if($request->hasfile('image'))
        {
            $file = $request->file('image');

           

            $extension = $file->getClientOriginalExtension();
            
            $filename = time().'.'.$extension;

            $file->move('uploads/profile/',$filename);
            $profile->image = $filename;
            

        }
        else
        {
          $filename = 'noimage.jpg';
        }

        $profile->update(); 

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($profile)
    {
        $profile = Profile::find($profile)->first();
        $profile->delete(); 
        return redirect('profile');
    }



    public function logout () {
    
    auth()->logout();

    return redirect(route('/login'));
}

}
