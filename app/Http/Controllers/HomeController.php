<?php

namespace App\Http\Controllers;

use App\Models\Hauptnews;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $content = Hauptnews::get()->sortByDesc('date');
        return view('news', [
            'content' => $content,
        ]);
    }
}
