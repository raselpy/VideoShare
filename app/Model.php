<?php

namespace VideoShare;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
     public $incrementing = false;

     protected $guarded =[];

    public static function boot()
	{
        parent::boot();
    	self::creating(function ($model) {
    	    $model->{$model->getKeyName()} = (string) Str::uuid();
    	});
	}
}
