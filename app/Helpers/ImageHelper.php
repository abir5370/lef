<?php
namespace App\Helpers;

use Illuminate\Support\Facades\File;

class ImageHelper
{
    public static function uploadImage($file, $destinationPath)
    {
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($destinationPath), $imageName);

        return $imageName;
    }

    public static function deleteImage($imagePath)
    {
        if (File::exists(public_path($imagePath))) {
            File::delete(public_path($imagePath));
        }
    }
}

// use App\Helpers\ImageHelper;

// // ...

// // Image management using helper function
// if ($request->file('image')) {
//     $image = $request->file('image');
//     $imageName = ImageHelper::uploadImage($image, '/image/slider/');
//     $validateData['image'] = $imageName;
// }

// // Store data
// Slider::create($validateData);
