<?php

namespace App\Http\Controllers;

use App\Models\Rpgmakertool;
use Illuminate\Http\Request;

class RPGMakerToolsController extends Controller
{
    public function index($orderby = 'filename', $direction = 'asc'){
        //$content = Rpgmakertool::all()->sortBy('filename');

        $content = Rpgmakertool::orderBy($orderby,$direction)->paginate(10);

        return view('rpgmakertools.index', [
            'content' => $content,
            'orderby' => $orderby,
            'direction' => $direction,
        ]);
    }
}
