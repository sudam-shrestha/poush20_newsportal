<?php

use Illuminate\Support\Facades\Auth;

function upload_image($file)
{
    if ($file) {
        $file_name = time() . Auth::user()->id . "." . $file->getClientOriginalExtension(); //12346543.jpg
        $file->move("images", $file_name);
        return "images/$file_name";
    }
}
