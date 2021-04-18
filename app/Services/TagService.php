<?php


namespace App\Services;


use App\Models\Article;
use Illuminate\Support\Collection;

class TagService
{
    public function getAssignedTags(int $nbTags = null): Collection
    {
        return Article::all()->pluck('tags.*.name')->collapse()->unique();
    }
}
