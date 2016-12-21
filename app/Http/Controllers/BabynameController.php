<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Http\Requests;
use App\Character;
use App\Name;
use Image;
use File;
use Illuminate\Support\Facades\DB;

class BabynameController extends Controller
{
    //
    function show(){  
    $chalist = Character::orderBy('created_at', 'asc')->get();
    
    return view('babynames', [
        'chalist' => $chalist
    ]);
    }
    function generate(Request $request){
      $gender=$request->input('gender');
        $cat=$request->input('cat');
        $namelist = Name::orderBy('created_at', 'asc')->where(['gender'=>$gender,'cat'=>$cat])->pluck('meaning','name')->all();
        
        $result=array_rand($namelist,3);
        $gotname=array();
        $gotname[$result[0]]=$namelist[$result[0]];
        $gotname[$result[1]]=$namelist[$result[1]];
        $gotname[$result[2]]=$namelist[$result[2]];
        $data=array();
        $data['cat']=$cat;
        $data['result']=$gotname;
        return json_encode($data);  
    }
}
