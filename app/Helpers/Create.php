<?php
namespace App\Helpers;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class Create
{
    public static function file($fileName, $path, $folder)
    {
        $dataFile = [
            'name' => $fileName,
            'address' => Gen::uuid(),
            'path' => $path,
            'folder' => $folder,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id
        ];

        $file = File::create($dataFile);

        return $file;
    }

    public static function resize($request, $folder, $path)
    {
        $image       = $request->file('image');
        $fileName    = $image->getClientOriginalName();

        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(300, 300);
        $image_resize->save(storage_path('app/public/'. $path . '/' . $fileName));
        $path = $folder . '/' . Auth::user()->id . '/' . $fileName;

        $file = Create::file($fileName, $path, $folder);

        return $file;
    }

    public static function image($request,  $folder, $path)
    {
        $fileName = $request->image->getClientOriginalName();

        $path =  Storage::disk('public')->put(
            $path,
            $request->file('image')
        );

        $file = Create::file($fileName, $path, $folder);

        return $file;

    }
}
