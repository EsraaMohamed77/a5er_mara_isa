<?php

namespace App\Http\Controllers;
use App\admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("admin.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,array(
      'email' => 'required',
      'password' =>'required',
    ));
    $admin=new admin;
    $admin->email=$request->email;
    $admin->password=$request->password;


    $admin->save();
    return redirect()->route('AdminConroller.show',$admin->id);
  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $admin=admin::find($id);
      return view('admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $admin=admin::find($id);
      return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  $admin=$admin::find($id);
      $this->validate(array(
        'email' => 'required',
        'password' =>'required',

      ));
      $admin->email=$request->input('email');
      $admin->password=$request->input('password');
      return redirect()->route('AdminController.show',$admin->id);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $admin=admin::find($id);
      $admin->delete();

      return redirect()->Route('AdminController.index');
    }
}
