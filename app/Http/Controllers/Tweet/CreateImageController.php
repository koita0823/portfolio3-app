<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use App\Models\Image;

class CreateImageController extends Controller
{
    public function store(CreateRequest $request) 
    {
        $img=$request->imgpath->store('image'); 
    }
}
