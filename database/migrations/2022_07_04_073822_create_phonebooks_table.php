<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            // $table->string('email')->unique(); // check for duplicates
            // $table->string('phone')->unique(); // check for duplicates
            $table->string('email');
            $table->string('phone'); 
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
        Schema::dropIfExists('phonebooks');
    }
}
