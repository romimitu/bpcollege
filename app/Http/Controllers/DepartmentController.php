<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Department;

class departmentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $departments = Department::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.department.index', ['departments' => $departments]);  
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(DepartmentRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/department/');
        $department = Department::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/department');  
    }

    public function show(Department $department)
    {
        //
    }
    public function edit(Department $department)
    {
        return view('admin.department.edit', ['department' => $department]);
    }

    public function update(DepartmentRequest $request, Department $department)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/department/');
        $department->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/department');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/department');
    }
}
