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
        $this->attributes['book'] = htmlspecialchars($value, ENT_QUOTES);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = htmlspecialchars($value, ENT_QUOTES);
    }

    public function setRecommendAttribute($value)
    {
        $this->attributes['recommend'] = htmlspecialchars($value, ENT_QUOTES);
    }
}
