<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
          $table->string('section_ID')->index();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
}
