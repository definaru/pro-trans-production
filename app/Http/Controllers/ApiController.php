<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getValue(Request $request)
    {
        $request->validate([
            'uuid' => 'required'
        ]);
        $uuid = $request->input('uuid');
    }
}
