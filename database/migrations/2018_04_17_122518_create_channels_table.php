<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcategory_id')->index()->unsigned();
            $table->integer('profile_id')->index()->unsigned();
            $table->string('title')->unique();  
            $table->string('slug')->unique();  
            $table->string('subtitle')->nullable();
            $table->text('about')->nullable();  
            $table->string('image')->unique();
            $table->integer('likes')->unsigned()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
