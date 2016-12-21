<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Http\Requests;
use App\People;
use Image;
use Auth;
use File;
use Illuminate\Support\Facades\DB;

class AdultGalleryController extends Controller
{
    //
    public function __construct(){
       
    }
    
    function show($type){
        if($type=="all"){
        $peoplelist = People::orderBy('created_at', 'asc')->where([
         ['age_group','=','adult']   
        ])->get();
        }
        else if($type=="male"){
         $peoplelist = people::orderBy('created_at', 'asc')->where([
         ['age_group','=','adult'],
         ['gender','=','male']    
        ])->get();   
        }
        else if($type=="female"){
         $peoplelist = people::orderBy('created_at', 'asc')->where([
         ['age_group','=','adult'],
         ['gender','=','female']    
        ])->get();   
        }
        else{
            return false;
        }
        
        
        return view('adultgallery',[
        'peoplelist' => $peoplelist,
        'type'=>$type    
         ]);
    }
    function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'gender'=>'required',
            'description' => 'required|max:1000',
    ]);
       $people=new People;
       $pid=$people->create([
            'name' => $request->input('name'),
                    'gender' => $request->input('gender'),
                    'description' => $request->input('description'),
                    'age_group'=>'adult',
                ])->id;
       $file=$request->file('pic');
       if($request->hasFile('pic')){
       $des='upload';
       $extension=$file->getClientOriginalExtension();
       $filename=$des.'/'.$pid.'main.'.$extension;
       Image::make($file)->resize(200,200)->save($filename);
       Session::flash('success', 'Upload successfully'); 
       return Redirect::to('adultgallery/all');
       }
       else{
           Session::flash('error', 'uploaded file is not valid');
           return Redirect::to('adultgallery/all');
       }
    }
}
