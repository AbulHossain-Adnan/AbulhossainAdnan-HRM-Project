<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileeController;

class FileeController extends Controller
{
    public function index($id){
        return $id;

    }
}
