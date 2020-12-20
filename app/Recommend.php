<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    protected $table = 'wechat_recommends';
    public $timestamps = false;

    protected $fillable = ['book', 'author', 'recommend'];

    public function setBookAttribute($value)
    {
        $this->attributes['book'] = clean($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = clean($value);
    }

    public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = clean($value);
    }
}
