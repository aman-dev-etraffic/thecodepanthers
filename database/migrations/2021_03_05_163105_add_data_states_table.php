<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDataStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('states')->insert([
            ['state_name' => 'Haryana', 'country_id' => 1],
            ['state_name' => 'Chandigarh', 'country_id' => 1],
            ['state_name' => 'Assam', 'country_id' => 1],
            ['state_name' => 'Maharashtra', 'country_id' => 1],
            ['state_name' => 'Punjab', 'country_id' => 1],
            ['state_name' => 'Nunavut', 'country_id' => 2],
            ['state_name' => 'Quebec', 'country_id' => 2],
            ['state_name' => 'Ontario', 'country_id' => 2],
            ['state_name' => 'Alberta', 'country_id' => 2],
            ['state_name' => 'Manitoba', 'country_id' => 2],
            ['state_name' => 'Victoria', 'country_id' => 3],
            ['state_name' => 'Tasmania', 'country_id' => 3],
            ['state_name' => 'Western Australia', 'country_id' => 3],
            ['state_name' => 'Queensland', 'country_id' => 3],
            ['state_name' => 'New South Wales', 'country_id' => 3],
            ['state_name' => 'New Jersey', 'country_id' => 4],
            ['state_name' => 'New Mexico', 'country_id' => 4],
            ['state_name' => 'New York', 'country_id' => 4],
            ['state_name' => 'Texas', 'country_id' => 4],
            ['state_name' => 'Utah', 'country_id' => 4],
            ['state_name' => 'Alsace', 'country_id' => 5],
            ['state_name' => 'Artois', 'country_id' => 5],
            ['state_name' => 'Berry', 'country_id' => 5],
            ['state_name' => 'Champagne', 'country_id' => 5],
            ['state_name' => 'Picardy', 'country_id' => 5],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('states')->delete();
    }
}
