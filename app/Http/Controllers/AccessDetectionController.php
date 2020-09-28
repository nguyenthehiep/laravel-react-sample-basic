<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\AccessDetection;
use Illuminate\Support\Str;

class AccessDetectionController extends Controller
{
    //
    public function index(){
        event(new AccessDetection(Str::random(100)));
    }
}
