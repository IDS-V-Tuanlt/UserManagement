<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker      = Faker\Factory::create('vi_VN'); // zone
        $tz         = 'Asia/Ho_Chi_Minh'; //GMT+7 UTC
        $nComments  = 50;
        $now = new Carbon('2018-1-1', $tz);
        $times      = [];
        for ($i=1; $i <= $nComments; $i++)
            array_push($times, $faker->dateTimeThisYear('now', $tz));
        sort($times);
        $list = [];
        foreach ($times as $key => $value) {
            $created = $now->copy()->addSeconds($faker->numberBetween(1, 259200));
            $updated = $created->copy()->addSeconds($faker->numberBetween(1, 172800));
            $giaBan = $faker->numberBetween(10000, 3000000);
            array_push($list, [
                'sp_ten'            => $faker->unique()->text('10'),
                'sp_giaBan'         => $giaBan,
                'sp_thongTin'       => $faker->text(250),
                'sp_taoMoi'         => $created,
                'sp_capNhat'        => $updated,
                'sp_trangThai'      => $faker->numberBetween(1, 2),
            ]);
        }
        DB::table('product')->insert($list);
    }
}
