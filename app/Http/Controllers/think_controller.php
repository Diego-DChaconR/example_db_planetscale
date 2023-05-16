<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Think;

class think_controller extends Controller
{
    function showInfo() {
        $data = Think::all();
        return view('think_view', ['think' => $data]);
    }
}
