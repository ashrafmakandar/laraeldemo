<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apimodel;

class ApiController extends Controller
{
    public function index(Request $request){

$apimodel= new Apimodel();
$apimodel->name=$request->input('name');
$apimodel->email= $request->input('email');
$apimodel->save();
return response()->json($apimodel);




    }

    public function show(){

$apimodel=  Apimodel::all();
return response()->json($apimodel);


    }

    public function fetch($id)
    {
        $apimodel=  Apimodel::find($id);
        return response()->json($apimodel);

    }
    public function delete(Request $request,$id)
    {
        $apimodel=  Apimodel::find($id);
        $apimodel->delete();
        return response()->json($apimodel);

    }

    public function update(Request $request,$id){

$apimodel = Apimodel::find($id);
$apimodel->name=$request->input('name');
$apimodel->email= $request->input('email');
$apimodel->save();
return response()->json($apimodel);


    }
}
