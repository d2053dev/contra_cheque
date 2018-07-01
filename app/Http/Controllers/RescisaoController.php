<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RescisaoController extends Controller
{
  public function index()
  {
      return view('rescisao.index');
  }
}
