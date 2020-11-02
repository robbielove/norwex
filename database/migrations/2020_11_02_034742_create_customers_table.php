<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CustomerId');
            $table->string('CustomerStatusId')->nullable();
            $table->foreign('CustomerStatusId', 'CustomerStatusId')->references('Code')->on('customer_statuses');
            $table->string('Name');
            $table->timestamps();
        });
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
