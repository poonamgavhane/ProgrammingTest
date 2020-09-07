<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $arrObjPeople = DB::table('people')->orderBy('id', 'desc')->get();
       return view('person.index',['arrObjPeople'=>$arrObjPeople]);
    }

    /**
     * check middleware
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function collectionMethods()
    {
        $array = ['products' => ['desk' => ['price' => 100]]];

        Arr::forget($array, 'products');
       print_r( $array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $objPerson = new Person();
        $objPerson->first_name = $request->first_name;
        $objPerson->last_name = $request->last_name;
        $objPerson->address = $request->address;
        $objPerson->age = $request->age;
        $objPerson->date_of_birth = $request->date_of_birth;
        $objPerson->date_of_marriage = $request->date_of_marriage;
        $objPerson->save();
        return redirect('/persons')->with('success','Person created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objPerson = Person::find($id);
        return view('person.show',['objPerson'=>$objPerson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objPerson = Person::find($id);
        return view('person.edit',['objPerson'=>$objPerson]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request, $id)
    {
//        dd($request->cookie('first_name'));
        $objPerson = Person::find($id);
        $objPerson->first_name = $request->first_name;
        $objPerson->last_name = $request->last_name;
        $objPerson->address = $request->address;
        $objPerson->age = $request->age;
        $objPerson->date_of_birth = $request->date_of_birth;
        $objPerson->date_of_marriage = $request->date_of_marriage;
        $objPerson->save();
        return redirect('/persons')->with('success','Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objPerson = Person::find($id)->delete();
        return redirect('/persons')->with('success','Person deleted successfully');
    }

    /**
     * check middleware
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function middlewareCheck()
    {
        return view('person.show');
    }



}
