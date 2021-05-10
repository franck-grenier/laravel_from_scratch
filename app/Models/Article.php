<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    const VALIDATION = [
        'title' => 'required|max:255',
        'slug' => 'required|unique:articles,slug|max:255',
        'excerpt' => 'required',
        'body' => 'required',
        'tags' => 'exists:tags,id',
        'user_id' => 'exists:users,id'
    ];

    protected $fillable = ['title', 'excerpt', 'body', 'slug', 'user_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
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
