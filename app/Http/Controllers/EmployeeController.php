<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arrObjEmployees= DB::table('employees')->paginate(10);
       return view('employee.index',['arrObjEmployees'=>$arrObjEmployees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrObjCompany = Company::all();
        return view('employee.create',['arrObjCompany'=>$arrObjCompany]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $objEmployee = new Employee();
        $objEmployee->first_name = $request->first_name;
        $objEmployee->last_name = $request->last_name;
        $objEmployee->company_id = $request->company_id;
        $objEmployee->email = $request->email;
        $objEmployee->phone = $request->phone;
        $objEmployee->company_id = $request->company_id;
        $objEmployee->save();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objEmployee =  Employee::find($id);
//        $objEmployee =  Employee::orderBy('id','desc')->skip(2)->take(2)->get();
//        dd($objEmployee);
        $objCompany =  Company::find($objEmployee->company_id);
        $strCompanyName = $objCompany->name;
        return view('employee.show',['objEmployee'=>$objEmployee,'strCompanyName'=>$strCompanyName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objEmployee =  Employee::find($id);
        $arrObjCompany = Company::all();
        return view('employee.edit',['objEmployee'=>$objEmployee,'arrObjCompany'=>$arrObjCompany]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
       $objEmployee =  Employee::find($id);
//       dd($objEmployee->company_id);
        $objEmployee->first_name = $request->first_name;
        $objEmployee->last_name = $request->last_name;
        $objEmployee->company_id = (int)$request->company_id;
        $objEmployee->email = $request->email;
        $objEmployee->phone = $request->phone;
        $objEmployee->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $objEmployee =  Employee::find($id);
        $objEmployee->delete();
        return redirect('/employees');
    }
}
