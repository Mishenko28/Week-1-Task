<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller
{
    public function __construct() {}

    public function index(PageRequest $request)
    {
        return view('web.home');
    }

    public function articles(PageRequest $request)
    {
        return view('web.home');
    }

    public function about(PageRequest $request)
    {
        return view('web.home');
    }

    public function contact(PageRequest $request)
    {
        return view('web.home');
    }
}
