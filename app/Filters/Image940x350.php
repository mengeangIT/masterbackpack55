<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image940x350 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(940, 350);
    }

}