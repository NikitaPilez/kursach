<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateInformationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('information',function(Blueprint $table){
            $table->increments("id");
            $table->string("title")->nullable();
            $table->string("header")->nullable();
            $table->string("subtitle")->nullable();
            $table->text("description")->nullable();
            $table->enum("display", ["show", "hide"])->nullable();
            $table->string("photo")->nullable();
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
        Schema::drop('information');
    }

}