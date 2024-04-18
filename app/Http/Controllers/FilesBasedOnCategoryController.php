<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FilesBasedOnCategoryController extends Controller
{
    public function getFilesUnderCategory($directoryName)
    {
        $directory = public_path('scripts' . "/{$directoryName}/"); 

        $files = File::files($directory);

        $prettifiedResults = [];
        foreach ($files as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $prettifiedResults[] = ucfirst($fileName);
        }

        return view($directoryName, ['files' => $prettifiedResults]);
    }
}
