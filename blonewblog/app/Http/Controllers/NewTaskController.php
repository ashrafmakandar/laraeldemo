<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\newtask;
class NewTaskController extends Controller
{


    public function index(){
        return view('newadd');
    }

    public function add(Request $request){


        $newtask= new newtask();

        $newtask->name=request('name');
        $newtask->task=request('task');
        $newtask->save();
        return redirect('/newshow');

    }

    public function newshow(){

        $newtask= newtask::all();

        return view('newshow',compact('newtask'));
    }

    public function delete($id)
    {
        DB::delete('delete from newtasks where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/deletetask">Click Here</a> to go back.';
    }


    public function update(Request $request,$id)
    {
        $name = $request->input('name');
        $job = $request->input('task');
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update('update newtasks set name = ?,task=? where id = ?',[$name,$job,$id]);
        echo "Record updated successfully.
        ";
        echo '<a href = "/newshow">Click Here</a> to go back.';
    }

    public function edit($id){
        $newtask = DB::select('select * from newtasks where id = ?',[$id]);
        return view('newupdat',['newtask'=>$newtask]);
    }

}
