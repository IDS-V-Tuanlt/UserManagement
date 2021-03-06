<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship

            $table->unsignedBigInteger('dh_ma')
                ->comment('Ma don hang');
            $table->unsignedBigInteger('sp_ma')
                ->comment('Ma san pham');
            $table->unsignedSmallInteger('ctdh_soLuong')
                ->default(1)
                ->comment('So luong');
            $table->unsignedInteger('ctdh_donGia')
                ->default(1)
                ->comment('Don gia');
            $table->primary(['dh_ma','sp_ma']);
            $table->foreign('dh_ma')
                ->references('dh_ma')
                ->on('order')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('sp_ma')
                ->references('sp_ma')
                ->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
}
