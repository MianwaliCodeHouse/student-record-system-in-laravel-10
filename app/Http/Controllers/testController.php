<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;


class testController extends Controller
{
    public function delete($id){
        test::find($id)->delete();
        return redirect(route('data.display'));
    }


    public function update(Request $r){
        $r->validate(
            [
                'name'=>'required',
                'id_number'=>'required',
                'program'=>'required',
            ]
            );
        $id=$r['id'];
        $Record=test::find($id);
        $Record->name=$r['name'];
        $Record->id_number=$r['id_number'];
        $Record->program=$r['program'];
        $Record->save();
        return redirect(route('data.display'));
    }
    public function edit($id){
        $student=test::find($id);
        if(!empty($student)){
            $data=compact('student');
            return view("edit")->with($data);
        }else{
            return redirect(route('data.display'));
        }
    }


    public function display(Request $r){
        $search=$r['search']??'';
        if(!empty($search)){
            $students=test::where('name','LIKE','%'.$search.'%')->orWhere('id_number','LIKE','%'.$search.'%')->get();
        }else{
            $students=test::all();
        }
        $students=$students->toArray();
        $data=compact('students','search');
        return view('fetch')->with($data);
    }


    public function index(){
        return view('form');
    }


    public function insert(Request $r){
        $r->validate(
            [
                'name'=>'required',
                'id_number'=>'required|unique:tests',
                'program'=>'required',
            ]
            );
        $newRecord=new test;
        $newRecord->name=$r['name'];
        $newRecord->id_number=$r['id_number'];
        $newRecord->program=$r['program'];
        $newRecord->save();
        return redirect(route('data.display'));
    }
}
