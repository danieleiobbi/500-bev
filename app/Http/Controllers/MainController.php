<?php

namespace App\Http\Controllers;

use App\Configurations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = ['page' => 'home'];
        $config = $this->config();
        return view('frontend.home', compact('data', 'config'));
    }

    private function config()
    {
        return [];
    }
}
