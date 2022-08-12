<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();

            $table->string("uuid");
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_user');
            $table->integer("amount");
            $table->integer("tax");
            $table->integer("admin_fre");
            $table->integer("total");
            $table->foreign('id_product')->references('id')->on('products')
                ->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
};
