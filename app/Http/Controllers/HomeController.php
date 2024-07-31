<?php

namespace App\Http\Controllers;

use App\Helper\GenerateHash;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    use GenerateHash;

    public function index(Request  $request)
    {
        $h = $this->encrypt('jayde.larson@example.net');

        $e = $this->decrypt($request->hash);

        return view('welcome', compact('h','e'));
    }
}
