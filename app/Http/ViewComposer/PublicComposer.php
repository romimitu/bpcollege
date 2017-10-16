<?php
namespace App\Http\ViewComposer;

use App\Blog;
use App\Notice;
use App\About;
use Illuminate\View\View;

class PublicComposer
{
    public function allBlog(View $view)
    {
        $blogs = Blog::orderBy('created_at', 'asc')->take(4)->get();
        $view->with('blogs', $blogs);
    }

    public function allNotice(View $view)
    {
        $allnotice = Notice::orderBy('created_at', 'asc')->take(4)->get();
        $view->with('allnotice', $allnotice);
    }

    public function collegeInfo(View $view)
    {
        $collegeinfo = About::get();
        $view->with('collegeinfo', $collegeinfo);
    }
}