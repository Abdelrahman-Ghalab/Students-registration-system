<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropOldTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('section1') ;
        Schema::drop('section2') ;
      //
      Schema::drop('section3') ;
      Schema::drop('section4') ;
      Schema::drop('section5') ;
      Schema::drop('section6') ;
      Schema::drop('section7') ;
      Schema::drop('section8') ;


    }
}
