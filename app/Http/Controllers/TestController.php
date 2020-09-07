<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajax()
    {
        return view('ajax_form');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function postAjax(Request $request)
    {
//        $objImage = new Image();
//        $objImageFile = $request->file('file');
//        $objImage->image = $objImageFile;
//        dd($objImage);
//        $objImage->save();
        return response()->json(['success'=>'Image Saved Successfully','data'=>$request->file]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ajaxExample()
    {
        return view('ajax');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postAjaxExample(Request $request)
    {
        return response()->json(['first_name'=>$request->first_name,'last_name'=>$request->last_name,]);
    }
}
