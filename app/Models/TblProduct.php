<?php

namespace App\Models;

use Backpack\LangFileManager\app\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class TblProduct extends Model
{
    use CrudTrait;
    use HasTranslations;
     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_products';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['pro_cate','pro_type','pro_code','title','image','qty','price','kalory','description','pro_promotion','in_putter','status'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['title', 'description'];

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
            Image::make(file_get_contents($value))->save("uploads/images/products/$filename");

            $this->attributes[$attribute_name] = "uploads/images/products/$filename";
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

    public function category()
    {
        return $this->belongsTo('App\Models\TblCategory', 'pro_cate');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\TblType', 'pro_type');
    }
//
//    public function getTitleAttribute($option){
////        $lang_ses = Language::where('active',1)->get();
//
//        if (session('lan') == 'en'){
//            return json_decode($option)->en;
//        }else if (session('lan') == 'km'){
//            return json_decode($option)->km;
//        }else{
//            return json_decode($option)->en;
//        }
//    }
//
//    public function getDescriptionAttribute($option){
//        if (session('lan') == 'en'){
//            return json_decode($option)->en;
//        }else if (session('lan') == 'km'){
//            return json_decode($option)->km;
//        }else{
//            return json_decode($option)->en;
//        }
//    }
}
