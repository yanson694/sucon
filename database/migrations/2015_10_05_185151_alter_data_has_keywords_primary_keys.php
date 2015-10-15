<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasKeywordsPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_keywords', function (Blueprint $table) {
            $table->primary(['dataId', 'keywordId']);      // set primary key
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
            $table->dropPrimary(['dataId', 'keywordId']);
        });
    }
}
