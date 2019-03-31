<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('password');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->text('address1');
            $table->text('address2')->nullable();
            $table->string('division');
            $table->string('city');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('id_type');
            $table->string('id_no');
            $table->string('id_img_front');
            $table->string('id_img_back');
            $table->string('vendor_img1');
            $table->string('vendor_img2')->nullable();
            $table->string('vendor_img3')->nullable();
            $table->string('payment_method1');
            $table->string('payment_description1');
            $table->string('payment_method2')->nullable();
            $table->string('payment_description2')->nullable();
            $table->string('payment_method3')->nullable();
            $table->string('payment_description3')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('vendors');
    }
}
