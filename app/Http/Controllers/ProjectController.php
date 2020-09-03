<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrObjProject = Project::all();
        return view('project.index',['arrObjProject'=>$arrObjProject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrObjCompany = Company::all();
        return view('project.create',['arrObjCompany'=>$arrObjCompany]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $objRequest)
    {
        $objProject = new Project();
        $objProject->name  = $objRequest->name;
        $objProject->client  = $objRequest->client;
        $objProject->status  = $objRequest->status;
        $objImage  = $objRequest->file('file');
        $strImageName = $objImage->store('/public/images');
        $objProject->image = $strImageName;
        $objProject->company_id  = $objRequest->company_id;
        $objProject->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objProject = Project::find($id);
        return view('project.show',['objProject'=>$objProject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $objProject = Project::find($id);
       $arrObjCompany = Company::all();
       return view('project.edit',['objProject'=>$objProject,'arrObjCompany'=>$arrObjCompany]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $objRequest, $id)
    {
        $objProject = Project::find($id);
        $objProject->name  = $objRequest->name;
        $objProject->client  = $objRequest->client;
        $objProject->status  = $objRequest->status;
        $objImage = $objRequest->file('file');
        $strImageName = $objImage->store('/public/images');
        $objProject->image = $strImageName;

        $objProject->image = $strImageName;
        $objProject->company_id  = $objRequest->company_id;
        $objProject->save();
        return redirect('/projects')->with('success','Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $objProject =  Project::find($id);
       $objProject->delete();
       return redirect('/projects');
    }
}
