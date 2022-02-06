<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateHunZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('hungarian-zip-codes.table_name'), function (Blueprint $table) {
            $table->id();
            $table->string('zip_code', 4);
            $table->string('settlement', 255);
            $table->string('part_of_settlement', 255)->nullable();
            if(Config::get('hungarian-zip-codes.district')) {
                $table->string('district', 255)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('hungarian-zip-codes.table_name'));
    }
}
