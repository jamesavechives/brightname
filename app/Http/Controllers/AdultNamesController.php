<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Validator;
use App\Name;
use App\User;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;

class AdultNamesController extends Controller
{
    //
    public function __construct(){
       
    }
    
    function show(){
        return view('adultnames');
    }
    function generate(Request $request){
        $this->validate($request, [
            'cn_name' => 'required|max:255',
            'gender'=>'required'
        ]);
        $cn_name=$request->input('cn_name');
        $gender=$request->input('gender');
        $namelist = Name::orderBy('created_at', 'asc')->where(['gender'=>$gender])->pluck('name');
        var_dump($namelist);
        exit;
    }
    function process_adult(Request $request){
        $gender=$request->input('gender');
        $bihua=$request->input('bihua');
        $cat=0;
        if($bihua%3==0){
            $cat=3;
        }
        else{
            $cat=$bihua%3;
        }
        $namelist = Name::orderBy('created_at', 'asc')->where(['gender'=>$gender,'cat'=>$cat])->pluck('name')->all();
        $result=array_rand($namelist,3);
        $gotname=array();
        $gotname[0]=$namelist[$result[0]];
        $gotname[1]=$namelist[$result[1]];
        $gotname[2]=$namelist[$result[2]];
        $data=array();
        $data['bihua']=$bihua;
        $data['cat']=$cat;
        $data['result']=$gotname;
        return json_encode($data);
    }
}
