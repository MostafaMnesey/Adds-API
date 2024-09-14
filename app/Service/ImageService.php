<?php

namespace App\Service;

class ImageService
{
    /**
     * Create a new class instance.
     */


    public function storeProfilePhoto($request)
    {
        dd($request->file('profile_photo'));
        $image = $request->file('profile_photo');
        if ($image) {
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/users'), $filename);
            return $filename;
        }

    }

}
