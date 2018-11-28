<?php

namespace App\Http\Controllers;
use App\company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $companies=company::paginate(10);
      return view('company.index',compact($companies));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("company.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dump($request);
      $this->validate($request,array(
        'name'    =>  'required',
        'email'   =>  'required',
        'logo'    =>  'required',
        'website' =>  'required'
      ));
      $company=new company;
      $company->name=$request->name;
      $company->email=$request->email;
      $company->website=$request->website;
      if($request->hasFile('logo')){
        // $logo=$rquest->file('logo');
        // $filename = time() . '.' . $image->getClientOriginalExtension();
        // $location=public_path('storage/app/public/'.'logo');
        // Image::make($logo)->resize(100, 100)->save($location);
        // $company->logo = $filename;

      }

      $company->save();
      dd($company);
      return redirect()->route('company.show',$company->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=company::find($id);
        return view('company.show')->withcompany($company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=company::find($id);
        return view('company.edit')->withcompany($company);;
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
          $company=$company::find($id);
          $this->validate(array(
            'name' => 'required',
            'email' =>'required',
            'logo' =>'reuired',
            'website' =>'required'
          ));
          $company->name=$request->input('name');
          $company->email=$request->input('email');
          $company->website=$request->input('website');
          $company->logo=$request->input('logo');
          return redirect()->route('CompanyController.show',$company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company=company::find($id);
      $company->delete();

      return redirect()->Route('CompanyController.index');
    }
}
