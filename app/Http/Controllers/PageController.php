<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::whereSlug($slug)->first();

        $content = '';

        if($page){
            $content = $page->html;
        }else{
            $content = '<td width="432" class="inhalt">Seite konnte nicht gefunden werden.</td>';
        }

        return view('page', [
            'content' => $content
        ]);
    }
}
