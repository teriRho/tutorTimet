<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

}
