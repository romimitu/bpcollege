<?php
namespace App\Http\ViewComposer;

use App\Gallery;
use App\Member;
use App\Department;
use App\Blog;
use App\Notice;
use Illuminate\View\View;
use Illuminate\Support\PublicProvider;

class PublicComposer
{
    public function allDepartment(View $view)
    {
        $services = Department::orderBy('created_at', 'asc')->take(3)->get();
        $view->with('services', $services);
    }
    public function allBlog(View $view)
    {
        $blogs = Blog::orderBy('created_at', 'asc')->take(9)->get();
        $view->with('blogs', $blogs);
    }
}