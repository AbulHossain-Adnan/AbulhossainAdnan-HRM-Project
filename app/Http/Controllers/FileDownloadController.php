<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FileDownloadController;

class FileDownloadController extends Controller
{
    public function filedownload($id){
        return response()->download('storege/'.$id);
       
    }
}
