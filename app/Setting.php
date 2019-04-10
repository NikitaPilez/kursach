<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'setting';
    
    protected $fillable = [
          'copyright',
          'phone',
          'email',
          'address',
          'header',
          'subtitle',
          'title'
    ];
    

    public static function boot()
    {
        parent::boot();

        Setting::observe(new UserActionsObserver);
    }
    
    
    
    
}