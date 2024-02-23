<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    public function index()
    {
        $news = DB::table('News')
            ->select(DB::raw('DATE_FORMAT(CreatedAt, "%H:%i") as Time'), 'TitleNews')
            ->orderBy('CreatedAt', 'desc')
            ->get();
        
return response()->json($news);
    }
}

// for testing http://localhost:8000/api/news