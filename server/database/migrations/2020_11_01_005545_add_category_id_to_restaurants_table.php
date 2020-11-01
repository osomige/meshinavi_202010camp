<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->integer('category_id')              // category_idを追加
                 ->after('category')                     // categoryカラムの後ろに追加
                 ->unsigned()                            // 正負の符号無し属性を設定
                 ->default(1);                           // 空で外部キーを設定できないのでデフォルトの制約を追加
             $table->foreign('category_id')              // category_idに外部キーを設定する
                 ->references('id')->on('categories')    // categoriesテーブルのidカラムを外部キーにする
                 ->onDelete('restrict');                 // 参照先の削除を禁止する
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
             $table->dropForeign('restaurants_category_id_foreign'); //外部キー制約の削除
             $table->dropColumn('category_id');                      //カラム削除
        });
    }
}
