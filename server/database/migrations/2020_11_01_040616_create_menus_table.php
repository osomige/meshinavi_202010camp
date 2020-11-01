<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('restaurant_id')->unsigned();   // 正負の符号無し属性を設定
             $table->foreign('restaurant_id')                // restaurant_idに外部キーを設定する
                 ->references('id')->on('restaurants')   // restaurantsテーブルのidカラムを外部キーにする
                 ->onDelete('cascade');                  // 参照先のデータが削除されたら、一緒に削除する
            $table->string('img_path');
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
        Schema::dropIfExists('menus');
    }
}
