<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //so here is our migration lets see so we have those two function thet we
    //talked about earlier 
    public function up()
    {
        //so here we can see that we have these two by default tables entry
        //lets add our tables
        Schema::create('posts', function (Blueprint $table) {
            //This Function will execute when we run db mifrate command and
            //creates all those table that we mentioned here
            //This is the table we will use for our Posts
            $table->increments('id');
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
            //Also lets fix that stringisgh error
            //  File :  providers/AppServiceProviders.php
            //okay migrated successfully all the tables
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //This function will be excuted when we role back our
        //migration it will then drop all the tables in the migration
        Schema::dropIfExists('posts');
    }
}
