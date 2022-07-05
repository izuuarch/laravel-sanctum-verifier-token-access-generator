<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function register (Request $req){
        // $fields = $req->validate([
        //     'name' => 'required|string',
        // ]);
    }
}
