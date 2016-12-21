<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\People;
use App\User;
use Image;
use File;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    //
    protected $redirectTo = '/home';
    public function __construct(){
        $this->middleware('auth');
        
    }
    function show(){  
    $peoplelist = people::orderBy('created_at', 'asc')->get();
    
    return view('peoplelist', [
        'peoplelist' => $peoplelist
    ]);
    }
    function store(Request $request){
        
        $username=Auth::user()->name;  
        $this->validate($request, [
            'name' => 'required|max:255',
            'carear' => 'required|max:100',
            'age' => 'required|max:100|numeric',
            'age_group'=>'required',
            'gender'=>'required',
            'description' => 'required|max:1000',
    ]);
       $people=new People;
       $pid=$people->create([
            'name' => $request->input('name'),
                    'carear' => $request->input('carear'),
                    'age' => $request->input('age'),
                    'age_unit' => $request->input('age_unit'),
                    'age_group' => $request->input('age_group'),
                    'gender' => $request->input('gender'),
                    'description' => $request->input('description'),
                ])->id;
       $file=$request->file('pic');
       if($request->hasFile('pic')){
       $des='upload';
       $extension=$file->getClientOriginalExtension();
       $filename=$des.'/'.$pid.'main.'.$extension;
       Image::make($file)->resize(200,200)->save($filename);
       Session::flash('success', 'Upload successfully'); 
       return Redirect::to('home');
       }
       else{
           Session::flash('error', 'uploaded file is not valid');
           return Redirect::to('home');
       }
    }
    function delete($id){
        DB::table('people')->where('id',$id)->delete();
        $filename='upload/'.$id.'main.jpg';
        File::delete($filename);
        return Redirect::to('peoplelist');
    }
}
