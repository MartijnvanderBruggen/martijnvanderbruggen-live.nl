<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ImageController extends Controller
{
    public function showLogo() 
    {
        $image = Image::make(asset("storage/logo.png"))->resize(100,100);
        
        return $image->response();
    }
}
