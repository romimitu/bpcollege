<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MediaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Media;

class mediaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $medias = Media::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.media.index', ['medias' => $medias]);  
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(MediaRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/media/');
        $media = Media::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/media');  
    }

    public function show(Media $media)
    {
        //
    }
    public function edit(Media $media)
    {
        return view('admin.media.edit', ['media' => $media]);
    }

    public function update(MediaRequest $request, Media $media)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/media/');
        $media->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/media');
    }

    public function destroy(Media $media)
    {
        $media->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/media');
    }
}
