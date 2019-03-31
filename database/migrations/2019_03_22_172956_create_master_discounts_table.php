<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('discount_code');
            $table->tinyInteger('discount_type');
            $table->integer('discount_percent');
            $table->integer('discount_kyat');
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
        Schema::dropIfExists('master_discounts');
    }
}
