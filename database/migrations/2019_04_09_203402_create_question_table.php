<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateQuestionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('question',function(Blueprint $table){
            $table->increments("id");
            $table->string("question");
            $table->string("answer")->nullable();
            $table->string("date");
            $table->enum("display", ["show", "hide"])->nullable();
            $table->string("comment")->nullable();
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
        Schema::drop('question');
    }

}