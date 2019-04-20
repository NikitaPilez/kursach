<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'order';
    
    protected $fillable = [
          'services_id',
          'phone',
          'date',
          'display',
          'user_id',
          'status'
    ];
    
    public static $display = ["show" => "show", "hide" => "hide", ];
    public static $status = ["complite" => "complite", "canceled" => "canceled", "on_hold" => "on_hold", "processing" => "processing", "" => ""];


    public static function boot()
    {
        parent::boot();

        Order::observe(new UserActionsObserver);
    }
    
    public function services()
    {
        return $this->hasOne('App\Services', 'id', 'services_id');
    }


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }


    
    
    
}