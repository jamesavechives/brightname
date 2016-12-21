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

class NameController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        
    }
    function show(){  
    $namelist = Name::orderBy('created_at', 'asc')->paginate(10);
    
    return view('namelist', [
        'namelist' => $namelist
    ]);
    }
    function store(Request $request){
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'gender'=>'required',
            'cat' => 'required|integer',
            'meaning' => 'required|max:525',
    ]);
       $name=new Name;
       $pid=$name->create([
            'name' => $request->input('name'),
                    'gender' => $request->input('gender'),
                    'cat' => $request->input('cat'),
                    'meaning' => $request->input('meaning'),
                ])->id;
           return Redirect::to('namelist');
    }
    function update(Request $request){
      $this->validate($request, [
            'name' => 'required|max:255',
            'gender'=>'required',
            'cat' => 'required|integer',
            'meaning' => 'required|max:525',
    ]);
      $name=new Name;
      $name
          ->where('id',$request->input('nameid'))
           ->update([
            'name' => $request->input('name'),
                    'gender' => $request->input('gender'),
                    'cat' => $request->input('cat'),
                    'meaning' => $request->input('meaning'),
                ]);
           return Redirect::to('namelist');
    }
    function delete($id){
        DB::table('names')->where('id',$id)->delete();
        return Redirect::to('namelist');
    }
    function import(){
        $url="C:/Users/Leayee/Desktop/names.txt";
        $gender="male";
        $cat=3;
        $txt=file_get_contents("$url");
        $arr=explode("\n",$txt);
        array_pop($arr);
        foreach($arr as $v){
            $tmp=explode("-",$v);
            $name=new Name;
            $name->create([
            'name' => $tmp[0],
             'gender' => $gender,
             'cat' => $cat,
             'meaning' => $tmp[1],
                ]);
        }
    }
}
