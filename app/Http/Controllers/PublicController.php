<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Department;
use App\Member;
use App\Gallery;
use App\Blog;
use App\Notice;

class PublicController extends Controller
{
    public function allNews()
    {
        $news = Blog::orderBy('created_at', 'desc')->paginate(12);
        return view('public.news-events', ['news' => $news]);
    }
    public function newsDetails($id, $slug)
    {
        $news = Blog::find($id);
        return view('public.news-single', ['news' => $news]);
    }

    public function TeamMember()
    {
        $teams = Member::orderBy('created_at', 'desc')->paginate(7);
        return view('public.member', ['teams' => $teams]);
    }

    public function allNotice()
    {
        $notices = Notice::orderBy('created_at', 'desc')->paginate(12);
        return view('public.notice', ['notices' => $notices]);
    }
    public function PhotoGallery()
    {
        $photos = Gallery::orderBy('created_at', 'desc')->paginate(20);
        return view('public.gallery', ['photos' => $photos]);
    }

    public function SingleNotice($id, $slug)
    {
        $notice = Notice::find($id);
        return view('public.notice-single', ['notice' => $notice]);
    }
}
