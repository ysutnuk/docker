<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService {

    public function uploadImg($image)
    {
        $filePath = Storage::disk('public')->put('logos', $image);

        return 'storage/'.$filePath;
    }
}
