<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    const validation = [
        'title' => 'required|max:255',
        'slug' => 'required|unique:articles|max:255',
        'excerpt' => 'required',
        'body' => 'required'
    ];

    protected $fillable = ['title', 'excerpt', 'body', 'slug'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            // Temporary hack
            $article->user_id = $article->user_id ?? 1;
        });
    }

    /**
     * Make sure "slug" is slugified
     *
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
