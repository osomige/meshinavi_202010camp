<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // カテゴリーテーブルにデータが入っていなかった場合に実行する。
            if (!DB::table('categories')->first()) {
                DB::table('categories')->insert([
                    ['id' => '1', 'name' => '居酒屋'],
                    ['id' => '2', 'name' => '日本料理・郷土料理'],
                    ['id' => '3', 'name' => 'すし・魚料理・シーフード'],
                    ['id' => '4', 'name' => '鍋'],
                    ['id' => '5', 'name' => '焼肉・ホルモン'],
                    ['id' => '6', 'name' => '焼き鳥・肉料理・串料理'],
                    ['id' => '7', 'name' => '和食'],
                    ['id' => '8', 'name' => 'お好み焼き・粉物'],
                    ['id' => '9', 'name' => 'ラーメン・麺料理'],
                    ['id' => '10', 'name' => '中華'],
                    ['id' => '11', 'name' => 'イタリアン・フレンチ'],
                    ['id' => '12', 'name' => '洋食'],
                    ['id' => '13', 'name' => '欧米・各国料理'],
                    ['id' => '14', 'name' => 'カレー'],
                    ['id' => '15', 'name' => 'アジア・エスニック料理'],
                    ['id' => '16', 'name' => 'オーガニック・創作料理'],
                    ['id' => '17', 'name' => 'ダイニングバー・バー・ビアホール'],
                    ['id' => '18', 'name' => 'お酒'],
                    ['id' => '19', 'name' => 'カフェ・スイーツ'],
                    ['id' => '20', 'name' => '宴会・カラオケ・エンターテイメント'],
                    ['id' => '21', 'name' => 'ファミレス・ファーストフード'],
                    ['id' => '22', 'name' => 'その他の料理'],
                ]);
            }
    }
}
