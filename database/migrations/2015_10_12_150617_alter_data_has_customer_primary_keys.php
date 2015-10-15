<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDataHasCustomerPrimaryKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_has_customers', function (Blueprint $table) {
            $table->primary(['dataId', 'customerId']);      // set primary key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_has_customers', function (Blueprint $table) {
            $table->dropPrimary(['dataId', 'customerId']);
        });
    }
}
