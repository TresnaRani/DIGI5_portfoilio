<?php
namespace App\Services;

use App\File\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Services\Interfaces\UploadServiceContract;

class UploadService implements UploadServiceContract{
    public function avatar(UploadedFile $file): File
    {
        $name = $file->hashName();

       Storage::put("{$name}", $file);
        return new File(
            name: "{$name}",
            originalName: $file->getClientOriginalName(),
            mime: $file->getClientMimeType(),
            path: $file->path(),
            disk: config('app.uploads.disk'),
            hash: hash_file(
                    config('app.uploads.hash'),
                    storage_path(
                        path: "avatars/{$name}",
                    ),
            ),
            collection: 'avatars',
        );
    }
}
