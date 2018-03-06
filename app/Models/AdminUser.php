<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Notifications\Notifiable;

class AdminUser extends Model
{
    use CrudTrait;
    use Notifiable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'users';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    //protected $guarded = ['id'];
    protected $fillable = [
        'name','email','phone','photo'
    ];
    // protected $hidden = [];
    // protected $dates = [];

//    public function setPasswordAttribute($value)
//    {
//        return bcrypt($value);
//    }

    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
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
            Image::make(file_get_contents($value))->save("uploads/users/$filename");

            $this->attributes[$attribute_name] = "uploads/users/$filename";
        }
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($obj) {
            //\Storage::disk('public_folder')->delete($obj->image);
            if (File::exists($obj->photo)) File::delete($obj->photo);
        });

//
//        static::creating(function ($obj){
//            return false;
//            dd('creating',$obj);
//
//        });
//
//        static::created(function ($obj){
//            dd('created',$obj);
//        });
//
//        static::updating(function ($obj){
//            dd('updating',$obj);
//        });
//
//
//        static::updated(function ($obj){
//            dd('updated',$obj);
//        });
//
    }

    public static function getNotificationUsers($notificationType = 500){
        $arr = [
            100 => 'PURCHASE REQUEST',
            110 => 'PURCHASE ORDER',
            120 => 'PURCHASE',

            500 => 'CUSTOMER REQUEST NEW',
            510 => 'CUSTOMER REQUEST NEW Census',

            520 => 'CUSTOMER REQUEST CHANGE POWER',
            530 => 'CUSTOMER REQUEST CHANGE POWER Census',

            540 => 'CUSTOMER REQUEST CHANGE NAME',
            550 => 'CUSTOMER REQUEST CHANGE NAME Census',

            560 => 'CUSTOMER REQUEST REPAIRING',
            570 => 'CUSTOMER REQUEST REPAIRING Census',

        ];

        if(isset($arr[$notificationType])) {
            return self::where('user_notifications.notification_type', $arr[$notificationType])
                ->join('user_notifications', 'user_notifications.user_id', 'users.id')
                ->select('users.*')
                ->get();
        }else{
            return [];
        }
    }

}
