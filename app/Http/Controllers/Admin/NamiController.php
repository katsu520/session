<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NamiController extends Controller
{
  public function add() {
    return view('admin.nami.create');
  }
}
