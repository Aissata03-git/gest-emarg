<?php

namespace App\Http\Controllers;


use Inertia\Inertia;

class IndexController extends Controller
{

    public function index()
    {
        return inertia('index/Index');
    }


}
