<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{

    public function show($filename)
    {
        $image = storage_path('app/privateImages/' . $filename);

        return Image::make($image)->response();
    }
}
