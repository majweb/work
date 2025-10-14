<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FileUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $fileFields = [
                'files' => ['file', 'mimes:pdf,doc,docx', 'max:3000'],
                'photo' => ['image', 'mimes:png,jpg,jpeg,gif', 'max:2000','dimensions:min_width=300,min_height=200'],
                'cvFile' => ['file', 'mimes:pdf,doc,docx', 'max:5000'],
            ];
            $customMessages = [
                'photo.dimensions' => __('translate.photoDimensions'),
            ];

            $customNames = [
                'files' => __('translate.file.plural'),
                'photo' => __('translate.photo'),
                'cvFile' => __('translate.fileCv'),
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
