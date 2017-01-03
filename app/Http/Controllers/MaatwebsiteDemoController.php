<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Excel;

class MaatwebsiteDemoController extends Controller
{
    //
   
    function arrayToObject($e){
    if( gettype($e)!='array' ) return;
    foreach($e as $k=>$v){
        if( gettype($v)=='array' || getType($v)=='object' )
            $e[$k]=(object)($this->arrayToObject($v));
    }
    return (object)$e;
}    
    public function importExcelv1(Request $request)
	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();
                        $data=$data->toArray()[0];
                       
                        foreach($data as $key=>$value){ 
                            $data[$key]['price']=intval($value['price']*100);
                            $data[$key]['weight']=intval($value['weight']/$value['qty']*1000);
                        }
                        $data=$this->arrayToObject($data);
                        return view('v1/multiorder', ['data' => $data]);
		}

		return back()->with('error','Please Check your file, Something is wrong there.');
	}
        
        public function importExcelv2(Request $request)
	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();
                        $data=$data->toArray()[0];
                       
                        foreach($data as $key=>$value){ 
                            $data[$key]['price']=intval($value['price']*100);
                            $data[$key]['weight']=intval($value['weight']/$value['qty']);
                        }
                        $data=$this->arrayToObject($data);
                        return view('v2/multiorder', ['data' => $data]);
		}

		return back()->with('error','Please Check your file, Something is wrong there.');
	}
        

}
