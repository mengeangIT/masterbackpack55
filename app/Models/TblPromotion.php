<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class TblPromotion extends Model
{
    use CrudTrait;

    use HasTranslations;

    protected $table = 'tbl_promotions';
     protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['title','start_date','last_date','image','content','slug','in_putter','status'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['title', 'content'];

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public/";

        // if the image was erased
        if (($value == null && $this->id == 0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if (File::exists($this->image)) File::delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/images/promotions/$filename");

            $this->attributes[$attribute_name] = "uploads/images/promotions/$filename";
        }
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($obj) {
            //\Storage::disk('public_folder')->delete($obj->image);
            if (File::exists($obj->image)) File::delete($obj->image);
        });
    }

//    public function getTitleAttribute($option)
//    {
//        dd($option);
//
//        if(session('lan') == 'km'){
//
//        }
//    }


}
