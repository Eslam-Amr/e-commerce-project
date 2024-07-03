<?php

namespace App\Trait;

use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    public function storeImage($request, $fileName)
    {
        // get image
        $image = $request->image;
        //change current name
        $newImageName = rand(0, 100) . time() . rand(0, 100) . '-' . $image->getClientOriginalName();
        //move image to folder
        $image->storeAs($fileName, $newImageName, 'public');
        //save image name to database
        return $newImageName;
    }
    public function updateImage($request, $model,$fileName)
    {
        if ($request->hasFile('image')) {

            // delete old image
            // Storage::delete("public/blogs/$model->image");
            $this->destroyImage($fileName,$model);
            // get image
            $image = $request->image;
            //change current name
            $newImageName = rand(0, 100) . time() . rand(0, 100) . '-' . $image->getClientOriginalName();
            //move image to folder
            $image->storeAs($fileName, $newImageName, 'public');
            //save image name to database
            // $data['image'] = $newImageName;
            return $newImageName;
        }
    }
    public function destroyImage($fileName, $model)
    {
        Storage::delete("public/$fileName/$model->image");
    }
}
