<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create(
        'comments', function($table) {
          $table->increments('id');
          // ポストテーブルとコメントテーブルの紐付けに利用します。
          $table->unsignedInteger('post_id');
          $table->string('commenter');
          $table->text('comment');
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
      Schema::drop('comments');
    }
}
