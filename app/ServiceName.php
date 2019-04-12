<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceName extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'servicename';
    
    protected $fillable = [
          'services_id',
          'name',
          'display'
    ];
    
    public static $display = ["show" => "show", "hide" => "hide"];


    public static function boot()
    {
        parent::boot();

        ServiceName::observe(new UserActionsObserver);
    }
    
    public function services()
    {
        return $this->hasOne('App\Services', 'id', 'services_id');
    }


    
    
    
}