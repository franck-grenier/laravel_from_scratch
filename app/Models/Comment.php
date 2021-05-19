<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    const VALIDATION = [
        'body' => 'required|max:170',
        'article_id' => 'exists:articles,id',
        'user_id' => 'exists:users,id'
    ];

    protected $fillable = ['body', 'article_id', 'user_id'];

    public function article() {
        return $this->belongsTo(Article::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setBest() {
        $this->best_comment = 1;
        return $this->save();
    }
}
