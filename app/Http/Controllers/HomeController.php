<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() // __invoke() is a magic method
    {
        return 'Hello World desde el controller';
    }
}
