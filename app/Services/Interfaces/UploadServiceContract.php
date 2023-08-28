<?php

namespace App\Services\Interfaces;

use App\File\File;
use Illuminate\Http\UploadedFile;

interface UploadServiceContract
{
    public function avatar(UploadedFile $file): File;
}
