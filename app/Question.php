<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    // Mass assignment
    protected $fillable = [
        'title', 
        'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mutator
    public function setTitleAttributes($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }
}
