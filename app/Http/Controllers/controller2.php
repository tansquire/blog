<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model1;

class controller2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //fname, lname, email, phone comes from form
    {
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $model1 =new model1;
        $model1->fname=$request->fname; //$model1->fname is db field name. model means table
        $model1->lname=$request->lname;
        $model1->email=$request->email;
        $model1->phone=$request->phone;
        $model1->save();
        return redirect(route('home'))->with('successMsg','Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=model1::find($id);
        return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $student =model1::find($id);
        $student->fname=$request->fname; //$model1->fname is db field name. model means table
        $student->lname=$request->lname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return redirect(route('home'))->with('successMsg','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        model1::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Student deleted successfully');

    }
}
