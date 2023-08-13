<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        self::creating(function($article) {
            $article->user()->associate(auth()->user()->id);
            $article->articlecategory()->associate(request()->articlecategory);      
        });

        self::updating(function ($article) {
            $article->articlecategory()->associate(request()->articlecategory);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articlecategory()
    {
        return $this->belongsTo(Articlecategory::class);                         
    }

}


