<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Department;
use App\Member;
use App\Blog;
use App\Notice;

class PublicController extends Controller
{
    public function allNews()
    {
        $news = Blog::orderBy('created_at', 'asc')->paginate(12);
        return view('public.news-events', ['news' => $news]);
    }
    public function newsDetails($id, $slug)
    {
        $news = Blog::find($id);
        return view('public.news-single', ['news' => $news]);
    }

    public function TeamMember()
    {
        $teams = Member::orderBy('created_at', 'asc')->paginate(7);
        return view('public.about-us', ['teams' => $teams]);
    }

    public function allNotice()
    {
        $notices = Notice::orderBy('created_at', 'asc')->paginate(12);
        return view('public.notice', ['notices' => $notices]);
    }

    public function SingleNotice($id, $slug)
    {
        $notice = Notice::find($id);
        return view('public.notice-single', ['notice' => $notice]);
    }
}
