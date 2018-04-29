<?php

namespace App\Http\Controllers\learn_module;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\learn_module\track_category;

class TrackHomeController extends Controller
{
    public function index() {

      $tracks = track_category::with('tracks')->get();

      return $tracks;

    }
}
