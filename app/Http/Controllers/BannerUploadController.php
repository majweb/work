<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BannerUploadController extends Controller
{
    public function upload(Request $request)
    {
        try {
            $fileFields = [
                'banner' => ['image', 'mimes:png,jpg,jpeg,gif', 'max:2000','dimensions:min_width=300,min_height=200'],
            ];
            $customMessages = [
                'banner.dimensions' => __('translate.photoDimensions'),
            ];

            $customNames = [
                'banner' => 'Baner',
            ];

            // Znajdź pierwsze pole, które zawiera plik
            $file = null;
            foreach ($fileFields as $field => $rules) {
                if ($request->hasFile($field)) {
                    $request->validate([$field => $rules], $customMessages, [$field => $customNames[$field]]);
                    $file = $request->file($field);
                    break;
                }
            }

            if (!$file) {
                return response()->json(['error' => __('translate.no_file_uploaded')], 400);
            }

            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs("/temps/$folder", $filename,'public');

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename,
            ]);

            return $folder;
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        }
    }
}
