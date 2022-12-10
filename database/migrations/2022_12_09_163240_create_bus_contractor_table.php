<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_contractor', function (Blueprint $table) {
            $table->id('c_id');
            $table->string('c_name');
            $table->string('c_mail');
            $table->string('c_pass');
            $table->string('c_add');
            $table->string('s_pass');
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
        Schema::dropIfExists('bus_contractor');
    }
};
