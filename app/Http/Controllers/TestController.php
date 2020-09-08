<?php

namespace App\Http\Controllers;

use App\Blog;
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
    public function postAjax(Request $objRequest)
    {
//        $objImage = new Image();
//        $objImageFile = $objRequest->file('file');
//        $objImage->image = $objImageFile;
//        dd($objImage);
//        $objImage->save();
        return response()->json(['success'=>'Image Saved Successfully','data'=>$objRequest->file]);
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
    public function postAjaxExample(Request $objRequest)
    {
        return response()->json(['first_name'=>$objRequest->first_name,'last_name'=>$objRequest->last_name,]);
    }

    /**
     * create blog
     *
     */
    public function blogCreate()
    {
        return view('blog_create');
    }
    /**
     * create blog
     *
     */
    public function storeBlog(Request $objRequest)
    {
        $objBlog = new Blog();
        $objBlog->title = $objRequest->title;
        $objBlog->description = $objRequest->description;
        $objBlog->date = $objRequest->date;
        $objBlog->save();
        return response()->json(['message'=>'Record Saved Successfully','title'=>$objRequest->title,'description'=>$objRequest->description,'date'=>$objRequest->date]);
    }
}
