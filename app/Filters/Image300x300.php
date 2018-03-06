<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image300x300 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(300, 300);
    }

}