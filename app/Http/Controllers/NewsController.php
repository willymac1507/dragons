<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::latest()->paginate(6)
        ]);
    }

    public function show(News $news)
    {
        return view('news.show', [
            'item' => $news
        ]);
    }
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('file-upload')->store('privateImages');

        request()->validate([
            'headline' => 'required',
            'body' => 'required'
        ]);

        News::create([
            'user_id' => auth()->id(),
            'headline' => request('headline'),
            'slug' => request('slug'),
            'body' => request('body'),
            'image_url' => $path

        ]);

        return back();

    }
}
