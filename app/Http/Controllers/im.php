<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class im extends Controller
{
    public function index()
    {
        $manager = new ImageManager;
        $img=$manager->make(url ('img/img1.jpg'))->resize(100, null, function($constreaint){$constreaint->aspectRatio();})->save;
    }
}
