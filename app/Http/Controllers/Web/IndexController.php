<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ($page = 'index')
    {
        if(!view()->exists('web.'.$page)) return view('web.404', [], 404);

        return view('web.'.$page);
    }
}
