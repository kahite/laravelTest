<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FleursController extends Controller
{

  public function list()
  {
    $fleursList =
    [
      'coquelicot',
      'lotus',
      'edelweiss',
      'capucine',
      'marguerite'
    ];
    return view('fleurs.list', ['fleurs' => $fleursList]);
  }
}
