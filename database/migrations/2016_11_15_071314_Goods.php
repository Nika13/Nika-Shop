<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Goods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('goods',function(Blueprint $t) {
		  $t -> increments('id');
		  $t -> string('name');
		  $t -> string('cost');
		  $t -> text('description');
		  $t -> integer('category');
		  $t -> string('picture');
		  $t -> enum('showhide', array('show','hide')) -> default('show');
		  $t -> integer('user_id');
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
         Schema::drop('goods');
    }
}
