<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'firstname');
            $table->string('lastname')->after('name');
            $table->boolean('saveddetails');
            $table->boolean('completeprofile');
            $table->boolean('premiummember');
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->renameColumn('firstname', 'name');
            $table->dropColumn('lastname');
            $table->dropColumn('saveddetails');
            $table->dropColumn('completeprofile');
            $table->dropColumn('premiummember');
            $table->dropColumn('status', 50);
        });
    }
}
