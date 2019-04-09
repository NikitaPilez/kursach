<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'question';
    
    protected $fillable = [
          'question',
          'answer',
          'date',
          'display',
          'comment'
    ];
    
    public static $display = ["show" => "show", "hide" => "hide"];


    public static function boot()
    {
        parent::boot();

        Question::observe(new UserActionsObserver);
    }
    
    
    
    
}