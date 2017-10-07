<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\About;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $abouts = About::orderBy('created_at', 'asc')->paginate(1);
        return view('admin.about.index', ['abouts' => $abouts]); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', ['about' => $about]);
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $data = $request->except('about_img','mission_img','facts_img'); 
        if ($request->hasFile('about_img','mission_img','facts_img'))
        {            
            $data['about_img']=uploadFile('about_img',$request,'uploads/page/');
            $data['mission_img']=uploadFile('mission_img',$request,'uploads/page/');
            $data['facts_img']=uploadFile('facts_img',$request,'uploads/page/');
        } 
        $about->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/aboutcollege');
    }

    public function destroy($id)
    {
        //
    }
}
