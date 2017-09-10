<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LayoutController extends Controller
{
    public function layout_welcome()
    {
        return view('.layout.welcome');
    }

    public function layout_about()
    {
        return view('.layout.about');
    }
}
