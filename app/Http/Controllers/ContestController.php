<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    public function index(){
        $content = Contest::all();

        return view('contest.index', [
            'content' => $content,
        ]);
    }

    public function show($id){

        $content = Contest::whereId($id)->first();

        return view('contest.show', [
            'content' => $content,
        ]);
    }
}
