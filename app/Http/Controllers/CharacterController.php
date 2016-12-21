<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Validator;
use App\Character;
use App\User;
use Auth;
use Session;
use File;
use Image;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        
    }
    function show(){  
    $chalist = Character::orderBy('created_at', 'asc')->get();
    
    return view('characterlist', [
        'chalist' => $chalist
    ]);
    }
    function store(Request $request){
        $username=Auth::user()->name;  
        $this->validate($request, [
            'name' => 'required|max:255',
            'cat'=>'required',
    ]);
       $cha=new Character;
       $pid=$cha->create([
            'name' => $request->input('name'),
                    'carear' => $request->input('carear'),
                    'cat' => $request->input('cat'),
                ])->id;
       $file=$request->file('pic');
       if($request->hasFile('pic')){
       $des='upload';
       $extension=$file->getClientOriginalExtension();
       $filename=$des.'/'.$pid.'cha.'.$extension;
       Image::make($file)->save($filename);
       Session::flash('success', 'Upload successfully'); 
       return Redirect::to('characterlist');
       }
       else{
           Session::flash('error', 'uploaded file is not valid');
           return Redirect::to('characterlist');
       }
    }
    function delete($id){
        DB::table('characters')->where('id',$id)->delete();
        $filename='upload/'.$id.'cha.jpg';
        File::delete($filename);
        return Redirect::to('characterlist');
    }
}
