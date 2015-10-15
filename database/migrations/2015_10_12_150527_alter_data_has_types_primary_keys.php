<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasTypesPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_types', function (Blueprint $table) {
            $table->primary(['dataId', 'typeId']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->dropPrimary(['dataId', 'typeId']);
        });
    }
}
