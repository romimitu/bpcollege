<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\NoticeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Notice;

class noticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notices = Notice::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.notice.index', ['notices' => $notices]);  
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(NoticeRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/notice/');
        $notice = Notice::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/notice');  
    }

    public function show(Notice $notice)
    {
        //
    }
    public function edit(Notice $notice)
    {
        return view('admin.notice.edit', ['notice' => $notice]);
    }

    public function update(NoticeRequest $request, Notice $notice)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/notice/');
        $notice->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/notice');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/notice');
    }
}
