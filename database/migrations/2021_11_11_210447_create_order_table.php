<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship

            $table->unsignedBigInteger('dh_ma')
                ->autoIncrement()
                ->comment('Ma don hang');
            $table->unsignedBigInteger('kh_ma')
                ->comment('Ma khach hang');
            $table->dateTime('dh_thoiGianDatHang')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Thoi gian dat hang');
            $table->dateTime('dh_thoiGianNhanHang')
                ->comment('Thoi gian nhan hang');
            $table->string('dh_nguoiNhan', 100)
                ->comment('Nguoi nhan 100 ky tu');
            $table->string('dh_diaChi')
                ->comment('Dia chi nguoi nhan 191 ky tu');
            $table->string('dh_dienThoai', 17)
                ->comment('So dien thoai 11 ky tu');
            $table->string('dh_nguoiGui', 100)
                ->comment('Nguoi gui 100 ky tu');
            $table->unsignedTinyInteger('dh_daThanhToan')
                ->default(0)
                ->comment('Don hang da thanh toan mac dinh 0');
            $table->timestamp('dh_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Thoi diem tao moi');
            $table->timestamp('dh_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Thoi diem cap nhat');
            $table->unsignedTinyInteger('dh_trangThai')
                ->default(1)
                ->comment('Trang thai: 1-Khoa, 2-Kha dung');
            $table->foreign('kh_ma')
                ->references('kh_ma')
                ->on('customer')
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
        Schema::dropIfExists('order');
    }
}
