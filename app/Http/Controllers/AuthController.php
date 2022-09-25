<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);
        DB::table('users')->insert($data);
        return back();
    }
}
