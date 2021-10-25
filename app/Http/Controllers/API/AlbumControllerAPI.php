<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\Album;

class AlbumControllerAPI extends Controller
{
    public function index()
    {
        $album = Album::all();
        return response()->json(['album'=>$album],200);
    }
}
