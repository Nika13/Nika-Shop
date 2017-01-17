<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	  Schema::create('maintexts',function(Blueprint $t) {
		  $t -> increments('id');
		  $t -> string('name');
		  $t -> text('body');
		  $t -> string('url');
		  $t -> enum('lang', array('ru','en')) -> default('ru');
		  $t -> timestamps();
	  } );	
    }  
       
     /**
       * Reverse the migrations.
       *
       * @return void
       */
     public function down()
    {
        Schema::drop('maintexts');
    }
}
