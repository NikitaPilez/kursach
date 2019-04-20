<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('order',function(Blueprint $table){
            $table->increments("id");
            $table->integer("services_id")->references("id")->on("services")->nullable();
            $table->string("phone")->nullable();
            $table->string("date")->nullable();
            $table->enum("display", ["show", "hide", ])->nullable();
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->enum("status", ["complite", "canceled", "on_hold", "processing", ""])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }

}