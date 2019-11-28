<?php

namespace App\Http\Controllers\SPBJ;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Cspbjm extends Controller
{
  public function index()
  {
        return view('SPBJ/SPBJMaster');
  }
}
