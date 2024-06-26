<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $foto = Foto::join('albums', 'albums.AlbumID', '=', 'fotos.AlbumID')->get();
        $foto = Foto::join('users', 'users.UserID', '=', 'fotos.UserID')->get();
        return view('gallery', compact('foto'));
        //return view('gallery', ['foto' => $foto]);
    }

    public function foto()
    {
        $album = Album::all();
        return view('layouts.header', compact('album'));
    }

}
