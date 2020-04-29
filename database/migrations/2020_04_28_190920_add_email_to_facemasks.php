<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailToFacemasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facemasks', function (Blueprint $table) {
            //
            $table->string('vendor_number')->default('2348102038614');
            $table->string('vendor_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facemasks', function (Blueprint $table) {
            //
        });
    }
}
