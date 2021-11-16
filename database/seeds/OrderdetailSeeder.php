<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker      = Faker\Factory::create('vi_VN'); // zone
        $tz         = 'Asia/Ho_Chi_Minh'; //GMT+7 UTC
        $nComments  = 100;
        $times      = [];
        for ($i=1; $i <= $nComments; $i++)
            array_push($times, $faker->dateTimeThisYear('now', $tz));
        sort($times);
        $list = [];
        foreach ($times as $key => $value) {
            array_push($list, [
                'dh_ma'            => $faker->unique(true)->numberBetween(1, 50),
                'sp_ma'            => $faker->numberBetween(1, 50),
                'ctdh_soLuong'     => $faker->numberBetween(10, 200),
                'ctdh_donGia'      => $faker->numberBetween(100000, 3000000)
            ]);
        }
        DB::table('orderdetail')->insert($list);
    }
}
