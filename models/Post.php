<?php
class Post extends Eloquent {
  public function Comments() {
    // 投稿:コメント = 1:N
    return $this->hasMany('Comments', 'post_id');
  }

  public function Category() {
    // カテゴリー:投稿 = 1:N
    return $this->belongsTo('Category', 'cat_id');
  }
}
