<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
          'posts', function($table) {
            $table->increments('id');
            $table->string('title');
            // ポストテーブルとカテゴリーテーブルの紐付けに利用します。
            $table->string('cat_id');
            $table->text('content');
            // 投稿に何件のコメントがついたのかをカウントします。
            $table->unsignedInteger('comment_count');
            $table->timestamps();
          }
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::drop('posts');
    }
}
