<?php

namespace ITPC\MySettings\app\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use CrudTrait;

    protected $table = 'my_settings';
    protected $fillable = ['value'];
}
