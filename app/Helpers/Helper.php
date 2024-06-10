<?php

namespace App\Helpers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\JsonResponse;

class Helper
{
    public function Successful($status, $message, $data = null, $code = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public function Error($message="", $code = 404, $data = null)
    {
        $response = [
            'status' => $code,
            'message' => $message,
            'data' => $data,
        ];
        return response()->json($response);
    }

    public static function selectedColumns(array $languageKeys, string $lang, string $id = 'id')
    {
         $columns = array_merge([$id], array_map(function ($key) use ($lang) {
            return $key . '_' . $lang;
        }, $languageKeys));

        return $columns;
    }



    public static function fileUploader($file, $folder)
    {
        $extension = $file->extension();
        $file_name = uniqid() . '_' . strtotime("now") . '.' . $extension;

        return $file->storeAs('uploads/' . $folder, $file_name, 'public');
    }

    public static function getFilePath($path)
    {
        return asset('storage/' . $path);
    }

    public static function deleteFile($path)
    {
        if (File::exists(public_path('storage/' . $path))) {
            File::delete(public_path('storage/' . $path));
        }
    }
}
