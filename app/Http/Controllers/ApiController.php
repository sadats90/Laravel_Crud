<?php
   
namespace App\Http\Controllers;
   
use App\Profile;
use Illuminate\Http\Request;
use Redirect;
use PDF;
use response;
   
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {

        $pp = Profile::all();
        return  response()->json($profile);

    }



    public function create(Request $request)
    {
        $profile = new Profile;

        $profile->name = $request->input('name');
        $profile->email  = $request->input('email');
        $profile->mobile = $request->input('mobile');
        $profile->password  = $request->input('password');
        

        $profile->save();

        return  response()->json($profile);
    }



       public function store(Request $request)
    {

        $profile = new Profile;

        $profile->name = $request->input('name');
        $profile->email  = $request->input('email');
        $profile->mobile = $request->input('mobile');
        $profile->password  = $request->input('password');




    $profile->save();

     return  response()->json($profile);
    }
    
   
}