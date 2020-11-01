<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 配列を初期化
            $data = [];
            // レストランテーブルのデータ数分繰り返す
            foreach(App\Restaurant::all() as $r) {
                // レストラン毎に3枚の画像を登録する
                for ($i = 0; $i < 3; $i++) {
                    // 配列に追加していく
                    $data[] = [
                        'restaurant_id' => $r->id,
                        'img_path' => 'storage/menu_image/' . rand(1,17) . '.jpg',
                    ];
                }
            }
            // 配列をinsertで登録する
            DB::table('menus')->insert($data);
    }
}
