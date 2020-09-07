<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
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
       $arrCompany =  Company::all();
       return view('company.index',['arrCompany'=>$arrCompany]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objCompany = new Company();
        $objCompany->name = $request->name;
        $objCompany->email = $request->email;
        $objImage = $request->file('image');
        dd($objImage);
//        $strImageName  =  rand().'.'.$objImage->getClientOriginalExtension();
        $strImageName =$objImage->store('/public/images'); //image store to storage/public folder
//        $objImage->move(public_path('images'),$strImageName); //image store to /public folder
        $objCompany->logo = $strImageName;
        $objCompany->website = $request->website;
        $objCompany->save();
        return redirect('/companies')->with('success','Company saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objCompany = Company::findOrFail($id);
        return view('company.show',['objCompany'=>$objCompany]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objCompany = Company::findOrFail($id);
        return view('company.edit',['objCompany'=>$objCompany]);
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
        $objCompany = Company::find($id);
        $objCompany->name = $request->name;
        $objCompany->email = $request->email;
        $objImage = $request->file('image');
        $strImageName=$request->hidden_image;
        $strImageName=rand().'.'.$objImage->getClientOriginalExtension();
        $objImage->move(public_path('images'),$strImageName);
        $objCompany->logo = $strImageName;
        $objCompany->website = $request->website;
        $objCompany->save();
        return redirect('/companies')->with('success','Company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objCompany = Company::find($id);
        $objCompany->delete();
        return redirect('/companies')->with('success','Company Deleted Successfully');
    }
}
