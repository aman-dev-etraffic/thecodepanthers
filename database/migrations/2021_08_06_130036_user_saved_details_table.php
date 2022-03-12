<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSavedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saveddetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->string('city');
            $table->string('postal_code');
            $table->date('dob');
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
        Schema::dropIfExists('saveddetails');
    }
}
