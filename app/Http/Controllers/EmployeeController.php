<?php

namespace App\Http\Controllers;
use App\employee;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employee=employee::orderBy('id','desc')->paginate(10);
       return view('employee.index')->withemployee($employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(array(
        'first_name'=>'required|max:225',
        'last_name'=>'required',
        'company'=>'required',
        'email'=>'required',
        'phone'=>'required'
        ));

      $employee=new employee;
      $employee->first_name=$request->first_name;
      $employee->last_name=$request->last_name;
      $employee->company=$request->company;
      $employee->email=$request->email;
      $employee->phone=$request->phone;
      $employee->save();
      session::flash('success','done!!!');
      return redirect()->route('EmployeeController.show',$employee->id);
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $employee=employee::find($id);
      return view("employee.show")->withemployee($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $employee=employee::find($id);
      return view('employee.edit')->withemployee($employee);
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
      $employee=new employee;
       $this->request->validate(array(
        'first_name'=>'required|max:225',
        'last_name'=>'required',
        'company'=>'required',
        'email'=>'required',
        'phone'=>'required'
        ));


        $employee->first_name =$request->input('first_name');
        $employee->last_name=$request->input('last_name');
        $employee->company=$request->input('company');
        $employee->email=$request->input('email');
        $employee->phone=$request->input('phone');
        $employee->save();
        return redirect()->Route('EmployeeController.show');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $employee=$employee::find($id);
      $employee->Delete();
      return redirect()->route('EmployeeController.index');
    }
}
